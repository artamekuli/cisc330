<?php

$data = [
    'fruit' => 'Apple',
    'color' => 'Blue',
    'animal' => 'Tiger',
];

foreach ($data as $category => $item) {
    echo "$category: $item<br>";
}

function introduce(string $name, string $message = "Welcome"): string {
    return "$message, $name!";
}

echo introduce("Jasmine") . "<br>";
echo introduce("Aladdin", "Good evening") . "<br>";

?>


