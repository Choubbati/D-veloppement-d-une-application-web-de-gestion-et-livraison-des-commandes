<?php

require_once __DIR__ . '/User.php';

    class Livreur extends User{
        public function redirectToDashboard(){
            header('Location: index.php?role=livreur/dashboard');
        }
    }