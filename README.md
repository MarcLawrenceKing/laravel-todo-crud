# Laravel To-Do CRUD App

A simple CRUD app built in Laravel.

## Features

- Create, Edit, Delete To-Do items
- Bootstrap UI
- Local MySQL database

## Setup

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/MarcLawrenceKing/laravel-todo-crud.git
   cd laravel-react
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install frontend dependencies**
   ```bash
   npm install
   ```

4. **Create environment file**
   ```bash
   cp .env.example .env
   ```

5. **Configure `.env`**
   Update the following lines with your local database credentials:
   ```env
   APP_URL=http://localhost:8000

   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_mysql_username
   DB_PASSWORD=your_mysql_password
   ```

6. **Generate application key**
   ```bash
   php artisan key:generate
   ```

7. **Run migrations** (to create database based on DB_DATABASE)
   ```bash
   php artisan migrate
   ```

8. **Start the development server**
   ```bash
   php artisan serve
   ```
