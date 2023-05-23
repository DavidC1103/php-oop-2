<?php
require_once __DIR__ . '/../Products.php';

class Toys extends Products{
    public $color;
    public $materials;

    function __construct($_name, $_poster, $_price, $categories, $_color, $_materials){
        parent::__construct($_name, $_poster, $_price, $categories);
        $this->color = $_color;
        $this->materials = $_materials;
    }
}