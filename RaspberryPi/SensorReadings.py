import sys
sys.path.append('../')
import time,datetime
from datetime import datetime
import os
import glob 
import RPi.GPIO as GPIO
from firebase import firebase
sys.path.append(os.path.dirname(os.path.dirname(os.path.realpath(__file__))))
os.path.dirname(os.path.dirname(os.path.realpath(__file__))))

ADS1115_REG_CONFIG_PGA_6_144V        = 0x00 # 6.144V range = Gain 2/3
ADS1115_REG_CONFIG_PGA_4_096V        = 0x02 # 4.096V range = Gain 1
ADS1115_REG_CONFIG_PGA_2_048V        = 0x04 # 2.048V range = Gain 2 (default)
ADS1115_REG_CONFIG_PGA_1_024V        = 0x06 # 1.024V range = Gain 4
ADS1115_REG_CONFIG_PGA_0_512V        = 0x08 # 0.512V range = Gain 8
ADS1115_REG_CONFIG_PGA_0_256V        = 0x0A # 0.256V range = Gain 16
ads1115 = ADS1115()

os.system('modprobe w1-gpio')
os.system('modprobe w1-therm')

base_dir = '/sys/bus/w1/devices/'
device_folder = glob.glob(base_dir + '28*')[0]
device_file = device_folder + '/w1_slave'

ads1115 = ADS1115()

url = 'https://waterparameters-default-rtdb.firebaseio.com'
firebase = firebase.FirebaseApplication(url)

def get_ph_velue():
 adc1 = ads1115.read_voltage(1)
 raw_ph__value = adc1['r']
 ph_value = raw_ph_value * (3.3/4095.0)
 ph_value = 4.0 * ph_value
 ph_value = round(ph_value, 2)
 print("pH value measured at" ", datetime.now() ,"is:", ph_value)
 if ph_value > 0 and ph_value < 7:
  print("Measured sample is acidic")
 elif ph_value == 7:
  print("Measured sample is neutral")
 else:
  print("Measured sample is basic")
 print("--------------------------")
 return ph_value
def get_turbidity_value():
 adc2 = ads1115.read_voltage(2)
 value = adc2['r']
 volt = value / 1000
 if volt < 2.5:
  turbidity_value = 3000
 else:
  turbidity_value = -1120.4*volt*volt+5742.3*volt-4352.9
 turbidity_value = round(turbidity_value,2)
 print("Turbidity value measured at" ", datetime.now() ,"is:", turbidity_value)
 if turbidity_value > 0 and turbidity_value < 400:
        print("Water is very clear and suitable for drinking")
 elif turbidity_value > 400 and turbidity_value < 1000:
        print("Water is dirty. Please do not drink!")
 elif turbidity_value > 1000 and turbidity_value < 3000:
        print("Water is very dirty. Please do not drink!")
  else:
        print("Water is extremely dirty. Please do not drink!")
  print("--------------------------")
  return turbidity_value
 
def read_temp_raw():
	f = open(device_file, 'r')
	lines = f.readlines()
	f.close()
	return lines

def get_temperature_value():
 lines = read_temp_raw()
 while lines[0].strip()[-3:] !- 'YES':
  time.sleep(0.2)
  lines = read_temp_raw()
 equals_pos - lines[1].find('t=')
 if equals_pos != -1:
  temp_string = lines[1][equals_pos+2:]
  temp_c = float(temp_string) / 1000.0
  temp_f = temp_c * 9. / 5.0 + 32.0
  temp_c = round(temp_c,2)
   print("Temperature value measured at" ", datetime.now() ,"is:", temp_c)
  if temp_c < 0:
           print("Water is very cold")
  elif temp_c >0 and temp_c < 20:
            print("Water is medium")
  elif temp_c > 20 and temp_c < 30:
            print("Water is warm")
  else:
            print("Water is hot")
  print("--------------------------")
  return temp_c
def get_level_value():
    GPIO.setwarnings(False)
    GPIO.setmode(GPIO.BCM)
    TRIG = 23
    ECHO = 24
    GPIO.setup(TRIG,GPIO.OUT)
    GPIO.setup(ECHO,GPIO.IN)
    GPIO.output(TRIG, False)
    time.sleep(2)
    GPIO.output(TRIG,True)
    time.slep(0.00001)
    GPIO.output(TRIG,False)while GPIO.input(ECHO)==0:
     pulse_start = time.time()
    while GPIO.input(ECHO)==1:
     pulse_end = time.time()
    pulse_duration = pulse_end - pulse_start
    distance = pulse_duration * 17150
    distance = round(distance,2)
    distance_final = 6.8 - distance 
    distance_final = round(distance_final,2)
    if distance_final < 0 : 
     print("Water tank is empty")
    elif distance_final > 0 and distance_final < 6.3:
     print("Water tank has water")
    else:
     print(Water tank is full. Please empty the tank")
    GPIO.cleanup()
    print("--------------------------")
    return distance_final
    
def update_firebase():
    date = datetime.now().date()
    time = datetime.now().strftime("%H:%M:%S")
    temp = get_temperature_value()
    turb = get_turbidity_value()
    ph = get_ph_value()
    depth = get_level_value()
    data = {"date": date,"time": time,"temperature": temp, "turbidity":turb,"ph": ph, "level": depth}
    firebase.post('parameters',data)
    
while True: 
    update_firebase()
    time.sleep(300)
     

