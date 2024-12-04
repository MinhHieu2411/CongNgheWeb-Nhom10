<?php
class AdminController {
    public function login() {
        require_once APP_ROOT.'/views/admin/login.php';
    }

    public function dashboard() {
        require_once 'views/admin/dashboard.php';
    }
}
