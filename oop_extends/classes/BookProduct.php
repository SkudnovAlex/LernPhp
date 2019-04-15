<?php


class BookProduct extends Product
{
    public $numPages;

    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        return $out . "Страниц: " . $this->numPages . "<br>";
    }

    /**
     * @return mixed
     */
    public function getNumPages()
    {
        return $this->numPages;
    }
}