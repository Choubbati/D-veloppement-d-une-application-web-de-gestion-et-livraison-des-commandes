<?php

    class ClientOrderController{
        private OrderRepository $orderRepository;
        
        public function __construct(){
           global $pdo;
           
           $this->orderRepository= new OrOrderRepository($pdo);
        }


        public function show(){
            if (!isset($_GET['id'])) {
                header('Location: index.php?route=client/orders');
                exit;
            }

             $orderId = (int) $_GET['id'];
        $clientId = $_SESSION['user']['id'];

        $order = $this->orderRepository->findByIdAndClient($orderId, $clientId);

        if (!$order) {
            die('Commande introuvable');
        }

        require '../views/client/order-show.php';
        }
    }