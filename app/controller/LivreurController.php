<?php 

class LivreurController {
    public function dashboard() {
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'livreur') {
            header("Location: index.php?route=login");
            exit();
            }
                require __DIR__ . '/../views/livreur/dashboard.php';

    }
}