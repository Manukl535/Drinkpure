<?php
// src/routes.php
require_once __DIR__ . '/controllers/ProductController.php';
require_once __DIR__ . '/controllers/ServiceController.php';
require_once __DIR__ . '/controllers/PageController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/Drinkpure/public/' :
    case '/Drinkpure/public/index.php' :
        PageController::home();
        break;
    case '/Drinkpure/public/products' :
        ProductController::list();
        break;
    case '/Drinkpure/public/service-request' :
        ServiceController::form();
        break;
    case '/Drinkpure/public/contact' :
        PageController::contact();
        break;
    default:
        http_response_code(404);
        echo '404 Not Found';
        break;
}
