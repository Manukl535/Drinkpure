<?php
function render_products($products) {
    echo '<h2>Our Products</h2>';
    echo '<div class="products">';
    foreach ($products as $product) {
        // Choose image based on product name (simple demo logic)
        $img = "domestic_ro.png";
        if (stripos($product['name'], 'industrial') !== false) {
            $img = "industrial_ro.png";
        } elseif (stripos($product['name'], 'commercial') !== false) {
            $img = "commercial_ro.png";
        }
        echo '<div class="product-card">';
    $alt = htmlspecialchars($product['name']) . ' RO Water Purifier in Bengaluru, Bangalore, Karnataka';
    echo '<img src="/Drinkpure/public/images/' . $img . '" alt="' . $alt . '" loading="lazy">';
        echo '<h3>' . htmlspecialchars($product['name']) . '</h3>';
        echo '<p>' . htmlspecialchars($product['description']) . '</p>';
    echo '<div class="price">&#8377; ' . htmlspecialchars($product['price']) . '</div>';
        echo '</div>';
    }
    echo '</div>';
}
