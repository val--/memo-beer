# Memo-beer

This is a beer listing application to keep trace of your favorites 🍺

## How to run this project locally ?

### Prerequisites
    * PHP 7.4
    * Composer
    * Symfony CLI
    * Docker
    * Docker-compose
After installing Symfony binary ( https://symfony.com/download ) you can check requirements with the following command :

```bash
symfony check:requirements
```

### Install & launch development environment
```bash
composer install
docker-compose up -d
symfony serve -d
```