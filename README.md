TunePortal

TunePortal is a Laravel-based web application designed to facilitate the exchange of .bin files between users and admins. Users can upload files, track their status, and manage their credits, while admins can process and re-upload modified files for user access.

Features ✨

User Features 🧑‍💻

User Authentication 🔐: Secure registration and login system.

File Upload 📂: Upload .bin files for processing.

Credits System 💳: View and manage credits (manually updated).

Dashboard 📊: Track uploaded files, file status, and credit balance.

Admin Features 🛠️

Admin Dashboard 🖥️: Manage user-uploaded files and monitor activity logs.

File Processing 🔄: Download, process, and re-upload files.

Activity Logs 📝: Track actions performed by users and admins.

Installation ⚙️

Prerequisites 🛑

Ensure you have the following installed:

PHP >= 8.4

Composer

MySQL

Nginx or Apache

Node.js and npm/yarn

Steps 🛠️

Clone the repository:

git clone https://github.com/ayyo42069/tune_portal.git
cd tune_portal

Install PHP dependencies:

composer install

Install JavaScript dependencies:

npm install
npm run dev

Configure the .env file:
Copy the example file and update it with your settings.

cp .env.example .env

Update the following values:

APP_URL

Database credentials: DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD

Generate the application key:

php artisan key:generate

Run database migrations:

php artisan migrate

Seed the database (optional):

php artisan db:seed

Start the development server:

php artisan serve

The application will be available at http://localhost:8000.

Usage 🚀

User Dashboard 🧑‍💻

Upload .bin files.

Check the status of uploaded files.

View your credit balance.

Admin Dashboard 🛠️

Manage and process uploaded files.

Re-upload processed files for user access.

Monitor activity logs.

Environment Variables 🌐

The application relies on the following environment variables:

APP_NAME=TunePortal
APP_ENV=local
APP_KEY=your-application-key
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=your-database-name
DB_USERNAME=your-database-username
DB_PASSWORD=your-database-password

LOG_CHANNEL=stack
SESSION_DRIVER=database
CACHE_STORE=database
QUEUE_CONNECTION=database
MAIL_MAILER=smtp
MAIL_HOST=your-mail-host
MAIL_PORT=587
MAIL_USERNAME=your-mail-username
MAIL_PASSWORD=your-mail-password
MAIL_FROM_ADDRESS=your-mail-address
MAIL_FROM_NAME="TunePortal"

Testing 🧪

To run tests, use the following command:

php artisan test

Contributing 🤝

Contributions are welcome! Please fork the repository and submit a pull request.

License 📜

This project is open-source and available under the MIT License.

For any issues or feature requests, please open an issue on GitHub.
