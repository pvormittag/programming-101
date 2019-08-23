## Quick start

Installing the application by running the following commands from the `php/laravel` directory.

```sh
# Start container
$ docker-compose up -d
# Install composer dependencies
$ docker-compose exec app composer install
# Add storage symlink
$ docker-compose exec app php artisan storage:link
```