<?php

$action = $_GET['action'] ?? '/';
$dashboardController = new DashboardController();

match ($action) {
    '/'         => $dashboardController->index(),
};