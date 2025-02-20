<?php
header('Content-Type: application/json');

// Debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Sample response data
$response = [
    "user1" => ["name" => "John"],
    "user2" => ["name" => "Jane"],
    "user3" => ["name" => "Bob"]
];

echo json_encode($response);
?>
