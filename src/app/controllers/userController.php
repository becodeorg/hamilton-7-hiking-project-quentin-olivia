<?php
declare(strict_types=1);


class UserController
{
    private User $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function index(): void
    {
        $users = $this->userModel->findAll();

        include 'app/views/includes/header.view.php';
        include 'app/views/index.view.php';
        include 'app/views/includes/footer.view.php';
    }

    public function show(string $code): void
    {
        if (empty($code)) {
            throw new Exception("User code was not provided.");
        }

        $user = $this->userModel->find($code);

        include 'app/views/includes/header.view.php';
        include 'app/views/userProfile.view.php';
        include 'app/views/includes/footer.view.php';
    }
}