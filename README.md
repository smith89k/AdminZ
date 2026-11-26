<div align="center">

<img src="art/logo.svg" width="112" height="112" alt="AdminZ logo">

# AdminZ

**A Laravel 5.1 package workbench: keep your controllers and views in their own package, outside the app folder.**

<img src="https://img.shields.io/badge/Laravel-5.1-FF2D20" alt="Laravel 5.1">
<img src="https://img.shields.io/badge/type-package%20workbench-8A8A8A" alt="Package workbench">
<img src="https://img.shields.io/badge/status-archived-8A8A8A" alt="Archived">

</div>

<picture>
  <source media="(prefers-color-scheme: dark)" srcset="art/banner-dark.png">
  <img src="art/banner-light.png" alt="AdminZ: the folder tree of a Laravel 5.1 project with the AdminZ package holding its own views and controllers." width="100%">
</picture>

Laravel 5.1 Controller & View Package outside `app` folder.

Directory & Files Structure
---------------------------
``` ruby
Laravel 5.1 (root dir)
|-- packages
    |-- smithfoto
        |-- AdminZ
            |-- views
                |-- welcome.blade.php
            |-- src
                |-- AdminZServiceProvider.php
                |-- Http
                    |-- routes.php
                        |-- Controllers
                            |-- WelcomController.php
```
Add service provider in `config/app`

``` ruby
SmithFoto\AdminZ\AdminZServiceProvider::class,

```

Add package path in root `composer.json`

``` ruby
"psr-4":{
            "App\\": "app/",
            "SmithFoto\\AdminZ\\": "packages/smithfoto/AdminZ/src"
        }
```

run `composer dump-autoload`

test packages with url `http://your-domain.com/admin`
