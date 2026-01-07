<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once "../config/database.php";

require_once "../app/controller/HomeController.php";
require_once "../app/controller/AuthController.php";
require_once "../app/controller/LivreurController.php";
require_once "../app/controller/ClientController.php";

$route = $_GET['route'] ?? 'home';

$auth = new AuthController();

switch ($route) {

    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;

    case 'login':
        $auth->login();
        break;

    case 'register':
        $auth->register();
        break;

    case 'logout':
        $auth->logout();
        break;



    case 'livreur/dashboard':
        
        $controller = new LivreurController($pdo);
        $controller->dashboard();
        break;

    case 'client/dashboard':
        $controller = new ClientController($pdo);
        $controller->dashboard();
        break;

    case 'client/create-order':
        $controller = new ClientController($pdo);
        $controller->createOrder();
        break;

    case 'client/store-order':
        $controller = new ClientController($pdo);
        $controller->storeOrder();
        break;
    case 'client/orders':
        $controller =new ClientController($pdo);
        $controller->orders();
        break;

    case 'client/order-detail':
        $controller = new ClientController($pdo);
        $controller->orderDetail();
        break;
    case 'client/delete-order':
        $controller = new ClientController($pdo);
        $controller->deleteOrder();
        break;

    case 'client/profile':
        $controller = new ClientController($pdo);
        $controller->profile();
        break;
    case 'client/setting':
        $controller= new ClientController($pdo);
        $controller->setting();
        break;


    default:
        echo "Page 404";
        break;
}
