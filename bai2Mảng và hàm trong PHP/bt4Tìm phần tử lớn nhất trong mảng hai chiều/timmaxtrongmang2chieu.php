<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tìm phần tử lớn nhất trong mảng hai chiều</title>
</head>
<body>
<?php
$arrayNumber = array(
    array(2,100,987,8,7),
    array(5,6,7,9,100));
$max = $arrayNumber [0][0];
$col = null;
$row = null;
for ($i = 0 ; $i < 2 ; $i++){
    for ($j=0; $j < count($arrayNumber[$i]); $j++) {
        if ($max < $arrayNumber[$i][$j]){
            $max = $arrayNumber[$i][$j];
            $col = $i;
            $row = $j;
        }
    }
}
echo " phần tử lớn nhất mảng hai chiều là :" . $max ;
echo "index là: [" . $col."]" . "[". $row."]";
?>
</body>
</html>