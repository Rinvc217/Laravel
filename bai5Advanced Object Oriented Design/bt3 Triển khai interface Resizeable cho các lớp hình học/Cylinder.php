<?php
/**
 * Created by PhpStorm.
 * User: VTA
 * Date: 4/12/2019
 * Time: 11:02 AM
 */
include_once ('Circle.php');
class Cylinder extends Circle {
    public $height;
    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }
    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }
    public function calculateVolume(){
        return parent::calculateArea() * $this->height;
    }
}