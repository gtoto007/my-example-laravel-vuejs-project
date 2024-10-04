
## Introduction
This project was created to meet some requirements for a job interview, by extending an existing application. The objective of the application is to allow a company to receive job applications for open positions.

### Requirements met:
- [x] After registration, the user must land on the application page.
- [x] Store the user's job application.
- [x] Associate the application with the user who submitted it.
- [x] Allow the user to access a page where they can see the status of their application (accepted or rejected). Upon login, the user is automatically redirected to this page.
- [x] A user cannot apply more than once.
- [x] Only admin users can manipulate applications.
- [x] Logic for accepting or rejecting an application after the admin clicks the button.
- [x] Populate the database with a seed of job applications.
- [x] Notify the candidate when they are accepted or rejected.
- [x] Notify when there is a new application (on Slack + Email to admin users).

### Additional features developed independently:
- [x] Project upgraded from Laravel 7 to Laravel 10.
- [x] Integrated startkit [breeze & Vue js](https://laravel.com/docs/10.x/starter-kits).
- [x] Used [Inertia/Vue.Js](https://inertiajs.com/) instead of a traditional API approach.

#### ADMIN DEMO ACCOUNT (after seeding the database):
```
admin@bitboss.it
password
```

## Installation

To start using the Laravel project, follow these steps:

1. Copy the `.env.example` file and rename it to `.env` using the command:

    ```
    cp .env.example .env
    ```

2. Optionally, run the project using Laravel Sail.
3. In that case, Docker must be installed, and you need to configure the Sail command alias following the [official Laravel documentation](https://laravel.com/docs/10.x/sail#configuring-a-shell-alias).
4. Start the server with the command:

    ```
    sail up -d
    ```

5. Access the shell of the webserver container with:

    ```
    sail shell
    ```

6. Perform the initial project setup by running the following commands:

    ```
    composer install
    npm install
    php artisan key:generate
    php artisan migrate --seed
    ```

7. Access the website by opening a browser and navigating to:

    ```
    http://localhost
    ```

8. Access the Mailpit dashboard via the link:

    ```
    http://localhost:8025
    ```

#### ADMIN DEMO ACCOUNT
```
admin@bitboss.it
password
```

## Configuring environment variables

To receive notifications of new job applications on Slack, open the `.env` file and insert the Slack webhook into the `SLACK_WEBHOOK` parameter as follows:

```
SLACK_WEBHOOK=YOUR_WEBHOOK_SLACK
```

## Project Screenshots

![Screenshot 1](public/screensaver/1.png)
*Dashboard for managing applications*

![Screenshot 2](public/screensaver/2.png)
*Job application submission form*

![Screenshot 3](public/screensaver/3.png)
*Slack notification for receiving a new application*

![Screenshot 4](public/screensaver/4.png)
*Email notification to the candidate with the application result*
