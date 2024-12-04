<?php

// Khởi động session
session_start();
require_once('config/config.php');
require_once (APP_ROOT.'/service/NewsService.php');
require_once APP_ROOT.'/views/home/index.php';

require_once APP_ROOT.'/views/home/header.php';
include 'models/Database.php';


// Mặc định gọi đến HomeController và action index
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Đường dẫn file controller
$controllerFile = 'controllers/' . ucfirst($controller) . 'Controller.php';

// Kiểm tra sự tồn tại của file controller
if (file_exists($controllerFile)) {
    require_once $controllerFile;

    // Đặt tên class controller
    $controllerClass = ucfirst($controller) . 'Controller';

    // Kiểm tra class controller có tồn tại hay không
    if (class_exists($controllerClass)) {
        $controllerInstance = new $controllerClass();

        // Kiểm tra action có tồn tại trong class hay không
        if (method_exists($controllerInstance, $action)) {
            $controllerInstance->$action();
        } else {
            die("Action `$action` không tồn tại trong `$controllerClass`.");
        }
    } else {
        die("Class `$controllerClass` không tồn tại.");
    }
} else {
    die("File controller `$controllerFile` không tồn tại.");
}
//echo"<pre>";
//print_r($news);
//echo"</pre>";