<?php
require_once __DIR__ . '/../../config/connection.php';
class Product {
    public static function all() {
        global $pdo;
        $stmt = $pdo->query('SELECT * FROM products');
        return $stmt->fetchAll();
    }
}
