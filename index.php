<?php

require "vendor/autoload.php";

// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
$router->match('GET|POST', '/', function() {
    require_once 'views/index.php';
});

$router->match('GET', '/api/user', function() {

    header('Content-Type: application/json');

    echo json_encode([
        'username' => 'John',
        'email' => 'john@example.com'
    ]);

});

// Run it!
$router->run();
