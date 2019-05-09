<?php
/**
 * Created by PhpStorm.
 * User: VTA
 * Date: 05/08/2019
 * Time: 09:03
 */
include_once ('Circle.php');

class Cylinder extends Circle {

    public $height;

    public function Cylinder($height, $name, $radius){

        parent::Circle($radius,$name);
        $this->height = $height;

    }
    public function caculateArea()
    {
        return parent::caculateArea()*2 + parent::caculatePrimeter() *$this->height; // TODO: Thay đổi sơ khai tự động
    }

    public function primeterVolme(){
        return parent::caculateArea() * $this->height;
    }
}