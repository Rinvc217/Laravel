<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<br/>
<form  method="post">
    <input type="text" name="nhapmang" placeholder="VD:1 2 3 4" />
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

    echo "mang ban đầu là ".$array . "<br>";
    for ($i = 0 ; $i < $lenght-1 ; $i++){
        if ($array1[$i] === $xoa) {
                $array1[$i] = $array1[$i+1];
            echo "phan tu can xoa co trong mang là ".$xoa."<br/>";
            echo "có idex là :".$i.'<br>';
            foreach ($array1 as $chiso => $value){
//               echo $value." ";

            }
        }
    }
      echo " sau khi xoa la và được thay thế là: ". "<br/>";
    foreach ($array1 as $chiso => $value){
        echo $value." ";
    }
}
?>
</body>
</html>