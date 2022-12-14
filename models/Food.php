<?php

require_once __DIR__ . '/Product.php';

class Food extends Product
{
    public $weight;
    public $ingredients;
    public $taste;

    public function __construct($_id, $_name, $_brand, $_price, $_image, $_weight, $_ingredients, $_taste)
    {
        parent::__construct($_id, $_name, $_brand, $_price, $_image);

        $this->weight = $_weight;
        $this->ingredients = $_ingredients;
        $this->taste = $_taste;
    }
}
