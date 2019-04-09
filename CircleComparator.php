<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 10/04/19
 * Time: 06:41
 */
include_once "Circle.php";
include_once "Comparable.php";

class CircleComparator implements Comparable
{
    public function compareTo($objOther)
    {
        // TODO: Implement compareTo() method.
    }

    public function compare($cricleOne, $cricleTwo)
    {
        $radiusOne = $cricleOne->getRadius();
        $radiusTwo = $cricleTwo->getRadius();

        if ($radiusOne > $radiusTwo)
        {
            return 1;
        } else if ($radiusOne < $radiusTwo)
        {
            return -1;
        } else
        {
            return 0;
        }
    }
}