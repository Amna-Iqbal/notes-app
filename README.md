# 📝 Notes App (Laravel + Breeze)

A simple notes-taking web application built with **Laravel** that includes:

- 🗝️ User Authentication (Laravel Breeze)
- ✍️ Full CRUD operations for notes
- 📦 Clean Laravel structure
- 💡 Seeded with dummy notes for testing

---

## 🚀 Features

- Register/Login using Laravel Breeze
- Create, view, update, and delete notes
- Only authenticated users can manage their own notes
- Simple, clean UI using Blade + Tailwind CSS

---

## 🛠️ Built With

- Laravel 10
- Laravel Breeze (Auth)
- MySQL
- Tailwind CSS
- PHP 8.x

---

## 📸 Screenshots


---

## 🧑‍💻 How to Run Locally

```bash
git clone https://github.com/Amna-Iqbal/notes-app.git
cd notes-app
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
