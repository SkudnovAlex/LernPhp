<?php

abstract class Product
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * @return mixed
     */
    public function getNumPages()
    {
        return $this->numPages;
    }

    public function getProduct()
    {
        $res = "<hr><b>О товаре</b><br>";
        $res .= "Наименование: " . $this->name . "<br>";
        $res .= "Цена: " . $this->price . "<br>";
        return $res;
    }

    abstract protected function addProduct($name, $price);
}