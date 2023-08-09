# Mini E-Commerce (ClickCommerce) - README

## Table of Contents
1. [Introduction](#1-introduction)
2. [Preview](#2-preview)
3. [Features](#2-features)
4. [User Roles](#3-user-roles)
5. [Prerequisites](#4-prerequisites)
6. [Installation](#5-installation)
7. [Usage](#6-usage)
8. [Contributing](#7-contributing)
9. [License](#8-license)

## 1. Introduction
Mini E-Commerce, branded as ClickCommerce, is an application designed to facilitate online shopping. It provides a user-friendly interface for users to explore and purchase products. The application is built on the Laravel framework, ensuring a robust and efficient development experience.

## 2. Preview
![home page](https://github.com/Aryavedas/ClickCommerce/assets/120029429/217d01df-57e3-4240-9bdd-b6c6351a782c)


## 3. Features
The Mini E-Commerce (ClickCommerce) application offers the following features:

- **Authentication**: Users can create accounts and log in to access the full functionality of the application.
- **Authorization**: The application distinguishes between regular users and administrators, each with their respective
- **Laravel Livewire**
- **Laravel Vite**
- **Payment Gateway Simulation With Midtrans https://docs.midtrans.com/docs/testing-payment-on-sandbox**
  
privileges.
- **Login/Register**: Users can create new accounts or log in with existing credentials.
- ![login page7](https://github.com/Aryavedas/ClickCommerce/assets/120029429/83e6c9c9-a221-4a03-a238-70a20569bcee)
- **Regular User Privileges**:
  - Add products to the cart.
    ![cart page](https://github.com/Aryavedas/ClickCommerce/assets/120029429/8bb48313-3cb0-4908-961c-3327e4d1f9f9)
  - Browse and view available products.
    ![search](https://github.com/Aryavedas/ClickCommerce/assets/120029429/e09f4692-f738-428c-87cb-12ceba573b6e)

  - Simulate the payment gateway process.
    ![payment method](https://github.com/Aryavedas/ClickCommerce/assets/120029429/dde2e369-04d6-4d96-be13-9034851d6260)

- **Admin Privileges**:
  - Access to an exclusive admin stock manager page with CRUD (Create, Read, Update, Delete) functionality for products.
    ![admin dashboard page](https://github.com/Aryavedas/ClickCommerce/assets/120029429/ef74612b-c3b1-4dee-aa4b-fbdc0f593025)
    ![create page](https://github.com/Aryavedas/ClickCommerce/assets/120029429/ff1cd50e-cb13-4d66-a00c-40d67e1fcd48)

## 4. User Roles
The Mini E-Commerce (ClickCommerce) application defines two user roles:

1. **Regular User**: This role represents the general users of the application who can browse and purchase products.
2. **Admin**: This role is specifically assigned to administrators who have additional privileges to manage the product stock.


## 5. Prerequisites
To run the Mini E-Commerce (ClickCommerce) application locally, ensure that you have the following prerequisites installed:

- PHP (>= 7.3)
- Composer
- Laravel (>= 8.x)
- Database (e.g., MySQL, PostgreSQL, SQLite)

## 6. Installation
Follow these steps to set up the application:

1. Clone the repository to your local machine:
git clone https://github.com/your-username/mini-ecommerce.git


2. Navigate to the project directory:
cd mini-ecommerce


3. Install the dependencies using Composer:
composer install


4. Create a copy of the `.env.example` file and rename it to `.env`:
cp .env.example .env


5. Generate the application key:
php artisan key:generate


6. Configure the database settings in the `.env` file according to your environment.

7. Run the database migrations:
php artisan migrate


8. Optionally, seed the database with sample data:
php artisan db:seed


9. Serve the application:
php artisan serve


10. Access the application by visiting `http://localhost:8000` in your web browser.

## 7. Usage
Once the application is up and running, you can perform the following tasks based on your user role:

- **Regular User**:
- Create an account or log in with existing credentials.
- Browse and view the available products.
- Add desired products to the cart.
- Simulate the payment gateway process for testing purposes.

- **Admin**:
- Log in with admin credentials.
- Access the admin stock manager page.
- Perform CRUD (Create, Read, Update, Delete) operations on products:
 - Create new products.
 - Read existing products.
 - Update product details.
 - Delete products.

## 8. Contributing
Contributions to the Mini E-Commerce (ClickCommerce) application are welcome. If you encounter any issues or have suggestions for improvements, please submit them as GitHub issues in the repository. Feel free to fork the repository and create pull requests for new features or bug fixes.

## 9. License
The Mini E-Commerce (ClickCommerce) application is open-source software licensed under the [MIT License](https://opensource.org/licenses/MIT). See the [LICENSE](LICENSE) file for more information.
