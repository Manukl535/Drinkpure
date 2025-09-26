<?php
require_once __DIR__ . '/../../config/database.php';
class Product {
    public static function all() {
        global $pdo;
        $stmt = $pdo->query('SELECT * FROM products');
        return $stmt->fetchAll();
    }
}
