<?php
require_once __DIR__ . '/../views/home.php';
require_once __DIR__ . '/../views/contact.php';

class PageController {
    public static function home() {
        render_home();
    }
    public static function contact() {
        render_contact();
    }
}
