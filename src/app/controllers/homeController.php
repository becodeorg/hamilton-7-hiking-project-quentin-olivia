<?php

declare(strict_types=1);

class HomeController
{
    private Hike $hike;

    public function getAll(){
        $this->hike = new Hike();
        return $this->hike->findAll();
    }

    public function index(): void
    {
        $hikes = $this->getAll();

        include 'app/views/includes/header.view.php';
        include 'app/views/includes/navbar.view.php';
        include 'app/views/index.view.php';
        include 'app/views/includes/footer.view.php';
    }
    
}

// class HikeController{
//     private HikeModel $HikeModel;
    
//     public function showIndex(){
//         $this->HikeModel = new HikeModel();
//         $hikes = $this->HikeModel->findAllindex();

//         include 'Views/Includes/header.view.php';
//         include 'Views/index.view.php';
//         include 'Views/Includes/footer.view.php';
//     }
// }