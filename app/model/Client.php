<?php 

require_once __DIR__ . '/User.php';

    class Client extends User{
        public function redirectToDashboard(){
            header('Location: index.php?role=client/dashboard');
        }
    }