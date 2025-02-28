<?php
header('Content-Type: application/json');

if (
    !(isset($_GET['action']) && $_GET['action'] === "getProducts") &&
    !(isset($_POST['action']) && $_POST['action'] === "submitForm")
) {
    header('Location: http://localhost:8888/homework5.html');
    exit;
}

if (isset($_GET['action']) && $_GET['action'] == "getProducts") {
    $products = [
        ["name" => "Razor Gaming Laptop", "price" => 999.99],
        ["name" => "iPhone 16", "price" => 599.99],
        ["name" => "iPad 10th Gen", "price" => 399.99]
    ];
    echo json_encode($products);
    exit;
}

if (isset($_POST['action']) && $_POST['action'] == "submitForm") {
    $name = isset($_POST['name']) ? $_POST['name'] : 'Unknown';
    $email = isset($_POST['email']) ? $_POST['email'] : 'Unknown';

    $response = ["message" => "Thank you, $name! Your email ($email) has been recorded."];
    echo json_encode($response);
    exit;
}

echo json_encode(["error" => "Invalid request"]);
