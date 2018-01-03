# Installing

> Please note: the current version is considered to be not production ready even though
  I'm using it in production. If you use it, please give some feedback if you find any bugs.

## Step 1: Get the code

**Clone the repository**

    git clone https://github.com/albertopereira/iopac.git

    cd iopac

**or**

**Download and unpack**

-----
## Step 2: Install dependencies with Composer

    composer install

-----
## Step 3: Create the Database

Once you finished the first two steps, you can create the *MySQL* database server. 

-----
## Step 4: Configure the Environment

**Copy** the **.env.example** file to **.env**

    cp .env.example .env

**Edit** the `.env` file and set the database configuration among the other settings.

Set the application key

    php artisan key:generate

**Migrate** database schema

    php artisan migrate

**Populate** the database with some example data (optional):

    php artisan db:seed

This will also create the admin user. If you just want to create the admin user you can
just use the user seeder

    php artisan db:seed --class=UsersTableSeeder
    
or edit the class database/seeds/UsersTableSeeder.php to change any values before seeding.

Alternatively you can just

**Create** a new user in the database (the user with an id of 1 in the database is the admin!)

-----
## Step 5: Setup the http server configuration

Point the root directory of the web server to the public folder in your iopac installation.

-----
## Step 6: Set folder permissions

Laravel needs the storage folder to have write permissions for the web server, so:

     sudo chgrp -R www-data storage
     sudo chmod -R ug+rwx storage

-----
## Step 7: Start Page

You can now access the page and login at /admin.
The default login and password are:

    USER: admin@example.com
    PASS: password

-----
## Next steps

In the administration page, before creating records, you'll need to, in this order;

    1 - Create one (or more) Biblio object
    2 - Create one (or more) Itemtype object
    3 - Create Marcfields and the correspondent Marcsubfields
    4 - Edit the Itemtype objects to associate marcfields

-----
## Default marcfields

**You can seed the database with default marcfields by using**

Marc21 in English:

    php artisan db:seed --class=MarcfieldsMarc21ENTableSeeder  
    php artisan db:seed --class=MarcsubfieldsMarc21ENTableSeeder  
       
Unimarc in English:  

    php artisan db:seed --class=MarcfieldsUnimarcENTableSeeder
    php artisan db:seed --class=MarcsubfieldsUnimarcENTableSeeder
     
Unimarc in Portuguese:

    php artisan db:seed --class=MarcfieldsUnimarcPTTableSeeder
    php artisan db:seed --class=MarcsubfieldsUnimarcPTTableSeeder
     
**Alternatively you can use the sql files located in the folder install/data**
     
