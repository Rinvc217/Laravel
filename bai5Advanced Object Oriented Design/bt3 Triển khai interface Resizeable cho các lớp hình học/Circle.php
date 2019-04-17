<?php
/**
 * Created by PhpStorm.
 * User: VTA
 * Date: 4/12/2019
 * Time: 10:59 AM
 */
include ('classShape.php');
include ('Resizeable.php');
class Circle extends Shape implements Resizeable
{
    private $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter()
    {
        return pi() * $this->radius * 2;
    }

    public function resize($percent)
    {
        return (pi() * pow($this->radius, 2)) * $percent;
    }
}