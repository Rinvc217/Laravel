<?php
include_once ('classCircle.php');
include_once('Cylinder.php');

$objCircle = new Circle1("blue",6);
$objCircle->toString();
echo "<br/>";

$objCylinder = new Cylinder("Xanh",5,7);
$objCylinder->toString1();

//echo "ban kinh hinh tron la:" . $objCylinder->toString();
?>

