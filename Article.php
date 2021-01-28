<?php


class Article
{

    private $id;
    private $name;
    private $description;
    private $price;
    private $weight;
    private $stock;
    private $image;
    private $available;

    public function  __construct($id, $name, $description, $price, $weight, $stock, $image, $available)
    {
        $this->id=$id;
        $this->name=$name;
        $this->description=$description;
        $this->price= $price;
        $this->weight= $weight;
        $this->stock= $stock;
        $this->image= $image;
        $this->available= $available;
    }

    public function getId()
    {
        return $this->id;
    }

        public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getAvailable()
    {
        return $this->available;
    }
}