<?php
class News {
    private $id;
    private $title;
    private $content;
    private $image;
    private $created_at;
    private $category_id;

    private $db;
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=tintuc', 'root', '');
    }
    

    public function getById($id) {
        $stmt = $this->db->prepare('SELECT * FROM news WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public static function getAll() {
        $db = new PDO('mysql:host=localhost;dbname=tintuc', 'root', '');
        $stmt = $db->query("SELECT * FROM news");
        return $stmt->fetchAll();
    }
    
}
