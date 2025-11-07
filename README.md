# Veterinaria 2025 🐾

¡Bienvenido a Veterinaria 2025! Un sistema de gestión integral para clínicas veterinarias desarrollado con el framework Laravel.

Este proyecto permite administrar de forma eficiente la información de pacientes, veterinarios, citas, expedientes médicos y el inventario de medicinas.

## ✨ Características Principales

La aplicación cuenta con los siguientes módulos de gestión:

* **Gestión de Pacientes:** CRUD completo para registrar y administrar la información de las mascotas.
* **Gestión de Veterinarios:** CRUD para manejar el personal médico de la clínica.
* **Gestión de Citas:** Permite agendar, ver, editar y eliminar citas, conectando pacientes con veterinarios.
* **Gestión de Expedientes:** Administración de los historiales médicos de los pacientes.
* **Gestión de Medicinas:** CRUD para controlar el inventario de medicamentos y suministros.

## 🛠️ Tecnologías Utilizadas

Este proyecto está construido con un stack moderno de PHP y JavaScript:

* **Backend:**
    * [PHP 8.1+](https://www.php.net/)
    * [Laravel 10](https://laravel.com/)
* **Frontend:**
    * [Vite](https://vitejs.dev/)
    * [Bootstrap 5](https://getbootstrap.com/)
    * JavaScript
* **Base de datos:** MySQL
* **Servidor de desarrollo:** [Laravel Sail](https://laravel.com/docs/sail)

## 🚀 Instalación y Puesta en Marcha

Sigue estos pasos para levantar el proyecto en tu entorno local:

1.  **Clonar el repositorio:**
    ```bash
    git clone [https://github.com/tu-usuario/veterinaria_fs2025.git](https://github.com/tu-usuario/veterinaria_fs2025.git)
    cd veterinaria_fs2025
    ```

2.  **Instalar dependencias de PHP:**
    ```bash
    composer install
    ```

3.  **Instalar dependencias de Node.js:**
    ```bash
    npm install
    ```

4.  **Configurar el entorno:**
    * Copia el archivo de ejemplo `.env.example` a `.env`.
    ```bash
    cp .env.example .env
    ```
    * Genera la clave de la aplicación:
    ```bash
    php artisan key:generate
    ```

5.  **Configurar la base de datos:**
    * Actualiza las variables `DB_*` en tu archivo `.env` con las credenciales de tu base de datos.

6.  **Ejecutar las migraciones:**
    (Asegúrate de que las migraciones estén creadas en `database/migrations/`)
    ```bash
    php artisan migrate
    ```

7.  **Compilar los assets (frontend):**
    ```bash
    npm run dev
    ```

8.  **Iniciar el servidor de desarrollo:**
    ```bash
    php artisan serve
    ```

## 📂 Estructura de Rutas

Las rutas principales de la aplicación están definidas en `routes/web.php` y gestionan todas las entidades del sistema:

* `/veterinarios`
* `/medicinas`
* `/pacientes`
* `/citas`
* `/expedientes`

La plantilla principal de la aplicación se encuentra en `resources/views/layouts/app.blade.php`.
