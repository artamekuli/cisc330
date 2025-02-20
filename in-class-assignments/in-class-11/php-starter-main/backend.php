<?php

// Tryna debug
error_reporting(E_ALL);
ini_set('display_errors', 1);

//Message Display in Console
$data = [
    "status" => "success",
    "message" => "Data fetched successfully from MAMP",
    "items" => ["item1", "item2", "item3"]
];

// Output JSON response
echo json_encode($data);
?>
