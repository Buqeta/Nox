<?php

class Product{

    private $productId;
    private $productName;
    private $productBrand;
    private $dateOfProduction;
    private $price;
    private $picture;
    private $color;
    private $productCategory;

    public function __construct($id, $name, $brand, $date, $price, $pic, $color, $cat){
        $this->productId = $id;
        $this->productName = $name;
        $this->productBrand = $brand;
        $this->dateOfProduction = $date;
        $this->price = $price;
        $this->picture = $pic;
        $this->color = $color;
        $this->productCategory = $cat;
    }

    public function getId(){
        return $this->productId;
    }

    public function getName(){
        return $this->productName;
    }

    public function getBrand(){
        return $this->productBrand;
    }

    public function getDate(){
        return $this->dateOfProduction;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getPicture(){
        return $this->picture;
    }

    public function getColor(){
        return $this->color;
    }

    public function getCategory(){
        return $this->productCategory;
    }

    public function printProduct(){
        echo "ID: " .$this->productId. "<br>Name: " .$this->productName.
        "<br>Brand: " .$this->productBrand. "<br>Date: " .$this->dateOfProduction. 
        "<br>Price: " .$this->price. "<br>Picture: " .$this->picture. "<br>Color: " .$this->color. 
        "<br>Category: " .$this->productCategory. "<br><br>";
    }
}