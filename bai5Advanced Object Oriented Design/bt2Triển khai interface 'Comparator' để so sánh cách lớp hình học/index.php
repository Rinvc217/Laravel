<?php
include_once('CircleComparator.php');
$circleOne = new Circle("circleOne", 18);
$circleTwo = new Circle("circleTwo", 18);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circleOne, $circleTwo))
?>