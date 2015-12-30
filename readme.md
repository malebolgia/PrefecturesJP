This is a Laravel 5 package that provides prefectures management facility for lavalite framework.

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `petfinder/prefectures`.

    "petfinder/prefectures": "dev-master"

Next, update Composer from the Terminal:

    composer update

Once this operation completes execute below cammnds in command line to finalize installation.

```php
Petfinder\Prefectures\Providers\PrefecturesServiceProvider::class,

```

And also add it to alias

```php
'Prefectures'  => Petfinder\Prefectures\Facades\Prefectures::class,
```

Use the below commands for publishing

Migration and seeds

    php artisan vendor:publish --provider="Petfinder\Prefectures\Providers\PrefecturesServiceProvider" --tag="migrations"
    php artisan vendor:publish --provider="Petfinder\Prefectures\Providers\PrefecturesServiceProvider" --tag="seeds"

Configuration

    php artisan vendor:publish --provider="Petfinder\Prefectures\Providers\PrefecturesServiceProvider" --tag="config"

Language

    php artisan vendor:publish --provider="Petfinder\Prefectures\Providers\PrefecturesServiceProvider" --tag="lang"

Views public and admin

    php artisan vendor:publish --provider="Petfinder\Prefectures\Providers\PrefecturesServiceProvider" --tag="view-public"
    php artisan vendor:publish --provider="Petfinder\Prefectures\Providers\PrefecturesServiceProvider" --tag="view-admin"

Publish admin views only if it is necessary.

## Usage


