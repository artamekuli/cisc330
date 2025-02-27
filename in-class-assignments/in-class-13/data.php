<?php
header('Content-Type: application/json');

$response = ["message" => "Success! Hello from PHP Backend!"];
echo json_encode($response);
?>