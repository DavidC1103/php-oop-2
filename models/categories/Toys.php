<?php
require_once __DIR__ . '/../Products.php';

class Toys extends Products{
    private $color;
    private $materials;

    function __construct($_name, $_poster, $_price, $categories, $_color, $_materials){
        parent::__construct($_name, $_poster, $_price, $categories);
        $this->color = $_color;
        $this->materials = $_materials;
    }

    public function setColor($_color){
        $this->color = $_color;
    }
    public function getColor(){
         return $this->color;
    }
    public function setMaterials($_materials){
        $this->materials = $_materials;
    }
    public function getMaterials(){
         return $this->materials;
    }
}