# Distrackhub.
Easily Manage and Track Github Public/Private/Organization Repository Activities, Added with Additional HTTP Request Tracker and Discord Notifications (Soon Discord Notifications).

## How to Use ?
- Clone this Project
```bash
git clone https://github.com/GarapDigital/distrackhub.git
```

- Open Project Directory, Then Install The Composer
```bash
composer install
```

- Copy the .env.example File and Generate The App Key
```bash
cp .env.example .env && php artisan key:generate
```

- Get The Github Personal Access Token
  - Visit [Developer Setting](https://github.com/settings/apps)
  - Menu Personal Access Token > Token (Classic)
  - Generate New Token
  - Generate New Token (Classic)
  - Input Notes, Select Expiration Dates, Checklist All Scopes
  - Generate Token
  - Finish


- Open The .env File, then Modify these both parameters.
```php
GITHUB_OWNER_NAME=your github username
GITHUB_PERSONAL_TOKEN=your github personal access token
```

- Create your database and Migrate the Seeders and Tables
```bash
php artisan migrate --seed
```

- Open your second terminal and Run the Http Request Tracker by following this step:
```bash
php artisan queue:work
```

- Last but not least Run your laravel application server
```bash
php artisan serve
```

## Support us
By Follow this Github Organization, and Share our websites or social media platform to your friends [Garap Digital](https://garapdigital.id/)

## Credits

- [Wirandra Alaya](https://github.com/dayCod)
- [All Contributors](https://github.com/GarapDigital/distrackhub/contributors)

## License

This project is released under the [MIT](http://opensource.org/licenses/MIT) license.
