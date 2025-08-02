<?php

$action = $_GET['action'] ?? '/';
$dashboardController = new DashboardController();

match ($action) {
    '/'         => $dashboardController->index(),
    'add-product' => $dashboardController->addProduct(),
    'edit-product' => $dashboardController->editProduct(),
    'delete-product' => $dashboardController->deleteProduct(),
    default    => $dashboardController->index(),
};