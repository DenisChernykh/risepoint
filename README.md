# RisePoint — интернет-магазин на WordPress и WooCommerce

Собственная WordPress-тема для магазина: главная страница, категории и подкатегории, подборка рекомендуемых товаров, карточки и навигация. Контент и товары управляются через CMS.

## Что реализовано

- PHP-шаблоны страниц и переиспользуемые части интерфейса.
- Получение товарных категорий через WordPress API и рекомендуемых товаров через WooCommerce.
- Собственный walker основного меню, поддержка логотипа и заголовков WordPress.
- Интеграция избранного YITH WooCommerce Wishlist.
- Сборка CSS и JavaScript на Vite; Docker-окружение с WordPress, MySQL и phpMyAdmin.

## Что показывает проект

Разработку магазина внутри CMS: от структуры темы и получения товарных данных до пользовательского интерфейса и подключения собранных ресурсов. Полезный пример для задач WordPress/WooCommerce, PHP-вёрстки и сопровождения интернет-магазинов.

## Где смотреть реализацию

- [Тема RisePoint](wp_data/wp-content/themes/risepoint/) — PHP, стили, JavaScript и ресурсы.
- [Поставщики данных](wp_data/wp-content/themes/risepoint/app/Data/) — категории и рекомендуемые товары.
- [Шаблоны блоков](wp_data/wp-content/themes/risepoint/template-parts/) — композиция главной страницы и карточек.
- [Меню](wp_data/wp-content/themes/risepoint/inc/Header_Menu_Walker.php) — собственная генерация навигации.
- [Подключение ресурсов](wp_data/wp-content/themes/risepoint/functions.php) и [сборка](wp_data/wp-content/themes/risepoint/vite.config.js).

## Локальный запуск

Требуются Docker Compose, Node.js и pnpm. Из корня репозитория:

```sh
docker compose up -d
```

Откройте `http://localhost:8080`, выполните установку WordPress. Установите и активируйте **WooCommerce** и **YITH WooCommerce Wishlist**, затем тему **risepoint**. Добавьте товары, категории, основное меню и логотип через панель WordPress. phpMyAdmin доступен на `http://localhost:8081`.

Сборка ресурсов темы:

```sh
cd wp_data/wp-content/themes/risepoint
pnpm install
pnpm build
```

Для пересборки при изменениях используйте `pnpm watch`. Готовые `dist/styles.css` и `dist/script.js` входят в тему и подключаются из PHP. Системные файлы WordPress и локальная база создаются Docker-окружением; в Git хранится собственная тема.
