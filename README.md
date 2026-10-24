# RisePoint — WordPress и WooCommerce

Интернет-магазин на WordPress и WooCommerce с собственной темой и Docker-окружением.

## Возможности

- Тема магазина и шаблоны страниц.
- Каталог товаров и ресурсы интерфейса.
- WordPress-инфраструктура и сборка ресурсов темы.

## Инженерные акценты

- Разработка и адаптация CMS-магазина.
- Работа с WordPress/WooCommerce и собственной темой.
- Организация локального окружения и frontend-сборки.

## Стек

PHP, JavaScript, HTML, CSS.

## Навигация по коду

- [wp_data/wp-content/themes/risepoint/](wp_data/wp-content/themes/risepoint/) — тема wordpress.

## Локальный WordPress

```sh
docker compose up -d
```

Откройте `http://localhost:8080`, выполните установку WordPress, установите WooCommerce и активируйте тему `risepoint`. Официальный Docker-образ создаёт системные файлы WordPress; в Git хранится собственная тема. Зависимости темы устанавливаются из её `package.json`.
