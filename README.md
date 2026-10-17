# Cinema Ticket System

[![PHP CI Application](https://github.com/toodyann/cinema-ticket-system/actions/workflows/php-ci.yml/badge.svg)](https://github.com/toodyann/cinema-ticket-system/actions/workflows/php-ci.yml)

Навчальний PHP-проєкт електронної системи продажу квитків до кінотеатру.

Проєкт розробляється для практичного вивчення PHP, проєктування веб-систем, модульного тестування та налаштування CI/CD за допомогою GitHub Actions.

## Функціонал

- базовий сервіс арифметичних операцій;
- модульні тести на PHPUnit;
- автоматична перевірка форматування за допомогою Laravel Pint;
- CI-пайплайн для перевірки кожного Pull Request у гілку `main`;
- безпечне використання секретів GitHub Actions.

## Запуск тестів

Встановіть залежності:

```bash
composer install
```

Запустіть модульні тести:

```bash
./vendor/bin/phpunit tests/Unit
```

Перевірте форматування коду:

```bash
./vendor/bin/pint --test
```
