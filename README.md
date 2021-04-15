<h3>Project installation</h3>
1. git clone https://github.com/csikospeter90/extremenet.git<br>
2. cd into your project in commalnd line<br>
3. Install Composer Dependencies <code>composer install</code><br>
4. Install NPM Dependencies <code>npm install && npm run dev</code><br>
5. Create a copy of your .env file from env.example<br>
6. Generate an app encryption key <code>php artisan key:generate</code><br>
7. Create an empty database for our application<br>
8. In the .env file, add database information to allow Laravel to connect to the database (In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD)<br>
9. Migrate and seed the database <code>php artisan migrate --seed</code><br>
   <br><br>

Admin login url: [url]/admin/login <br>
admin username: admin<br>
admin password: admin123<br>
