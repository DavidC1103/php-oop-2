<?php

require_once __DIR__ . '/categories/Food.php';
require_once __DIR__ . '/categories/Kennels.php';
require_once __DIR__ . '/categories/Toys.php';

class products{
    public $name;
    public $poster;
    public $price;
    public $categories;

    public function __construct($_name, $_poster, $_price, $_categories ){
        $this->name = $_name;
        $this->poster = $_poster;
        $this->price = $_price;
        $this->categories = $_categories;
    }
}