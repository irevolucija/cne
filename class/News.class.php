<?php

class News {
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Sve vesti
    public function index() {
        $sql = "SELECT * FROM news ORDER BY created_at DESC";
        $query = $this->conn->query($sql);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }
}