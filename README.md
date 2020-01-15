# 3Scale_Laravel
Laravel/Lumen service provider for 3Scale

## Instalation

`composer require es02/3Scale_Laravel`

## Instalation on Laravel 5
Add to `config/app.php`:

```php
<?php

[
    'providers' => [
        es02\3Scale_Laravel\3ScaleServiceProvider::class,
    ]
]

?>
```
> The ::class notation is optional.

## Instalation on Lumen

Add that line on `bootstrap/app.php`:

```php
<?php
// $app->register('App\Providers\AppServiceProvider'); (by default that comes commented)
$app->register('es02\3Scale_Laravel\3ScaleServiceProvider');

?>
```
