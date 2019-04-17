<?php
include_once('Chicken.php');
include_once('Tiger.php');
include_once('Orange.php');
include_once('Apple.php');

$objChicken = new Chicken();
echo $objChicken->makeSound();
echo "<br/>";
$objTiger = new Tiger();
echo $objTiger->makeSound();
echo "<br/>";
$objOrange = new Orange();
echo $objOrange->howtoEat();
echo "<br/>";
$objApple = new Apple();
echo $objApple->howtoEat();
?>