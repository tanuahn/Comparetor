<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 10/04/19
 * Time: 06:34
 */
//include_once "ComparableCircle.php";
//
//$cricleOne = new ComparableCircle("cricleOne", "8");
//$cricleTwo = new ComparableCircle("cricleTwo", "2");
//
//var_dump($cricleOne->compareTo($cricleTwo));

include_once "CircleComparator.php";

$cricleOne = new Circle("cricleOne", "6");
$cricleTwo = new Circle("cricleOne" , "4");
$cricleComparetor = new CircleComparator();
var_dump($cricleComparetor->compare($cricleOne, $cricleTwo));