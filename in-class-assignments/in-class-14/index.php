<?php
require_once 'Item.php';

use App\Item;

$item = new Item("Example Product", 19.99, "This is a sample product description.");
$data = $item->toJson();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In Class #14: Namespaces</title>
</head>
<body>
<h1>Item Information</h1>
<pre><?php echo htmlspecialchars($data); ?></pre>
</body>
</html>
