<?php
require_once __DIR__ . '/../models/Product.php';
require_once __DIR__ . '/../views/products.php';

class ProductController {
    public static function list() {
        $products = Product::all();
        render_products($products);
    }
}
