# PHP

## Getting Started

PHP 7.1 or above and Composer is expected to be installed on your system.


### Installing Composer

For instructions on how to install Composer visit [getcomposer.org](https://getcomposer.org/download/).


### Installing Dependencies

After cloning this repository, change into the `php` directory and run

```bash
composer install
```

or if you have installed Composer locally

```bash
php composer.phar install
```

This will install all dependencies needed for the project.


## Running

To run the test suite from the `php` directory with a code coverage report:

```bash
composer run-script phpunit
```

Note: the code coverage report will only be available if you have XDebug installed and enabled on your system.

To run without code coverage or to use PHPUnit directly run:

```bash
vendor/bin/phpunit
```
