<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 2/14/2019
 * Time: 8:43 AM
 */

include("class_lib.php");

$objName1 = new Person();

$objName1->set_first_name("Le Van");
$objName1->set_last_name("Loc");
$objName1->age = 32;
echo $objName1->get_ho_va_ten();
echo $objName1->age;
//$objName1->age = 17;
echo "<br>";
if($objName1->kiemtratuoi()) {
    echo "Ban du tuoi truy cap web nay";
} else {
    echo "ban chua du tuoi";
}

echo "<br>";

$listObj = array();
for ($i =0; $i < 3; $i++) {
    $listObj[$i] = new Person();
    $listObj[$i]->set_first_name("Thang");
    $listObj[$i]->set_last_name("Le Van");
    $listObj[$i]->age = 21;
}

echo count($listObj);
echo "<br>";
//echo $listObj[1]->get_first_name();

$listObj[1]->age = 17;

for ($i =0; $i < 3; $i++) {
    echo "<br>";
    echo $listObj[$i]->get_ho_va_ten() ." ".$listObj[$i]->age;
    echo "<br>";
    if($listObj[$i]->kiemtratuoi()) {
        echo "Ban du tuoi truy cap web nay";
    } else {
        echo "ban chua du tuoi";
    }
}

?>