# AdminZ

Directory & Files Structure

```
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

packages\smithfoto\AdminZ

Add service provider in `config/app`

```
SmithFoto\AdminZ\AdminZServiceProvider::class,

```

Add package path in root `composer.json`

```
"psr-4":{
            "App\\": "app/",
            "SmithFoto\\AdminZ\\": "packages/smithfoto/AdminZ/src"
        }
```

run `composer dump-autoload`
