<?php

require_once __DIR__ . '/../repository/OrderRepository.php';
require_once __DIR__ . '/../model/Order.php';



class ClientController {

   
    private $pdo;
    private OrderRepository $orderRepo;

    public function __construct(PDO $pdo)
    {

        $this->orderRepo = new OrderRepository($pdo);
    }

    

    public function dashboard() {
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'client') {
            header("Location: index.php?route=login");
            exit();
        }
        $clientId = $_SESSION['user']['id'];
        $orders = $this->orderRepo->findByClient($clientId);
        $pendingCount = $this->orderRepo->countPendingByClient($clientId);
        $livreCount = $this->orderRepo->countLivreeByLivreur($clientId);
        $priceCount = $this->orderRepo->countPrice($clientId);


        require __DIR__ . '/../views/client/dashboard.php';

        }

    public function orders(){
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'client') {
            header("Location: index.php?route=login");
            exit();
        }
        $clientId = $_SESSION['user']['id'];
        $orders = $this->orderRepo->findAll($clientId);
    
    require __DIR__ . '/../views/client/orders.php';


    }

    public function createOrder(){
         if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'client') {
            header("Location: index.php?route=login");
            exit;
        }   
        require __DIR__ . '/../views/client/create-order.php';
    }

    public function storeOrder()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $data = [
                'title' => $_POST['title'],
                'description' => $_POST['description'] ?? null,
                'pickup_address' => $_POST['pickup_address'],
                'price' => $_POST['price'],
                'delivery_address' => $_POST['delivery_address'],
                'client_id' => $_SESSION['user']['id']
            ];

            $order = new Order($data);
            $this->orderRepo->createOrder($order);
            
            header("Location: index.php?route=client/dashboard");
            exit;
        }
    }

    public function orderDetail(){
        
        $clientId = $_SESSION['user']['id'];
        $order = $this->orderRepo->findByClient($clientId);
        require_once __DIR__ . '/../views/client/order-detail.php';

    }

    public function ordersPage() {
    session_start();
    $clientId = $_SESSION['user']['id'];
    $orders = $this->orderRepo->findByClient($clientId);

    require_once __DIR__ . '/../views/client/orders.php';
}


    
}
