# *Expense Master: A web based budget tracking system*
## Description 
Expense Master is an intuitive and robust expense management system designed specifically for students. The platform helps students effortlessly track, manage, and optimize their personal finances, ensuring they can maintain a healthy budget and achieve financial stability throughout their academic journey.


## Dependancies
To run this project you will need to install the following dependancies

1. *MySQL* - Serves as Database
- ![MySQL Logo](https://www.mysql.com/common/logos/logo-mysql-170x115.png)
    Installation: [Download mysql](https://dev.mysql.com/downloads/installer/)
2. *NodeJs* 
   - Installation: [Download nodejs](https://nodejs.org/en/download/package-manager)
3. *Laravel* 
 - ![Laravel Logo](https://laravel.com/img/logomark.min.svg)
   Installation:  [Download Laravel](https://laravel.com/docs/11.x/installation)
4. *Node Package Manager*(NPM)
  -  Installation [NPM](https://www.npmjs.com/)
5. *Composer* - Dependancy manager for PHP
- ![Composer Logo](https://getcomposer.org/img/logo-composer-transparent5.png)
  Installation [Composer](https://getcomposer.org/) 


## Installation

- **Fork the Repository**:
  Click on the Fork button at the top right corner of this page.

- **Clone Your Fork**:
  ```bash
  git clone https://github.com/iankaranja13

  ### Installation and Setup

To get started, follow these steps:


## Installation

- *Fork the Repository*:
    Click on the Fork button at the top right corner of this page.

- *Clone Your Fork*:
    ```bash
    git clone https://(https://github.com/iankaranja13)
    ```

- Install dependencies:
    ```bash
    composer install
    ```

- Copy `.env.example` to `.env` and configure your environment variables:
    ```bash
    cp .env.example .env
    # Then, open the .env file and configure your environment variables
    ```

- Generate application key:
    ```bash
    php artisan key:generate
    ```

- Migrate database:
    ```bash
    php artisan migrate
    ```

- Serve the application:
    ```bash
    php artisan serve
    ```




Features
- User registration and authentication
- Donation form for users to input food donation details
- Matching system to connect donors with recipients
- Admin panel to manage donations and users
- Reporting and analytics for tracking donations

 Project Structure
 Project Root
``` bash
│
├─── app
│   ├─── Http
│   │   └─── Controllers
│   │       ├── AboutController.php
│   │       ├── AdminController.php
│   │       ├── BlogController.php
│   │       ├── CategoryController.php
│   │       ├── CauseController.php
│   │       ├── ContactController.php
│   │       ├── Controller.php
│   │       ├── DetailsController.php
│   │       ├── HomeController.php
│   │       └── VolunteerController.php
│   ├─── Models
│   ├─── Providers
│   └─── View
│
├─── bootstrap
│
├─── config
│
├─── database
│
├─── public
│
├─── resources
│   ├─── views
│   │   ├── About.blade.php
│   │   ├── Blog.blade.php
│   │   ├── Cause.blade.php
│   │   ├── contact.blade.php
│   │   ├── dashboard.blade.php
│   │   ├── home.blade.php
│   │   ├── navigation-menu.blade.php
│   │   ├── policy.blade.php
│   │   ├── terms.blade.php
│   │   │
│   │   ├─── Category
│   │   ├─── components
│   │   ├─── Details
│   │   ├─── emails
│   │   ├─── layouts
│   │   ├─── profile
│   │   └─── Volunteer
│
├─── routes
│
├─── storage
│
├─── tests
│
├─── .editorconfig
├─── .env.example
├─── .gitattributes
├─── .gitignore
└─── README.md


## License
This project is licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Contact
For any inquiries or feedback, please reach out to:

- Arthur Nyota - [arthur.nyota@strathmore.edu](mailto:arthur.nyota@strathmore.edu)
- Ian Karanja - [ian.karanja@strathmore.edu](mailto:ian.karanja@strathmore.edu)

-Arthur Nyota - [Arthur](arthur.nyota@strathmore.edu)
-Ian Karanja - [Ian](ian.karanja@strathmore.edu)
