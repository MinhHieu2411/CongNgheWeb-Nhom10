<?php
class Category {
    public function getAll() {
        $db = new PDO('mysql:host=localhost;dbname=tintuc', 'root', '');
        $stmt = $db->query('SELECT * FROM categories');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
