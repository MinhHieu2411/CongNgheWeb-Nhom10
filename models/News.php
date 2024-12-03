<?php
class News {
    private $conn;
    private $table_name = "news";

    public function __construct($db) {
        $this->conn = $db;
    }

    // Lấy tất cả bài viết
    public function getAllNews() {
        $query = "SELECT n.*, c.name AS category_name 
                  FROM " . $this->table_name . " n 
                  JOIN categories c ON n.category_id = c.id 
                  ORDER BY n.created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Thêm bài viết mới
    public function createNews($title, $content, $image, $category_id) {
        $query = "INSERT INTO " . $this->table_name . " (title, content, image, created_at, category_id) 
                  VALUES (:title, :content, :image, NOW(), :category_id)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":content", $content);
        $stmt->bindParam(":image", $image);
        $stmt->bindParam(":category_id", $category_id);

        return $stmt->execute();
    }

    // Lấy bài viết theo ID
    public function getNewsById($id) {
        $query = "SELECT n.*, c.name AS category_name 
                  FROM " . $this->table_name . " n 
                  JOIN categories c ON n.category_id = c.id 
                  WHERE n.id = :id LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
