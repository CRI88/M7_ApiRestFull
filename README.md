# Proyecto Backend Laravel

Este proyecto es una API RESTful construida con **Laravel**, diseñada para gestionar un sistema educativo con cursos, asignaturas, usuarios, roles, entregas, y más. Proporciona rutas para autenticación, gestión de usuarios, cursos y tareas, así como la capacidad de asignar roles a los usuarios.

## Requisitos

Para ejecutar este proyecto, asegúrate de tener los siguientes requisitos instalados:

- [PHP](https://www.php.net/downloads.php) (versión 8.x o superior)
- [Composer](https://getcomposer.org/) (para la gestión de dependencias)
- [Laravel](https://laravel.com/docs/8.x) (instalado globalmente o en el proyecto)
- [MySQL](https://www.mysql.com/) o cualquier otra base de datos que prefieras configurar

## Instalación

Sigue estos pasos para descargar y configurar el proyecto en tu máquina local:

1. **Clona el repositorio**

   Clonamos con el enlace del repositorio de GitHub:
   git clone https://github.com/CRI88/M7_ApiRestFull/tree/main
Accede al directorio del proyecto

bash
Copiar
Editar
cd nombre-del-repositorio
Instala las dependencias con Composer

Asegúrate de tener Composer instalado en tu máquina. Si no lo tienes, puedes instalarlo desde aquí.

bash
Copiar
Editar
composer install
Configura el archivo .env

Copia el archivo .env.example a .env:

bash
Copiar
Editar
cp .env.example .env
Luego, edita el archivo .env para configurar tu conexión a la base de datos y otras configuraciones necesarias:

env
Copiar
Editar
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_base_de_datos
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
Genera la clave de la aplicación

Laravel requiere una clave única para la aplicación. Puedes generar esta clave ejecutando:

bash
Copiar
Editar
php artisan key:generate
Ejecuta las migraciones y seeders

Ahora, ejecuta las migraciones y seeders para crear las tablas en la base de datos y agregar datos iniciales:

bash
Copiar
Editar
php artisan migrate --seed
Uso
Iniciar el servidor de desarrollo
Una vez que todo esté configurado, puedes iniciar el servidor de desarrollo de Laravel con el siguiente comando:

bash
Copiar
Editar
php artisan serve
Esto iniciará el servidor en http://localhost:8000.

Autenticación
Este proyecto utiliza Laravel Sanctum para la autenticación. Puedes crear un usuario mediante el endpoint POST /register, y luego iniciar sesión con el endpoint POST /login para obtener un token de autenticación.

Rutas protegidas
Las rutas protegidas, como obtener información del usuario autenticado o realizar acciones que requieren permisos específicos, se deben acceder mediante un token de autenticación en el encabezado Authorization como tipo Bearer.

Ejemplo de uso con Postman:

Registrar: POST http://localhost:8000/api/register
Iniciar sesión: POST http://localhost:8000/api/login
Obtener información del usuario: GET http://localhost:8000/api/me (requiere el token de autenticación)
Contribuir
¡Las contribuciones son bienvenidas! Si deseas contribuir, sigue estos pasos:

Haz un fork del repositorio.
Crea una rama para tu característica (git checkout -b feature/nueva-caracteristica).
Realiza tus cambios.
Haz commit de tus cambios (git commit -am 'Añadir nueva característica').
Haz push a tu rama (git push origin feature/nueva-caracteristica).
Abre un pull request.
Licencia
Este proyecto está bajo la Licencia MIT. Consulta el archivo LICENSE para más detalles.

¡Gracias por utilizar el proyecto!
