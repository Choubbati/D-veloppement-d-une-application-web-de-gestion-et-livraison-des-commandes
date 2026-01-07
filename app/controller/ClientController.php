<?php

require_once __DIR__ . '/../repository/OrderRepository.php';
require_once __DIR__ . '/../model/Order.php';



class ClientController {

   
    private PDO $pdo;
    private OrderRepository $orderRepository;

    public function __construct(PDO $pdo)
    {
        $this->pdo=$pdo;
        $this->orderRepository = new OrderRepository($pdo);
    }

    

    public function dashboard() {
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'client') {
            header("Location: index.php?route=login");
            exit();
        }
        $clientId = $_SESSION['user']['id'];
        $orders = $this->orderRepository->findByClient($clientId);
        $pendingCount = $this->orderRepository->countPendingByClient($clientId);
        $livreCount = $this->orderRepository->countLivreeByLivreur($clientId);
        $priceCount = $this->orderRepository->countPrice($clientId);


        require __DIR__ . '/../views/client/dashboard.php';

        }

    public function orders(){
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'client') {
            header("Location: index.php?route=login");
            exit();
        }
        $clientId = $_SESSION['user']['id'];
        $orders = $this->orderRepository->findAll($clientId);
    
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
            $this->orderRepository->createOrder($order);
            
            header("Location: index.php?route=client/dashboard");
            exit;
        }
    }


    public function ordersPage() {
    session_start();
    $clientId = $_SESSION['user']['id'];
    $orders = $this->orderRepository->findByClient($clientId);

    require_once __DIR__ . '/../views/client/orders.php';
}

    public function orderDetail()
    {
        if (!isset($_GET['id'])) {
            die('ID commande manquant');
        }

        $orderId  = (int) $_GET['id'];
        $clientId = $_SESSION['user']['id'];

        $order = $this->orderRepository->findByIdAndClient($orderId, $clientId);

        if (!$order) {
            die('Commande introuvable');
        }

        require_once __DIR__ . '/../views/client/order-detail.php';
    }

    public function deleteOrder()
{
    if (!isset($_GET['id'])) {
        header('Location: index.php?route=client/orders');
        exit;
    }

    $orderId = (int) $_GET['id'];
    $clientId = $_SESSION['user']['id']; 

    // Soft delete
    $stmt = $this->pdo->prepare("
        UPDATE orders
        SET is_deleted = 1
        WHERE id = :id AND client_id = :client_id
    ");

    $stmt->execute([
        'id' => $orderId,
        'client_id' => $clientId
    ]);

    header('Location: index.php?route=client/orders');
    exit;
}



   }
