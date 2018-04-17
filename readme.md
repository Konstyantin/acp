## Camperfans

### 1.Clone

```
git clone https://bitbucket.org/pandalaravel/acp_v1
```

### 2. Environment Files

This project ships with a .env.example file in the root of the project.

You must rename this file to just .env

Note: Make sure you have hidden files shown on your system.

```
cp .env.example .env
```

### 3. Composer

Laravel project dependencies are managed through the PHP Composer tool. The first step is to install the depencencies by navigating into your project in terminal and typing this command:

```
composer install
```

### 4. NPM/Yarn

In order to install the Javascript packages for frontend development, you will need the Node Package Manager, and optionally the Yarn Package Manager by Facebook (Recommended)

If you only have NPM installed you have to run this command from the root of the project:

```
npm install
```

If you have Yarn installed, run this instead from the root of the project:

```
yarn
```

### 5. Create Database

You must create your database on your server and on your **.env** file update the following lines:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

### 6. Artisan Commands

The first thing we are going to so is set the key that Laravel will use when doing encryption.

```
php artisan key:generate
```

You should see a green message stating your key was successfully generated. As well as you should see the APP_KEY variable in your .env file reflected.

It's time to see if your database credentials are correct.

We are going to run the built in migrations to create the database tables:

```
php artisan migrate
```

Now seed the database with:

```
php artisan db:seed
```

You should get a message for each file seeded, you should see the information in your database tables.

After your project is installed you must run this command to link your public storage folder for user avatar uploads:

```
php artisan storage:link
```

### 7. NPM Run '*'

Now that you have the database tables and default rows, you need to build the styles and scripts.

These files are generated using Laravel Mix, which is a wrapper around many tools, and works off the webpack.mix.js in the root of the project.

You can build with:

```
npm run <command>
```

The available commands are listed at the top of the package.json file under the 'scripts' key.

You will see a lot of information flash on the screen and then be provided with a table at the end explaining what was compiled and where the files live.

At this point you are done, you should be able to hit the project in your local browser and see the project, as well as be able to log in with the administrator and view the backend.

### 8. Login

The administrator credentials are:

**Username:** admin@admin.com

**Password:** 1234
