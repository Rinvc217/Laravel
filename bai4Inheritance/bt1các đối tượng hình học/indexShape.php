<?php
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');

$circle = new Circle('Circle 01', 3);
echo "Diện tích hình tròn là:" . $circle->calculateArea() . "<br/>";
echo "Chu Vi hình tròn là: " . $circle->calculatePerimeter() . "<br/>";

$cylinder = new Cylinder('Cylinder 01', 3 , 4);
echo "Diện tích hình trụ là: " . $cylinder->calculateArea() . "<br/>";
echo "Chu Vi hình trụ là: " . $cylinder->calculatePerimeter() . "<br/>";
echo "<br/>";
$rectangle = new Rectangle('Rectangle 01', 3 , 4);
echo "Rectangle area: " . $rectangle->calculateArea() . "<br/>";
echo "Rectangle perimeter: " . $rectangle->calculatePerimeter() . "<br/>";
echo "<br/>";
$square = new Square('Square 01', 4 , 4, 4);
echo "Rectangle area: " . $square->calculateArea() . "<br/>";
echo "Rectangle perimeter: " . $square->calculatePerimeter() . "<br/>";
?>