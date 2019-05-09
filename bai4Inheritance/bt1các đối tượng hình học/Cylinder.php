<?php
include_once('Circle.php');

    class Cylinder extends Circle{
    public $height;

    public function Cylinder($name, $radius, $height)
    {
        parent::Circle($name, $radius);
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
?>