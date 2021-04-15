<h3>Project installation</h3>
1. git clone linktogithubrepo.com/ projectName
2. cd into your project in commalnd line
3. Install Composer Dependencies <code>composer install</code>
4. Install NPM Dependencies <code>npm install && npm run dev</code>
5. Create a copy of your .env file from env.example
6. Generate an app encryption key <code>php artisan key:generate</code>
7. Create an empty database for our application
8. In the .env file, add database information to allow Laravel to connect to the database (In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD)
9. Migrate and seed the database <code>php artisan migrate --seed</code>


Admin login url: [url]/admin/login <br>
admin username: admin<br>
admin password: admin123<br>
