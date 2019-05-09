<?php
include_once('classPoint.php');
include_once('classMoveablePoint.php');

echo "<br>";
$objPoint = new Point(4,5);
$objPoint->toString();
echo "<br>";
$objMoveablePoint = new MoveablePoint(12,22,13,23);
$objMoveablePoint->toString();
echo "<br>";
$objMoveablePoint->move();
echo "<br> Sau khi thay doi <br>";
$objMoveablePoint->toString();

?>