# Donation System

This is a Laravel-based donation system that integrates with PayPal for processing payments.

## Features

- PayPal integration for secure payments
- Admin panel for viewing donations
- Email confirmations for donors
- Basic analytics through Laravel logging

## Setup

1. Clone the repository
2. Run `composer install`
3. Copy `.env.example` to `.env` and configure your environment variables
4. Run `php artisan key:generate`
5. Run `php artisan migrate`
6. Set up your PayPal sandbox account and add the credentials to your `.env` file

## Running the Application

1. Start your local development server: `php artisan serve`
2. Visit `http://localhost:8000` in your browser

## Running Tests

Run `php artisan test` to execute the test suite.

## Demo Accounts

After seeding the database, you can use the following demo accounts:

1. Admin User:
   - Email: admin@example.com
   - Password: password

2. Regular User:
   - Email: user@example.com
   - Password: password

To seed the database with demo accounts and sample donations, run:

\`\`\`
php artisan db:seed
\`\`\`

## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.

