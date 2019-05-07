<?php
/**
 * Created by PhpStorm.
 * User: VTA
 * Date: 4/12/2019
 * Time: 11:08 AM
 */

include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');

$percent = mt_rand(0,40);
echo 'kích thước vừa được tăng là:'.$percent;
echo '<br />'.'<br />'.'<br />';
$circle = new Circle('Circle 01', 5);
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';
echo 'Hình tròn sau khi thay đổi kích thước thành '.' '. $percent .' '. 'là :' . $circle->resize($percent) .'%'. '<br />';
echo '<br />'.'<br />';
$cylinder = new Cylinder('Cylinder 01', 5 , 2);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';
echo 'Hình trụ sau khi thay đổi kích thước thành'.' '. $percent .' '. 'là :' . $cylinder->resize($percent) .'%'. '<br />';
echo '<br />';'<br />';'<br />';
echo '<br />';'<br />';'<br />';
$rectangle = new Rectangle('Rectangle 01', 6 , 7);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';
echo 'Hình chử nhật sau khi thay đổi kích thước thành'.' '. $percent .' '. 'là :' . $rectangle->resize($percent) .'%'. '<br />';
echo '<br />';'<br />';'<br />';
echo '<br />';'<br />';'<br />';
$square = new Square('Square 01', 5 , 5, 5);
echo 'Square area: ' . $square->calculateArea() . '<br />';
echo 'Square perimeter: ' . $square->calculatePerimeter() . '<br />';
echo 'Hình sau khi thay đổi kích thước thành'.' '. $percent .' '. 'là :' . $square->resize($percent) .'%'. '<br />';








