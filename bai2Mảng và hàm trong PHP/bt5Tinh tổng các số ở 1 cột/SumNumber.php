<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>tính tổng các số trên 1 cột </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<br/>
<form  method="post">
    <input type="text" name="nhapmang" placeholder="nhập số (vd:11 22 33)" />
    <input type="text" name="cot" placeholder="cot muon tinh" />
    <input type = "submit" id = "submit" value = "tính"/>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $chuoi = $_POST["nhapmang"];
    $cot = $_POST["cot"];
    trim($chuoi);
    $arr1 = array();
    $arrtam = explode(",",$chuoi);
    $lenght = count($arrtam);
    for ($i = 0 ; $i < $lenght ; $i++)     {
        $arrtam2 = explode(" ",$arrtam[$i]);
        array_push($arr1,$arrtam2);
    }


    $sum = 0;
    foreach ($arr1 as $row => $arrtam2){
        foreach($arrtam2 as $col => $value)
        {
            echo $value." ";

        }
    } if ($col == $cot ) {
        for ($i = 0; count($value);$i++)
        {
            $sum += $value ;
        }

    }

} echo "</br>". "giá trị của cột ".$cot." la: ".$sum;
?>
</body>
</html>