#### Quick Start

```bash
$ docker-compose build composer
$ docker-compose run composer create-project --prefer-dist "laravel/laravel=5.8.*" .
$ docker-compose.exe up web
$ docker-compose.exe run composer require aws/aws-sdk-php
$ docker-compose.exe run web php artisan make:controller PocController
$ docker-compose down
```