# Vial 

Vial is a scalable and user-friendly blogging platform developed with Laravel, PHP, MySQL, Blade templates, and Sass. 

## KEY FEATURES

- Registration and Authentication: Users can register, log in, and log out.
- Post Creation: Authors can create, delete, edit, and publish blog posts.

## INSTALLATION
Follow these steps to install the application:

1. clone the repo
```bash
git clone https://github.com/kimicasamina/vial-blog-laravel-mysql.git
```

2. Navigate to the project directory:
```bash
cd project_directory
```

3. Install dependencies:
```bash
composer install
```

## SETTING UP MySql 
Create a Database: Open your MySQL client and create a new database:
```sql
CREATE DATABASE your_database_name;
```
Create a MySQL User (optional):
```sql
CREATE USER 'your_username'@'localhost' IDENTIFIED BY 'your_password';
GRANT ALL PRIVILEGES ON your_database_name.* TO 'your_username'@'localhost';
FLUSH PRIVILEGES;
```

## CONFIGURING THE APPLICATION
1. Update the .env File: Copy the .env.example file:

```bash
cp .env.example .env
```

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

2. Generate Application Key: Run the following command:

```bash
php artisan key:generate
```

