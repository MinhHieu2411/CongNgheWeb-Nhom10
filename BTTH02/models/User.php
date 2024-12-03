<?php
class User {
    public function login($username, $password) {
        // Kết nối cơ sở dữ liệu
        $db = new PDO('mysql:host=localhost;dbname=tintuc', 'root', '');

        // Xử lý login
        $stmt = $db->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
        $stmt->execute(['username' => $username, 'password' => $password]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
