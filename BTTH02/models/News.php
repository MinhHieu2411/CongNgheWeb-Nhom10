<?php
class News {
    private $id;
    private $title;
    private $content;
    private $image;
    private $created_at;
    private $category_id;

    public function __construct($id, $title, $content, $image, $created_at, $category_id) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->image = $image;
        $this->created_at = $created_at;
        $this->category_id = $category_id;
    }

    public function getById($id) {
        $db = new PDO('mysql:host=localhost;dbname=tintuc', 'root', '');
        $stmt = $db->prepare('SELECT * FROM news WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
