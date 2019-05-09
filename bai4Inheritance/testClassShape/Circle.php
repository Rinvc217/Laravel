<?php
/**
 * Created by PhpStorm.
 * User: VTA
 * Date: 05/08/2019
 * Time: 08:56
 */include_once ("classShape.php");

 class Circle extends shape {
     public $radius;

     public function Circle($radius, $name)
     {
         parent::shape($name);
         $this->radius = $radius;
     }

     public function caculateArea()
     {
         return pi() * pow($this->radius, 2);
     }

     public function caculatePrimeter()
     {
         return pi() * $this->radius * 2;
     }
 };