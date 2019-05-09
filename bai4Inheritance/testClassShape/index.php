<?php
/**
 * Created by PhpStorm.
 * User: VTA
 * Date: 05/08/2019
 * Time: 09:24
 */
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');

echo "Tròn".'<br>';
$objCircle = new Circle(7,"tròn");
echo "Area ".$objCircle->caculateArea(). "<br>";
echo "Perimeter ".$objCircle->caculatePrimeter()."<br>".'<br>';

echo "Trụ".'<br>';

$objCylinder = new Cylinder(12,"blue",2 );
echo "Area ".$objCylinder->caculateArea()."<br>";
echo "Perimeter ".$objCylinder->primeterVolme()."<br>".'<br>';

echo "CN".'<br>';

$objrectangle = new rectangle("Chữ nhật",4,7);
echo "Area ".$objrectangle->caculateArea()."<br>";
echo  "Perimeter ".$objrectangle->caculatePerimeter()."<br>".'<br>';

echo "Vuông".'<br>';
$objSquare = new Square("Vuông",5,6,7);
echo "Area ".$objSquare->caculateArea()."<br>";
echo "Perimeter ". $objSquare->caculatePerimeter()."<br>".'<br>';