# apimach

Esta api fue creada con Laravel y funciona sobre el lenguaje PhP.

## Prerequisitos

* Docker

## Ejecución local (Windows)

* Lanzar WSL estando en el directorio raíz del proyecto
  > wsl
  * levantar el cluster
    >   vendor/bin/sail up -d
  * borrar los tokens expirados
    >  vendor/bin/sail artisan sanctum:prune-expired
  * ejecutar una migración
    > vendor/bin/sail artisan migrate:fresh

Cuando termine de usarse puede
  * apagar el cluster
    >   vendor/bin/sail down

  * crear un nuevo crud para nueva entidad
    > vendor/bin/sail artisan make:model Claim -r -c -m
