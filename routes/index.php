<?php

$action = $_GET['action'] ?? '/';
$homeController = new HomeController();
$authController = new AuthController();
$categoryController = new CategoryController();
$productController = new ProductController();
match ($action) {
    '/'         => $homeController->index(),
    'login'     => $authController->login(),
    'logout'    => $authController->logout(),
    'register'  => $authController->register(),
    'category'  => $categoryController->index(),
    'product'   => $productController->show(),
};