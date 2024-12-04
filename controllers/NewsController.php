<?php
require_once 'models/News.php';

class NewsController {
    public function detail() {
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

        $newsModel = new News();
        $news = $newsModel->getById($id);

        require_once APP_ROOT.'/views/news/detail.php';
    }
}
