<?php
require_once __DIR__ . '/../Products.php';

class Kennels extends Products{
    public $height;
    public $materials;

    function __construct($_name, $_poster, $_price, $categories, $_height, $_materials){
        parent::__construct($_name, $_poster, $_price, $categories);
        $this->height = $_height;
        $this->materials = $_materials;
    }
}