# NBSC Medical System

A comprehensive hospital management system built with Laravel, Livewire, and Tailwind CSS.

## 🚀 Quick Start Guide

### Prerequisites

Before you begin, make sure you have these installed on your computer:

- PHP 8.2 or higher
- Composer (PHP package manager)
- Node.js (v16 or higher) and npm
- MySQL or MariaDB database
- Git (for version control)

### 🛠 Installation Steps

1. **Clone the repository**
   ```bash
   git clone [your-repository-url]
   cd nbsc-medical
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install JavaScript dependencies**
   ```bash
   npm install
   ```

4. **Set up environment file**
   ```bash
   cp .env.example .env
   ```

5. **Generate application key**
   ```bash
   php artisan key:generate
   ```

6. **Configure your database**
   - Create a new MySQL database
   - Update `.env` file with your database credentials:
     ```
     DB_DATABASE=your_database_name
     DB_USERNAME=your_database_user
     DB_PASSWORD=your_database_password
     ```

7. **Run database migrations and seeders**
   ```bash
   php artisan migrate --seed
   ```

8. **Build frontend assets**
   For development:
   ```bash
   npm run dev
   ```
   
   For production:
   ```bash
   npm run build
   ```

9. **Start the development server**
   ```bash
   php artisan serve
   ```

10. **Access the application**
    Open your browser and go to: [http://localhost:8000](http://localhost:8000)

## 🔐 Default Login Credentials

- **Admin Account:**
  - Email: admin@example.com
  - Password: password

## 🛠 Development

- **Frontend Development**
  - Uses Tailwind CSS for styling
  - Uses Flowbite UI components
  - Uses Livewire for dynamic interfaces

- **Backend Development**
  - Built with Laravel 11
  - Uses Eloquent ORM for database operations
  - Implements MVC architecture

## 📝 License

This project is open-source and available under the [MIT License](LICENSE).

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
