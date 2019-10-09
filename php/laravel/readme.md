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

## Ubuntu notes

# Start container
$ docker-compose up -d
    **successfull:** 
    CONTAINER ID        IMAGE               COMMAND                  CREATED             STATUS                  PORTS                NAMES
    821e2026e4be        laravel_app         "docker-php-entrypoi…"   3 days ago          Up 3 days               0.0.0.0:80->80/tcp   laravel_app_1
# Install composer dependencies
$ docker-compose exec app composer install
    **message: OCI runtime exec failed: exec failed: container_linux.go:348: starting container process caused "exec: \"composer\": executable file not found in $PATH": unknown**
# Add storage symlink
$ docker-compose exec app php artisan storage:link
