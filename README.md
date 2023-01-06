# Deliciously - Recipe Management and Sharing Platform

A web application for creating and sharing recipes, saving favorite recipes, and creating shopping lists.

## Features

- User accounts
- Search functionality
- Ability to add and rate recipes
- Mobile-responsive design

## Technologies

- Laravel PHP framework
- Vue.js JavaScript library
- MySQL database management system
- Nginx web server

## Requirements

- PHP 7.2 or higher
- Composer
- Node.js
- MySQL

## Installation

1. Clone the repository: `git clone https://github.com/[your-username]/recipe-platform.git`
2. Install dependencies: `composer install`
3. Create a copy of the `.env.example` file and rename it to `.env`. Update the database credentials in the `.env` file.
4. Generate an app key: `php artisan key:generate`
5. Run the database migrations: `php artisan migrate`
6. Install JavaScript dependencies: `npm install`
7. Build the JavaScript assets: `npm run dev`
8. Start the development server: `php artisan serve`

## License

This project is licensed under the [MIT License](LICENSE).

## Contributing

We welcome contributions from the community! Please see [CONTRIBUTING](CONTRIBUTING.md) for details on how to submit contributions to this project.
