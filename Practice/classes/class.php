<?php

class Product
{
    private $name;
    private $description;
    private $price;


    public function __construct($name, $description, $price)
    {
        $this->price = $price;
        $this->description = $description;
        $this->name = $name;

    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = ucfirst($name);
    }


    public function getDescription()
    {
        return $this->description;
    }


    public function setDescription($description)
    {
        $this->description = $description;
    }


    public function getPrice()
    {
        return $this->price;
    }


    public function setPrice($price)
    {
        $this->price = $price;
    }

}

class Phone extends Product
{

    public function __construct($name, $description, $price)
    {
        parent::__construct($name, $description, $price);
    }

    public function getName()
    {
        parent::getName();
        echo "This is different";
    }

}


$product1 = new Product('iPhone 12', 'This is a great iPhone', 799.99);
$product2 = new Product('iPhone 12', 'This is a great iPhone', 799.99);
$iPhone = new Phone('iPhone', 'yes', 9);
$iPhone->getName();
