<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <title>text xóa fan tu</title>-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--</head>-->
<!--<body>-->
<!--<br/>-->
<!--<form  method="post">-->
<!--    <input type="text" name="nhapmang" placeholder="VD:1 2 3 4" />-->
<!--    <input type="text" name="xoa" placeholder="phan tu can xoa" />-->
<!--    <input type = "submit" id = "submit" value = "tính"/>-->
<!--</form>-->
<?php
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    $array = $_POST["nhapmang"];
//    $xoa = $_POST['xoa'];
//    trim($array);
//    $array1 = str_split($array);
//    $lenght = count($array1);
//
//    echo "mang ban đầu là ". $array1 . "<br>";
//    for ($i = 0 ; $i < $lenght ; $i++){
//        if ($array1[$i] === $xoa) {
//
//            echo "phan tu can xoa co trong mang là ".$xoa."<br/>";
//            echo "có idex là :".$i.'<br>';
//            $array1[$i] = $array1[$i+1];
//        }
//    }
//      echo " sau khi xoa la và được thay thế là: ". "<br/>";
//    foreach ($array1 as $chiso => $value){
//        echo $value." ";
//    }
//}
//?>
<!--</body>-->
<!--</html>-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test Xóa Phần Tử khỏi mảng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<br/>
<form  method="post">
    <input type="text" name="nhapmang" placeholder="VD:12345" />
    <input type="text" name="xoa" placeholder="phan tu can xoa" />
    <input type = "submit" id = "submit" value = "tính"/>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array = $_POST["nhapmang"];
    $xoa = $_POST['xoa'];
    trim($array);
    $array1 = str_split($array);
    $lenght = count($array1);

    $index = -1;
    for ($i = 0 ; $i < $lenght ; $i++){
        if ($array1[$i] === $xoa) {
            $index = $i;
        }
    }

//    echo $index;

    if($index < $lenght - 1) {
        $array1[$index] = $array1[$index+1];
    }

    foreach ($array1 as $chiso => $value){
        echo $value." ";
    }

}

?>
</body>
</html>