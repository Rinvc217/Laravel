<?php
include ("classtopwatch.php")
?>

<?php
$objectTime = new Stopwatch();
$objectTime->stop();
echo "thời gian milisecond giây là:" . $objectTime->getElapsedtime();
?>
<?php
//$object_startTieme = new Stopwatch();
//$object_startTieme->get_startTime();
//echo "thời gian hiện tại là:" . $object_startTieme() . ->get_startTime();
//?>
