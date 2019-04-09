<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 10/04/19
 * Time: 06:26
 */

class Circle
{
    public $radius;
    public $name;

    public function __construct($name, $radius)
    {
        $this->name = $name;
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
}