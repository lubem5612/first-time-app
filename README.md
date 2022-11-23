##First Time For Everything

This is a simple test of a developer's ability to set up a simple Laravel project, create models through migration and implement the Ladacache which is used with redis as a simple database cache. Eloquent relationships and model feature test are also implemented.

##Table of contents

* [Prerequisites](#prerequisites)
* [Setup](#setup)
* [Testing](#testing)
* [Contributors](#contributors)

##Prerequisites

Ensure that your computer  has redis installed. A simple check can be done by running ``redis-server`` in the terminal. If redis is not installed on your PC, follow the installation process [here](https://redis.io/docs/getting-started/)

##Setup

Follow the steps below to setup the project locally

- clone the project from git repository.
- run ``cp .env.example .env`` to create .env file.
- open the .env file and configure your database parameters.
- run ``composer install`` to install application packages and dependencies.
- run ``php artisan key:generate`` to generate application key.
- run ``php artisan migrate`` to create migration tables in your database.

##Testing

Before running the test, ensure that redis service is running on your PC. If you have any difficulty in running the service, check the [documentation](https://redis.io/docs/getting-started/). <p/> Follow these steps to test your models.
- run ``redis-server`` in your project terminal.
- run ``php artisan test`` to test the existence of the models that have been created. 

##Contributors

- [Lubem Tser](http://slait.com.ng/about)
