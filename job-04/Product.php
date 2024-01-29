<?php

require_once '../job-03/dbConnect.php';

class Product {

    private $db;
    private ?int $id;
    private ?string $name;
    private ?int $category_id;
    private ?array $photos;
    private ?int $price;
    private ?string $description;
    private ?int $quantity;
    private ?DateTime $createdAt;
    private ?DateTime $updatedAt;

    public function __construct($id=null, $name=null, $category_id=null, $photos=null, $price=null, $description=null, $quantity=null, $createdAt=null, $updatedAt=null) {

        $this->db = DbConnect::getInstance()->getConnection();
        $this->id = $id;
        $this->name = $name;
        $this->category_id = $category_id;
        $this->photos = $photos;
        $this->price = $price;
        $this->description = $description;
        $this->quantity = $quantity;
        $this->createdAt = new DateTime();
        $this->updatedAt = new DateTime();


    }

    public function getAllProducts() {
        $query = "SELECT * FROM product";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }

    public function getProductById($id) {
        $query = "SELECT * FROM product WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->execute(['id' => $id]);
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        return $product;
        
    }

    public function createProduct($id, $name, $price, $description, $quantity) {
        $query = "INSERT INTO product (id, name, photos, price, description, quantity, createdAt, updatedAt ) VALUES ( :id, :name, NULL, :price, :description, :quantity, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";
        $stmt = $this->db->prepare($query);
        $stmt->execute(['id'=> $id, 'name' => $name, 'price' => $price, 'description' => $description, 'quantity' => $quantity,]);
        return $this->db->lastInsertId();
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        return $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        return $this->name = $name;
    }

    public function getCategory_id() {
        return $this->category_id;
    }

    public function setCategory_id($category_id) {
        return $this->category_id = $category_id;
    }

    public function getPhoto() {
        return $this->photos;
    }

    public function setPhoto($photo) {
        return $this->photos = $photo;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        return $this->price = $price;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        return $this->description = $description;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity($quantity) {
        return $this->quantity = $quantity;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt) {
        return $this->createdAt = $createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    public function setUpdatedAt($updatedAt) {
        return $this->updatedAt = $updatedAt;
    }


}


?>