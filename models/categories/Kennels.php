<?php
require_once __DIR__ . '/../Products.php';

class Kennels extends Products{
    private $height;
    private $materials;

    function __construct($_name, $_poster, $_price, $categories, $_height, $_materials){
        parent::__construct($_name, $_poster, $_price, $categories);
        $this->setHeight($_height);
        $this->setMaterials($_materials);
    }

    public function setHeight($_height){
        $this->height = $_height;
    }
    public function getHeight(){
         return $this->height;
    }
    public function setMaterials($_materials){
        $this->materials = $_materials;
    }
    public function getMaterials(){
         return $this->materials;
    }
}