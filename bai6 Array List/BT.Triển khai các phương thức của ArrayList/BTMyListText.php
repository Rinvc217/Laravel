<?php
/**
 * Created by PhpStorm.
 * User: VTA
 * Date: 04/17/2019
 * Time: 11:44
 */

include "BTMyList.php";
$listInteger = new mylist();
$listInteger->add('Hanh');
$listInteger->add('My');
$listInteger->add('Thaoo');
echo $listInteger->get(1).' vua duoc them vao DS'."<br>";
echo $listInteger->get(-1);