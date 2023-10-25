# MoissonRSS

MoissonRSS is an Open Source news aggregator

## Requirements
* [PHP](https://www.php.net/) 8.1

## Install

Install the project:
```shell
$ bin/composer install
```

## Start the project
For dev only 

```shell
$ symfony server:start
```

## Quality tasks

### Units Tests with PHPUnit

```shell
$ vendor/bin/phpunit
```

### Static analysis with PhpStan

```shell
$ vendor/bin/phpstan
```

### Coding Style with PHPCS

```shell
$ bin/php-cs-fixer check --diff // check
$ bin/php-cs-fixer fix --diff // fix
```
