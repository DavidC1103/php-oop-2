<?php

require_once __DIR__ . '/categories/Food.php';
require_once __DIR__ . '/categories/Kennels.php';
require_once __DIR__ . '/categories/Toys.php';

class Products{
    public $name;
    public $poster;
    public $price;
    public $categories;

    function __construct($_name, $_poster, $_price, $_categories ){
        $this->setName($_name);
        $this->setPrice($_price);
        $this->setPoster($_poster);
        $this->setCategories($_categories);
    }

    public function setName($_name){
        $this->name = $_name;
    }
    public function getName(){
        return $this->name;
    }


    public function setPrice($_price){
        $this->price = $_price;
    }
    public function getPrice(){
        return $this->price;
    }


    public function setPoster($_poster){
        $this->poster = $_poster;
    }
    public function getPoster(){
        return$this->poster;
    }


    public function setCategories($_categories){
        $this->categories = $_categories;
    }
    public function getCategories(){
        return $this->categories;
    }

};
