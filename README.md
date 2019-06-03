swaggerator
===

Installation
---
You can install the package via composer:

```bash
composer require peterzaccha/swaggerator
```

If you are using Laravel in a version < 5.5, the service provider must be registered as a next step:

```php
// config/app.php
'providers' => [
    ...
    Peterzaccha\Swaggerator\SwaggeratorServiceProvider::class
];
```

Usage
---
```bash
php artisan swaggerator:generate TagName requestName path/to/request
```

**Parameters**

`-p|pram` to add parameters
```bash
php artisan swaggerator:generate TagName requestName path/to/request -pmail --pram=password

```

`--method` to add parameters
```bash
php artisan swaggerator:generate TagName requestName path/to/request --method=Get

```

Changelog
---
Check [CHANGELOG](CHANGELOG.md) for the changelog

Testing
---
To run tests use

    $ composer test

Contributing
---


Security
---
If you discover any security related issues, please email <your@mail.tld> or use the issue tracker of GitHub.

About
---

License
---
The MIT License (MIT). Please see [License File](LICENSE) for more information.