<?php

require_once '../job-03/dbConnect.php';

class Category {

    private $db;

    private ?int $id;
    private ?string $name;
    private ?string $description;
    private ?DateTime $createdAt;
    private ?DateTime $updatedAt;

    public function __construct($id=null, $name=null, $description=null, $createdAt=null, $updatedAt=null) {

        $this->db = DbConnect::getInstance()->getConnection();

        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->createdAt = new DateTime();
        $this->updatedAt = new DateTime();
    }

    public function getProducts() {
        $query = "SELECT * FROM product WHERE category_id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->execute(['id' => $this->id]);
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $products;
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

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        return $this->description = $description;
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