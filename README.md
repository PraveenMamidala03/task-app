<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<h2 align="center">Laravel To-Do List App</h2>

<p align="center">
  A simple To-Do List web application built with Laravel, Tailwind CSS, Alpine.js, and MySQL.
</p>

---

## Features

- Add, edit, and delete tasks
- Mark tasks as completed
- Paginated task list
- Responsive UI with Tailwind CSS
- Interactive components with Alpine.js
- Data stored in MySQL database

## Tech Stack

- [Laravel](https://laravel.com/) (Backend Framework)
- [Tailwind CSS](https://tailwindcss.com/) (Utility-first CSS Framework)
- [Alpine.js](https://alpinejs.dev/) (Lightweight JavaScript Framework)
- [MySQL](https://www.mysql.com/) (Database)

## Getting Started

### Prerequisites

- PHP >= 8.1
- Composer
- Node.js & npm
- MySQL

### Installation

1. **Clone the repository:**
   ```sh
   git clone https://github.com/your-username/laravel-todo-list.git
   cd laravel-todo-list
   ```

2. **Install PHP dependencies:**
   ```sh
   composer install
   ```

3. **Install JavaScript dependencies:**
   ```sh
   npm install
   ```

4. **Copy `.env` file and set up environment variables:**
   ```sh
   cp .env.example .env
   ```
   Update the following lines in your `.env` file with your MySQL credentials:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Generate application key:**
   ```sh
   php artisan key:generate
   ```

6. **Run migrations:**
   ```sh
   php artisan migrate
   ```

7. **Build frontend assets:**
   ```sh
   npm run build
   ```

8. **Start the development server:**
   ```sh
   php artisan serve
   ```
   Visit [http://localhost:8000](http://localhost:8000) in your browser.

## Usage

- **Add Task:** Click "Add Task" to create a new to-do item.
- **Edit Task:** Click the "Edit" button next to a task to update it.
- **Delete Task:** Click the "Delete" button to remove a task.
- **Mark as Complete:** Use the checkbox to mark a task as completed.

## Folder Structure

- `app/Models/Tasks.php` - Eloquent model for tasks
- `routes/web.php` - Application routes
- `resources/views/` - Blade templates for UI
- `public/` - Public assets

## Screenshots

![Task List Screenshot](screenshot.png)

## License

This project is open-sourced under the [MIT license](https://opensource.org/licenses/MIT).