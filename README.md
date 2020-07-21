### Install Dependencies

```
composer install
npm install && npm run dev
```

### Generate Application Key

```
php artisan key:generate
```

## .env Settings
### Database Settings

```
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

### Mail Settings

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME={gmail_username}
MAIL_PASSWORD={gmail_password}
MAIL_FROM_ADDRESS=no-reply@arm-test.com
MAIL_FROM_NAME="${APP_NAME}"
```

### Run Migrations

```
php artisan migrate
```

### Run App

```
php artisan serve
```

