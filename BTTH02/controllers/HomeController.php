<?php
require_once APP_ROOT.'/service/NewsService.php';
class HomeController {
    public function index() {
            
        $newService = new NewsService();
        $news = $newService->getAllNews();
        
        include APP_ROOT.'/views/home/index.php';
    }
}
