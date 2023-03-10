<?php

declare(strict_types=1);

session_start();

require 'vendor/autoload.php';
// var_dump(getenv('DB_HOST'));
// die();

$url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$method = $_SERVER['REQUEST_METHOD'];

if ($url === '/' || $url === '') {
    $homeController = new HomeController();
    $homeController->index();
}

if ($url === 'hike') {
    $hikeController = new HikeController();
    $hikeController->getSingleHike($_GET);
}

if ($url === 'registration') {
    $authController = new AuthController();

    if ($method === 'GET') {
        $authController->showRegistrationForm();
    }

    if ($method === 'POST') {
        $authController->register($_POST);
    }
}

if ($url === 'login') {
    $authController = new AuthController();

    if ($method === 'GET') {
        $authController->showLoginForm();
    }

    if ($method === 'POST') {
        $authController->login($_POST);
    }
}

if ($url === 'logout') {
    $authController = new AuthController();
    $authController->logout();
}