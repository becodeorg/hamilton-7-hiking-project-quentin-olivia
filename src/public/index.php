<?php

declare(strict_types=1);

session_start();

require 'vendor/autoload.php';

$url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$method = $_SERVER['REQUEST_METHOD'];

<<<<<<< HEAD
if ($url === '') {
    $homeController = new HomeController();
    $homeController->index();
=======
if ($url === '/' || $url === '') {
    $hikeController = new HikeController();
    $hikeController->index();
}

/*$routes = [
    'login' => [AuthController::class, 'showLoginForm()'],
    ...
];*/

if ($url === 'login') {
    $authController = new AuthController();

    if ($method === 'GET') {
        $authController->showLoginForm();
    }

    if ($method === 'POST') {
        $authController->login($_POST);
    }
>>>>>>> 3bdd97487725c02d4b4eeff66900ca202ccb2785
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

<<<<<<< HEAD
if ($url === 'login') {
    $authController = new AuthController();

    if ($method === 'GET') {
        $authController->showLoginForm();
    }

    if ($method === 'POST') {
        $authController->login($_POST);
    }
=======
if ($url === 'hike') {
    $code = $_GET['code'];
    $hikeController = new HikeController();
    $hikeController->show($code);
>>>>>>> 3bdd97487725c02d4b4eeff66900ca202ccb2785
}

if ($url === 'logout') {
    $authController = new AuthController();
    $authController->logout();
}