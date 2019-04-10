<?php
include_once('classPoint2D.php');
include_once ('classPoint3D.php');
$objPoint2D = new Point2D(2,3);
$objPoint2D->toString();

$objPoint3D = new Point3D(5,6,7);
$objPoint3D->toString();
?>