<?php
require_once __DIR__ . '/../../config/database.php';
class ServiceRequest {
    public static function create($data) {
        global $pdo;
        $stmt = $pdo->prepare('INSERT INTO service_requests (name, email, phone, address, product_id, message) VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->execute([
            $data['name'],
            $data['email'],
            $data['phone'],
            $data['address'],
            $data['product_id'],
            $data['message']
        ]);
    }
}
