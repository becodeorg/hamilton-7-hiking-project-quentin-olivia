<?php

declare(strict_types=1);

class HomeController
{
    public function index(): void
    {
        include 'views/includes/header.view.php';
        include 'views/includes/navbar.view.php';
        include 'views/includes/footer.view.php';
    }
}