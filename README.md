# AdminZ

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
