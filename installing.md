# Installing

> Please note: the current version is considered to be not production ready even though
  I'm using it in production. If you use it, please give some feedback if you find any bugs.

## Step 1: Get the code

**Clone the repository**

    git clone https://aestevesp@bitbucket.org/aestevesp/iopac.git

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
## Step 5: Start Page

You can now access the page and login at /admin.
The default login and password are:

    USER: admin@example.com
    PASS: password
