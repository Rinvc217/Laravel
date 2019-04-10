<?php include("classhinhchunhat.php"); ?>
<?php
$width  = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);
?>
<?php
echo "chiều rộng là:" . $rectangle->width . "<br/>" ;
echo "chiều cao là:" . $rectangle->height ."<br/>" ;
echo "chu vi hình chữ nhật là:" .     $rectangle->getPerimeter(). "<br/>";
echo "diện tích hình chữ nhật là:" . $rectangle->getArea() ."<br/>";
echo "<br/>";
$rectangle->height = 30;
$rectangle->width = 20;
echo "chiều rộng là:" . $rectangle->height . "<br/>"; // 0utput: 30
echo "chiều cao là:" . $rectangle->width . "<br/>"; // 0utput: 20
echo "chu vi hình chữ nhật là:" .     $rectangle->getPerimeter()."<br/>"; // 0utput: 100
echo "diện tích hình chữ nhật là:" . $rectangle->getArea() ."<br/>"; //  Output: 600
echo "Hình chữ nhật của bạn:" . $rectangle->display() . "mô tả chiều cao và chiều rộng hinh ";
?>
