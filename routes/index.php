<?php

$action = $_GET['action'] ?? '/';
require_once './controllers/client/HomeController.php';
match ($action) {
    '/'         => (new HomeController)->index(),
};