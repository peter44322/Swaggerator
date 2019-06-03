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
You can publish L5-Swagger's config and view files into your project by running:

```bash
$ php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"
```

For Laravel >=5.5, no need to manually add `L5SwaggerServiceProvider` into config. It uses package auto discovery feature. Skip this if you are on >=5.5, if not:

Open your `AppServiceProvider` (located in `app/Providers`) and add this line in `register` function
```php
$this->app->register(\L5Swagger\L5SwaggerServiceProvider::class);
```
or open your `config/app.php` and add this line in `providers` section
```php
L5Swagger\L5SwaggerServiceProvider::class,
```

in .env

```dotenv
L5_SWAGGER_GENERATE_ALWAYS=true
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



Output
---
output folder  `app/Document/TagName.php`
```php
/**
 * @OA\Post(
 *      path="/path/to/request ",
 *      operationId="---",
 *      tags={"TagName"},
 *      summary="----",
 *      description="---",
 *      @OA\Parameter(
 *          name="email",
 *          description="----",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 *      @OA\Parameter(
 *          name="password",
 *          description="----",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="successful operation"
 *       ),
 *      @OA\Response(response=400, description="Bad request"),
 *      @OA\Response(response=404, description="Resource Not Found"),
 * )
 */
```

after running the command go to 
```bash
localost:8000/api/documentation
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
If you discover any security related issues, please email p.pator@outlook.com or use the issue tracker of GitHub.

About
---

License
---
The MIT License (MIT). Please see [License File](LICENSE) for more information.