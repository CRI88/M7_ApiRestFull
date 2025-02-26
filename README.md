# Laredu  
Plataforma escolar desarrollada con **Laravel 11** (backend).  

## Requisitos  
Asegúrate de tener instalados los siguientes requisitos en tu sistema:  

- **PHP** ^8.2  
- **Composer**  
- **MySQL**  

## Instalación del Backend (Laravel 11)  

1. **Ir a la carpeta `backend`**  
   ```bash
   cd backend

2. **Copiar el archivo de entorno y configurar la base de datos en .env**  
   ```bash
   cp .env.example .env

3. **Instalar dependencias**  
   ```bash
   composer install

4. **Generar la clave de la aplicación**  
   ```bash
   php artisan key:generate

5. **Ejecutar migraciones y seeders**  
   ```bash
   php artisan migrate --seed

6. **Iniciar el servidor de Laravel**  
   ```bash
   php artisan serve

7. **Importar la base de datos manualmente (opcional)**  
   ```bash
   mysql -u user -p laredu < backend/database/laredu.sql

8. **Probar los endpoints con Postman**  
   - Importa el archivo **Postman Collection** en la aplicación de Postman

9. **Configurar postman**  
   - Haz la ruta de **login de usuario** y copia el **token de Sanctum** generado para pegarlo en **Authorization** en **Bearer Token**

10. **Configurar .gitignore**  
   - Asegúrate de que .gitignore ignore las carpetas **vendor/** (Laravel) y **.env**.

11. **Añadir el backend al repositorio**  
   git add .

12. **Realizar commit y subir los cambios**  
   **git commit -m "Add backend"** y despúes
   **git push origin main**

13. **Verificar en GitHub**  
   Una vez en GitHub, tu repositorio contendrá la carpeta **backend/** y este **README.md**.

**LICENCIA**
Este proyecto está bajo la **Licencia MIT**.
