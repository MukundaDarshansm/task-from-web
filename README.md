# Laravel Notes API

A simple REST API built using Laravel to manage personal notes for each user.  
Users can register, log in, and perform CRUD operations on their own notes only.

---

## 🔗 Git Repository

GitHub Repo: https://github.com/MukundaDarshansm/task-from-web.git  
(Replace this link with your actual repository URL.)

---

## 🚀 Installation & Setup

Clone the repository:

```bash
git clone https://github.com/MukundaDarshansm/task-from-web.git
cd notes-api


Install dependencies:

composer install


Copy environment file:

cp .env.example .env

Generate app key:

php artisan key:generate


Set up database in .env:

DB_DATABASE=notes_api
DB_USERNAME=root
DB_PASSWORD=

Run migrations:

php artisan migrate


Install Laravel Sanctum:

composer require laravel/sanctum


Start server:

php artisan serve
