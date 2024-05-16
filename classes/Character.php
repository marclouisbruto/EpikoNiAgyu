<?php
require_once 'config.php';
class Character {
    private $db;
    private $id;
    private $name;
    private $description;
    private $image;

    public function __construct($id = null) {
        $this->db = (new Database())->getConnection();
        if($id) {
            $this->load($id);
        }
    }

    public function load($id) {
        $sql = "SELECT * FROM characters WHERE id = $id";
        $result = $this->db->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $this->id = $row['id'];
            $this->name = $row['name'];
            $this->description = $row['description'];
            $this->image = $row['image'];
        }
    }

    public function getAll() {
        $sql = "SELECT * FROM characters";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Getters for properties
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getImage() {
        return $this->image;
    }
}

