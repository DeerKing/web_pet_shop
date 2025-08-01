<?php

define('BASE_URL',          'http://localhost/su25/xuong/web_pet_shop/');

define('PATH_ROOT',         __DIR__ . '/../');

define('PATH_VIEW',         PATH_ROOT . 'views/');

define('PATH_VIEW_MAIN',    PATH_ROOT . 'views/main.php');

define('BASE_ASSETS_UPLOADS',   BASE_URL . 'assets/uploads/');

define('PATH_ASSETS_UPLOADS',   PATH_ROOT . 'assets/uploads/');

define('PATH_CONTROLLER',       PATH_ROOT . 'controllers/');

define('PATH_CONTROLLER_ADMIN',       PATH_ROOT . 'controllers/admin/');

define('PATH_CONTROLLER_CLIENT',       PATH_ROOT . 'controllers/client/');

define('PATH_MODEL',            PATH_ROOT . 'models/');

define('PATH_IMAGE', 'assets/uploads/products/');

define('DB_HOST',     'localhost');
define('DB_PORT',     '3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME',     'web_pet_shop');
define('DB_OPTIONS', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);
