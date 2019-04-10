<?php
include("class_lib.php");
include ("classtopwatch.php")
?>

<?php
//$stefan = new person("Stefan Mischook");
//echo "Tên Đầy Đủ Của Stefan là: ".$stefan->get_name()."</br>";
//$nameA = new person("Nguyễn Văn A");
//echo "Tên Đầy Đủ Của A là: ".$nameA->get_name()."</br>";
//$nameB = new person("Nguyễn Thị B");
//echo "Tên Đầy Đủ Của B là: ".$nameB->get_name();

$objectTime = new Stopwatch();
$objectTime->stop();
print_r($objectTime->getElapsedtime());

?>

