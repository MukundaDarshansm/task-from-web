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


uthentication (Sanctum Token)
➤ Register User

POST /api/register

{
  "name": "Darshan",
  "email": "darshan@example.com",
  "password": "password123"
}

➤ Login User (Get Token)

POST /api/login

{
  "email": "darshan@example.com",
  "password": "password123"
}


Response Example:

{
  "success": true,
  "message": "Login successful",
  "token": "YOUR_API_TOKEN_HERE"
}


Use this token for all authenticated requests:

Authorization: Bearer YOUR_API_TOKEN_HERE

📝 Notes API Endpoints
➤ Create Note

POST /api/notes

{
  "title": "My First Note",
  "content": "This is a test note."
}

➤ List Notes

GET /api/notes

➤ View Note

GET /api/notes/{id}

➤ Update Note

PUT /api/notes/{id}

{
  "title": "Updated Title",
  "content": "Updated content."
}

➤ Delete Note

DELETE /api/notes/{id}
