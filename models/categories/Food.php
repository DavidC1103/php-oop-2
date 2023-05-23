<?php
require_once __DIR__ . '/../Products.php';

class Food extends Products{
    public $weight;
    public $taste;

    function __construct($_name, $_poster, $_price, $categories, $_weight, $_taste){
        parent::__construct($_name, $_poster, $_price, $categories);
        $this->weight = $_weight;
        $this->taste = $_taste;
    }
}