<?php

class Order
{
    private ?int $id;
    private string $title;
    private ?string $description;
    private string $pickupAddress;
    private string $deliveryAddress;
    private string $packageType;
    private ?string $instructions;
    private string $status;
    private float $price;
    private int $clientId;
    private ?int $deliveryId;
    private ?string $createdAt;
    private ?string $updatedAt;

    public function __construct(array $data)
    {
        $this->id              = $data['id'] ?? null;
        $this->title           = $data['title'];
        $this->description     = $data['description'] ?? null;
        $this->pickupAddress   = $data['pickup_address'];
        $this->deliveryAddress = $data['delivery_address'];
        $this->packageType     = $data['package_type'] ?? 'standard';
        $this->instructions    = $data['instructions'] ?? null;
        $this->status          = $data['status'] ?? "pending";
        // $this->status          = $data['status'] ?? OrderStatus::PENDING;
        $this->price           = (float)($data['price'] ?? 0);
        $this->clientId        = (int)$data['client_id'];
        $this->deliveryId      = $data['delivery_id'] ?? null;
        $this->createdAt       = $data['created_at'] ?? null;
        $this->updatedAt       = $data['updated_at'] ?? null;
    }


    public function getId(): ?int
    {
        return $this->id;
    }
public function getTitle(): string
{
    return $this->title;
}
    public function getTitre(): string
    {
        return $this->title;
    }
    public function getDescription(): ?string{
        return $this->description;
    }
    public function getPickupAddress(): string{
        return $this->pickupAddress;
    }
    public function getClientId(): ?int{
        return $this->clientId;
    }

    public function getDeliveryAddress(): string
    {
        return $this->deliveryAddress;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getStatus(): string
    {
        return $this->status;
        
    }

    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

}
