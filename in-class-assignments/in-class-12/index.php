<?php
$request = $_SERVER['REQUEST_URI'];

if ($request == '/html') {
    header("Content-Type: text/html");
    echo "<h1>Welcome to the HTML page</h1><p> Success! You have reached the HTML response.</p>";
} elseif ($request == '/json') {
    header("Content-Type: application/json");
    echo json_encode(["message" => "This is a JSON response", "status" => "success"]);
} else {
    header("HTTP/1.0 404 Not Found");
    echo "<h1>404 Not Found</h1><p>The page you are looking for does not exist.</p>";
}
?>