<?php

class Product {
    public $title ="";
    public $price ="";

    public function __construct($title, $price){
        $this->title = $title;
        $this->price = $price;
    }

    public function getInfo(){
        return "Title: " . $this->title . ", price: " . $this->price;
    }

    public function __destruct(){
        echo "<hr>";

    }

    public function __toString(){
        return "Ovo je objekat <br>";
    }
}

class Smartphone extends Product{
    public $serial ="";
    public function __construct($title, $price, $serial){
        parent::__construct($title, $price);
        $this->serial = $serial;
    }

    public function getInfo(){
        return parent::getInfo() . ",serial: " . $this->serial;
    }
}
$xiaomi = new Smartphone("Remi Note 5 plus ", 400, "KMSfhhfidhf");
echo $xiaomi->getInfo();

echo "<br>";

class Tablet extends Product{}
$samsung = new Tablet("Tab4 ", 1000);
echo $samsung->getInfo();

echo "<br>";

class Tv extends Product{}
$sony = new Tv("Bravia ", 1500);
echo $sony->getInfo();

echo "<br>";

echo $xiaomi;
echo $samsung;
echo $sony;

?>