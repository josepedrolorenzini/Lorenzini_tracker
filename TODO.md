--- /dev/null
+++ c/xampp/htdocs/2026/php/Lorenzini_Heritage_Tracker/lorenzini-tracker/README.md
@@ -0,0 +1,40 @@
+# Lorenzini Heritage Tracker 🇮🇹
+
+Un sistema para documentar, preservar y visualizar la historia de la familia Lorenzini, con raíces en Teglio, Sondrio (Italia).
+
+## 📋 Descripción
+
+Este proyecto es una aplicación web construida con **Laravel** para gestionar el árbol genealógico, biografías y registros de los ancestros de la familia, comenzando por el patriarca Domenico Lorenzini.
+
+## 🚀 Tecnologías
+
+- **Backend:** Laravel 10/11
+- **Entorno de Desarrollo:** Laravel Sail (Docker)
+- **Base de Datos:** MySQL / PostgreSQL
+- **Frontend:** Blade Templates + Tailwind CSS
+
+## 🛠️ Instalación y Configuración
+
+Si descargas este repositorio, sigue estos pasos para levantar el entorno:
+
+1. **Instalar dependencias**
+   ```bash
+   ./vendor/bin/sail composer install
+   ./vendor/bin/sail npm install && ./vendor/bin/sail npm run dev
+   ```
+
+2. **Configurar entorno**
+   Copia el archivo de ejemplo y genera la clave:
+   ```bash
+   cp .env.example .env
+   ./vendor/bin/sail artisan key:generate
+   ```
+
+3. **Base de Datos**
+   Ejecuta las migraciones y los seeders (datos de prueba):
+   ```bash
+   ./vendor/bin/sail artisan migrate --seed
+   ```
+
+## 📅 Plan de Trabajo
+
+Consulta el archivo [TODO.md](TODO.md) para ver las tareas pendientes y el progreso semanal.
