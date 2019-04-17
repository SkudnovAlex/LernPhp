<?php
namespace classes;

use classes\interfaces\IGadget;

class NotebookProduct extends Product implements IGadget
{
    public $cpu;

    public function __construct($name, $price, $cpu)
    {
        parent::__construct($name, $price);
        $this->cpu = $cpu;
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        return $out . "Процессор: " . $this->cpu . "<br>";
    }

    /**
     * @return mixed
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    public function addProduct($name, $price)
    {

    }

    public function getCase()
    {

    }
}