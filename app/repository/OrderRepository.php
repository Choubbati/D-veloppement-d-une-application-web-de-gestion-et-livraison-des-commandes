<?php

class OrderRepository
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function createOrder(Order $order): bool
    {
        $sql = $this->pdo->prepare(
            "INSERT INTO orders(title,price, description, pickup_address, delivery_address, status, client_id) 
             VALUES (?, ?,?, ?, ?, ?, ?)"
        );

        return $sql->execute([
            $order->getTitle(),
            $order->getPrice(),
            $order->getDescription(),
            $order->getPickupAddress(),
            $order->getDeliveryAddress(),
            $order->getStatus(),
            $order->getClientId()
        ]);
    }

public function findByClient(int $clientID, int $limit = 3): array
{
    $sql = $this->pdo->prepare("
        SELECT *
        FROM orders
        WHERE client_id = :client_id
          AND is_deleted = 0
        ORDER BY created_at DESC
        LIMIT :limit
    ");

    $sql->bindValue(':client_id', $clientID, PDO::PARAM_INT);
    $sql->bindValue(':limit', $limit, PDO::PARAM_INT);

    $sql->execute();

    $orders = [];
    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        $orders[] = new Order($row);
    }

    return $orders;
}

public function findAll(int $clientID){
       $sql = $this->pdo->prepare("
        SELECT *
        FROM orders
        WHERE client_id = :client_id
          AND is_deleted = 0
        ORDER BY created_at ASC
    ");

    $sql->execute([
        'client_id' => $clientID
    ]);

    $orders = [];
    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        $orders[] = new Order($row);
    }

    return $orders;
}


    // public function find(int $id): ?Order
    // {
    //     $stmt = $this->pdo->prepare("SELECT * FROM orders WHERE id = ?");
    //     $stmt->execute([$id]);
    //     $data = $stmt->fetch(PDO::FETCH_ASSOC);

    //     return $data ? new Order($data) : null;
    // }


   public function countPendingByClient(int $clientId): int
{
    $sql = $this->pdo->prepare("
        SELECT COUNT(*) 
        FROM orders 
        WHERE client_id = :client_id
          AND status = :status
    ");

    $sql->execute([
        'client_id' => $clientId,
        'status'    => 'pending'
    ]);

    return (int) $sql->fetchColumn();
}


public function countLivreeByLivreur(int $clientId){
    $sql = $this->pdo->prepare("
        SELECT COUNT(*) 
        FROM orders
        WHERE client_id = :client_id
        AND status = :status
    ");

    $sql->execute([
        'client_id' => $clientId,
        'status' => "livrée"
    ]);

    return (int) $sql->fetchColumn();
}



public function countPrice(int $clientID):float{
    $sql = $this->pdo->prepare('
        SELECT SUM(price) 
        FROM orders
        WHERE client_id = :client_id
        AND is_deleted =0
        
    ');

    $sql->execute([
        "client_id" => $clientID
    ]);
    return (float) $sql->fetchColumn();
}

public function findByIdAndClient(int $orderId, int $clientId): ?Order
{
    $stmt = $this->pdo->prepare(
        "SELECT * FROM orders WHERE id = ? AND client_id = ?"
    );
    $stmt->execute([$orderId, $clientId]);

    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$data) {
        return null;
    }

    return new Order($data);
}


public  function softDelete(int $orderId,int $clientId): bool{
    $sql = $this->pdo->prepare('
        UPDATE orders 
        SET is_delete = 1 
        WHERE id = :id
            AND client_id = :client_id
            AND status = :status
    ');
    return $sql->execute([
        'id'=>$orderId,
        'client_id' => $clientId,
        'status' => "pending"
    ]);
}



}
