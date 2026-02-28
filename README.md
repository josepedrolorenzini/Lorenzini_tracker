# Lorenzini Heritage Tracker 🇮🇹

A system to document, preserve, and visualize the history of the Lorenzini family, with roots in Teglio, Sondrio (Italy).

---

<details>
<summary><strong>🇬🇧 English</strong></summary>

## 📋 Description

This project is a web application built with **Laravel** to manage the family tree, biographies, and records of the family's ancestors, starting with the patriarch Domenico Lorenzini.

## 🚀 Technologies

- **Backend:** Laravel 10/11
- **Development Environment:** Laravel Sail (Docker)
- **Database:** MySQL / PostgreSQL
- **Frontend:** Blade Templates + Tailwind CSS

## 🛠️ Installation and Setup

If you download this repository, follow these steps to set up the environment:

1.  **Install dependencies**
    ```bash
    ./vendor/bin/sail composer install
    ./vendor/bin/sail npm install && ./vendor/bin/sail npm run dev
    ```

2.  **Configure environment**
    Copy the example file and generate the key:
    ```bash
    cp .env.example .env
    ./vendor/bin/sail artisan key:generate
    ```

3.  **Database**
    Run the migrations and seeders (test data):
    ```bash
    ./vendor/bin/sail artisan migrate --seed
    ```

## 📅 Work Plan

Check the [TODO.md](TODO.md) file to see pending tasks and weekly progress.

</details>

<details>
<summary><strong>🇪🇸 Español</strong></summary>

## 📋 Descripción

Este proyecto es una aplicación web construida con **Laravel** para gestionar el árbol genealógico, biografías y registros de los ancestros de la familia, comenzando por el patriarca Domenico Lorenzini.

## 🚀 Tecnologías

- **Backend:** Laravel 10/11
- **Entorno de Desarrollo:** Laravel Sail (Docker)
- **Base de Datos:** MySQL / PostgreSQL
- **Frontend:** Blade Templates + Tailwind CSS

## 🛠️ Instalación y Configuración

Si descargas este repositorio, sigue estos pasos para levantar el entorno:

1.  **Instalar dependencias**
    ```bash
    ./vendor/bin/sail composer install
    ./vendor/bin/sail npm install && ./vendor/bin/sail npm run dev
    ```

2.  **Configurar entorno**
    Copia el archivo de ejemplo y genera la clave:
    ```bash
    cp .env.example .env
    ./vendor/bin/sail artisan key:generate
    ```

3.  **Base de Datos**
    Ejecuta las migraciones y los seeders (datos de prueba):
    ```bash
    ./vendor/bin/sail artisan migrate --seed
    ```

## 📅 Plan de Trabajo

Consulta el archivo [TODO.md](TODO.md) para ver las tareas pendientes y el progreso semanal.

</details>

<details>
<summary><strong>🇮🇹 Italiano</strong></summary>

## 📋 Descrizione

Questo progetto è un'applicazione web costruita con **Laravel** per gestire l'albero genealogico, le biografie e i registri degli antenati della famiglia, a partire dal patriarca Domenico Lorenzini.

## 🚀 Tecnologie

- **Backend:** Laravel 10/11
- **Ambiente di Sviluppo:** Laravel Sail (Docker)
- **Database:** MySQL / PostgreSQL
- **Frontend:** Blade Templates + Tailwind CSS

## 🛠️ Installazione e Configurazione

Se scarichi questo repository, segui questi passaggi per configurare l'ambiente:

1.  **Installare le dipendenze**
    ```bash
    ./vendor/bin/sail composer install
    ./vendor/bin/sail npm install && ./vendor/bin/sail npm run dev
    ```

2.  **Configurare l'ambiente**
    Copia il file di esempio e genera la chiave:
    ```bash
    cp .env.example .env
    ./vendor/bin/sail artisan key:generate
    ```

3.  **Database**
    Esegui le migrazioni e i seeder (dati di prova):
    ```bash
    ./vendor/bin/sail artisan migrate --seed
    ```

## 📅 Piano di Lavoro

Consulta il file [TODO.md](TODO.md) per vedere le attività in sospeso e i progressi settimanali.

</details>

