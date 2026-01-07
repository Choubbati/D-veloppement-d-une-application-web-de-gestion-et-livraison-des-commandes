<?php
class ClientController {

    public function dashboard() {
        if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'client'){
            header('Location: index.php?route=login');
            exit;
        }
        require '../app/views/client/dashboard.php';
    }
}
