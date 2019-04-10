<?php
include_once('btclassPoint.php');
include_once('btclassMoveablePoint.php');

$objPoint = new Point(4,5);
$objPoint->toString();

$objbtclassMoveablePoint = new btclassMoveablePoint(12,22,13,23);
$objbtclassMoveablePoint->toString();

$objbtclassMoveablePoint->move();
echo "<br> Sau khi thay doi <br>";
$objbtclassMoveablePoint->toString();



?>