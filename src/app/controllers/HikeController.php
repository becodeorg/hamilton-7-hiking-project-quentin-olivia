<?php

declare(strict_types=1);

class HikeController {

    private Hike $hikeModel;

    public function __construct()
    {
        $this->hikeModel = new Hike();
    }

    public function getSingleHike($input): void
    {
        if (empty($input['id'])) {
            throw new Exception('Form data not validated.');
        }
        $id = $input["id"];
        $hike = $this->hikeModel->find($id);

        include 'app/views/includes/header.view.php';
        include 'app/views/includes/navbar.view.php';
        include 'app/views/singleHike.view.php';
        include 'app/views/includes/footer.view.php';
    }
}