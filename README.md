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
   ```bash
   mysql -u user -p laredu < backend/database/laredu.sql

10. **Configurar .gitignore**  
   - Asegúrate de que .gitignore ignore las carpetas **vendor/** (Laravel) y **.env**.

11. **Añadir el backend al repositorio**  
   ```bash
   git add .

12. **Realizar commit y subir los cambios**  
   ```bash
   git commit -m "Add backend"
   git push origin main

**LICENCIA**
Este proyecto está bajo la **Licencia MIT**.
