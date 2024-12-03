<?php
require_once APP_ROOT.'/models/news.php';

class NewsService{
  public function getAllNews() {
    $db = new PDO('mysql:host=localhost;dbname=tintuc', 'root', '');
    $stmt = $db->query('SELECT * FROM news');
    $news = [];
    while($row = $stmt->fetch()){
      $new = new News($row['id'], $row['title'], $row['content'], $row['image'], $row['created_at'], $row['category_id']);
      $news[] = $new;
    }
    return $news;
}
}