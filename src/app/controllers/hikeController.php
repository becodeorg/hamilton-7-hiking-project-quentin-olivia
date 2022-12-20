<?php
declare(strict_types=1);


class HikeController
{
    private Hike $hikeModel;

    public function __construct()
    {
        $this->hikeModel = new Hike();
    }

    public function index(): void
    {
        $hikes = $this->hikeModel->findAll();

        include 'app/views/includes/header.view.php';
        include 'app/views/index.view.php';
        include 'app/views/includes/footer.view.php';
    }

    public function show(string $code): void
    {
        if (empty($code)) {
            throw new Exception("Hike code was not provided.");
        }

        $hike = $this->hikeModel->find($code);

        include 'app/views/includes/header.view.php';
        include 'app/views/singleHike.view.php';
        include 'app/views/includes/footer.view.php';
    }
}