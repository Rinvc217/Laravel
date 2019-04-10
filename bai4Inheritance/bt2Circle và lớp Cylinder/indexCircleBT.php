<?php
include_once('classCircleBT_Cylinder.php');
$objCircle1 = new Circle1("blue",4);
$objCircle1->toString();
echo "<br/>";


$objCylinder = new Cylinder("red",3,4);

$objCylinder->toString();

//echo "ban kinh hinh tron la:" . $objCylinder->toString();
?>

