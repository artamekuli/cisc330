<?php
namespace App;

class Item {
    private string $name;
    private float $price;
    private string $description;

    public function __construct(string $name, float $price, string $description) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function toJson(): string {
        return json_encode([
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description
        ]);
    }
}
