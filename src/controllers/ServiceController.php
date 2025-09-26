<?php
require_once __DIR__ . '/../models/ServiceRequest.php';
require_once __DIR__ . '/../views/service_form.php';

class ServiceController {
    public static function form() {
        render_service_form();
    }
}
