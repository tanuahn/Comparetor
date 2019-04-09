<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 10/04/19
 * Time: 06:29
 */
include_once "Circle.php";
include_once "Comparable.php";

class ComparableCircle extends Circle implements Comparable
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function compareTo($objOther)
    {
        $cricleOtherRasdius = $objOther->getRadius();

        if ($this->getRadius() > $cricleOtherRasdius)
        {
            return 1;
        } else if ($this->getRadius() < $cricleOtherRasdius)
        {
            return -1;
        } else
        {
            return 0;
        }
    }
}