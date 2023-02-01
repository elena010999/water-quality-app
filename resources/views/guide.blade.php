<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="/css/guide.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="Stylesheet" href="/css/banner.css" />

</head>

<body>
    @include('navbar')
    @include('loader')
    <div class="banner">
        <img src="/images/banner.jpg" style="width:100%;height:200px;">
        <div class="centered">Read the full description of how to setup your project here.</div>
    </div>
    <div id="overviews" class="section lb">
        <div class="container">
            <div class="card">
                <div class="row ">

                    <div class="col-md-7 px-3">
                        <div class="card-block px-6">
                            <h4 class="card-title" style="color:#007FFF;font-size:20px"><b>Step 1: Connect the sensors</b></h4>
                            <p class="card-text" style="text-align:justify">
                                In this project two types of sensors are used: analog and digital. Digital sensors are connected directly to board, while for
                                connecting analog sensors, analog to digital converter is required.
                            <ol style="margin-left:10px;">
                                <li>Connect ADC to Raspberry Pi: Black Wire(GND) to Pin 6, Red Wire(VCC) to Pin 4, </br> Green Wire(DATA) to Pin 3, Blue Wire(Clock line) to pin 5.</li>
                                <li>Connect ph Sensor: plug on the ADC (channel 0) since it is analog.</li>
                                <li>Connect Turbidity Sensor: plug on the ADC (channel 1) since it is analog.</li>
                                <li>Connect Temperature Sensor: Black Wire(GND) to pin 9, Red Wire(VCC) to pin 1, Green Wire(Signal line) to pin 7 (GPIO 4).</li>
                                <li>Connect Distance Sensor:For this sensor you need 2 resistors, breadboard and jumper wires. Please visit this <a href="https://thepihut.com/blogs/raspberry-pi-tutorials/hc-sr04-ultrasonic-range-sensor-on-the-raspberry-pi?fbclid=IwAR3Dqg-b1O2BJFv027KtdvUh2AewwB_rg6vxb86pEo51q8G0f4Dz1hyb3Ek">tutorial</a> for full step by step description of setting HC-SR04 distance sensor.</li>
                            </ol>
                            </p>
                            <a href="/shop" class="mt-auto btn btn-primary  ">Haven't bought sensors?</a>
                        </div>
                    </div>
                    <div class="col-md-5 px-3">
                        <div id="CarouselTest" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#CarouselTest" data-slide-to="0" class="active"></li>
                                <li data-target="#CarouselTest" data-slide-to="1"></li>
                                <li data-target="#CarouselTest" data-slide-to="2"></li>
                                <li data-target="#CarouselTest" data-slide-to="3"></li>

                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block" src="/images/guide_adc.png" alt="" style="height:400px;">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="/images/guide_analog.png" alt="" style="height:400px">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="/images/guide_temp.png" alt="" style="height:400px">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="/images/guide_level.jpg" alt="" style="height:400px">
                                </div>
                                <a class="carousel-control-prev" href="#CarouselTest" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#CarouselTest" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="row ">

                    <div class="col-md-7 px-3">
                        <div class="card-block px-6">
                            <h4 class="card-title" style="color:#007FFF;font-size:20px"><b>Step 2: Write the code</b></h4>
                            <p class="card-text" style="text-align:justify">
                                Sensors are programmed in Python programming language. To program pH and turbidity sensor first we have to write
                                a code for reading voltage of ADC. Voltage readings are then converted to pH and turbidity values through formulas.</br>
                                For temperature and distance sensors we do not need voltage, we just use appropriate formulas.
                                </br>
                                <i> Note: Raspberry Pi OS must be installed on SD Card which is inserted into Raspberry Pi Board.</i>
                            </p>
                            <a href="https://projects.raspberrypi.org/en/projects/raspberry-pi-setting-up/2" class="mt-auto btn btn-primary  ">Raspberry Pi OS</a>
                        </div>
                    </div>
                    <div class="col-md-5 px-3">
                        <div id="CarouselTest" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block" src="/images/guide_code.png" alt="" style="height:400px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="row ">

                    <div class="col-md-7 px-3">
                        <div class="card-block px-6">
                            <h4 class="card-title" style="color:#007FFF;font-size:20px;"><b>Step 3: Read results on application</b></h4>
                            <p class="card-text" style="text-align:justify">
                                Run your code and see the results of the measurements on application. Using function you can set the intervals of measurements.</br>
                                I recommend interval to be greater than 2-3 minutes since the response time of sensors is 1 minute. Otherwise it can cause wrong results.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5 px-3">
                        <div id="CarouselTest" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block" src="/images/guide_dashboard.png" alt="" style="height:400px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('footer')
    <script src="/js/all.js"></script>
    <script src="/js/modernizer.js"></script>
    <script src="/js/custom.js"></script>
</body>

</html>