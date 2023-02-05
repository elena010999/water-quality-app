
# **CONFIGURATION AND DEVELOPMENT**
#### **1. Clone GitHub repo**
Open terminal and clone the project

*Note: Make sure you have git installed locally on your computer first and you are running XAMPP/MAMP/WAMP depending on your OS and choice.*
#### **2. Go to your project**

<code>cd water-app</code>

#### **3. Install Composer Dependencies**
Whenever you clone a new Laravel project you must now install all of the project dependencies. This is what actually installs Laravel itself, among other necessary packages to get started:

<code>composer install</code>
#### **4. Install NPM Dependencies**
Just like how we must install composer packages to move forward, we must also install necessary NPM packages to move forward. This will install Vue.js, Bootstrap.css, Lodash, and Laravel Mix

<code>npm install</code>

<code>npm run dev</code>

*Note: Make sure you use node version >16. You can check your node version by running <code>node -v</code>*

#### **5. Create a copy of your .env file**
Just like how we must install composer packages to move forward, we must also install necessary NPM packages to move forward. This will install Vue.js, Bootstrap.css, Lodash, and Laravel Mix:

<code>cp .env.example .env</code>

#### **6. Generate an app encryption key**
Laravel requires you to have an app encryption key which is generally randomly generated and stored in your .env file. The app will use this encryption key to encode various elements of your application from cookies to password hashes and more:

<code>php artisan key:generate</code>


#### **7. Configure the database credentials in your .env file**
Set the right credentials to connect to your database:
<pre>
<code>
<br>DB_CONNECTION=mysql
<br>DB_HOST=127.0.0.1
<br>DB_PORT=3306
<br>DB_DATABASE=water
<br>DB_USERNAME=root
<br>DB_PASSWORD=
</code>
</pre>

#### **8. Make migrations**
Run the following command to insert tables into your database:

<code>php artisan migrate</code>
