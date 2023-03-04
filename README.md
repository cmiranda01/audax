# Pequeño proyecto en Laravel

Este proyecto en Laravel se encarga de realizar un proceso de autenticación y, si es correcto, mostrar una tabla de contratos con opciones de filtrado. La tabla de contratos tiene los siguientes campos: ID contrato, ID cliente y nombre cliente.

## Características del proyecto

- Se realiza un proceso de autenticación para permitir el acceso a la tabla de contratos.
- La tabla de contratos se puede filtrar por ID de cliente.
- La base de datos es relacional.
- Un cliente puede tener varios contratos, pero un contrato solo puede pertenecer a un cliente.
- Los estilos del proyecto se han creado con Bootstrap.
- El proyecto se ha probado de forma local con XAMPP.

## Tecnologías utilizadas

- Laravel
- Bootstrap
- XAMPP

## Requisitos para su ejecución

- Tener instalado XAMPP o un servidor web similar.
- Tener instalado Laravel.

## Instrucciones de ejecución

1. Descargar el código del proyecto desde el repositorio.
2. Copiar el contenido en la carpeta correspondiente del servidor web.
3. Crear una base de datos relacional en el servidor web.
4. Configurar los datos de conexión a la base de datos en el archivo ".env" del proyecto.
5. Ejecutar el comando "php artisan migrate" para crear las tablas necesarias en la base de datos.
6. Ejecutar el comando "php artisan serve" para iniciar el servidor web de Laravel.
7. Acceder a la dirección "http://localhost:8000" desde un navegador web.

¡Listo! Ahora podrá utilizar el proyecto para realizar el proceso de autenticación y visualizar la tabla de contratos.
