<?php
require_once __DIR__ . '/../Products.php';

class Food extends Products{
    private $weight;
    private $taste;

    function __construct($_name, $_poster, $_price, $categories, $_weight, $_taste){
        parent::__construct($_name, $_poster, $_price, $categories);
        $this->weight = $_weight;
        $this->taste = $_taste;
    }

    public function setWeight($_weight){
        $this->weight = $_weight;
    }
    public function getWeight(){
         return $this->weight;
    }
    public function setTaste($_taste){
        $this->taste = $_taste;
    }
    public function getTaste(){
         return $this->taste;
    }
}