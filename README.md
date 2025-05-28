# website-crud-mvc-poc
POC
A simple PHP MVC project demonstrating CRUD operations using Eloquent ORM .

## Features

- Model-View-Controller architecture
- CRUD operations for users and other entities
- Eloquent ORM for database interactions
- Seeder system for populating the database
- Uses Composer for dependency management
- Dockerized environment with PHP, Apache, and MySQL

## Requirements

- PHP 8.2+
- Composer
- Docker and Docker Compose (optional for local development)
- MySQL 8.0+

## Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/markcanal/website-crud-mvc-poc.git
   cd website-crud-mvc-poc
   ```

2. Install dependencies with Composer:
   ```bash
   composer install
   ```

3. Create a `.env` file in the project root and configure your database settings.

4. Run Docker containers (optional):
   ```bash
   docker compose up -d
   ```

5. Run database migrations and seeders:
   ```bash
   php seed.php
   ```

6. Serve the app locally (if not using Docker):
   ```bash
   php -S localhost:8000 -t public
   ```

7. Open `http://localhost:8000` in your browser.

## Seeder Usage

Seeders are located in the `seeders/` directory. To create a new seeder:

- Create a new PHP file extending the base seeder.
- Implement the `run()` method with your seeding logic.
- Add the seeder to `seed.php` for execution.

Example:

```php
<?php
require_once 'base_seeder.php';
require_once 'models/User.php';

class UserSeeder extends BaseSeeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => password_hash('password', PASSWORD_DEFAULT),
        ]);
    }
}
```

## License

MIT License

---

Created by Agos Tech / Mark
