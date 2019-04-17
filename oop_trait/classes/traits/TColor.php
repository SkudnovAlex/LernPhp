<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 17.04.2019
 * Time: 21:23
 */

namespace classes\traits;


trait TColor
{
    private $color;

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

}