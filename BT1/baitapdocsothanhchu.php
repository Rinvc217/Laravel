<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }
        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>Đọc Số Đơn Giản</h2>
<form method = "POST">
    <input type="text" name="number" placeholder="Nhập số cần tìm"/>
    <input type = "submit" id = "submit" value = "Tìm"/>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $number = $_POST["number"];
    if ($number>0 && $number<10){
        switch ($number){
            case 1:
                echo "một";
                break;
            case 2:
                echo "hai";
                break;
            case 3:
                echo "ba";
                break;
            case 4:
                echo "bốn";
                break;
            case 5:
                echo "năm";
                break;
            case 6:
                echo "sáu";
                break;
            case 7:
                echo "bảy";
                break;
            case 8:
                echo "tám";
                break;
            case 9:
                echo "chín";
                break;
        }
    }

    if ($number>9 && $number<20){
        $number = $number - 10;
        switch ($number){
            case 0:
                echo "mười";
                break;
            case 1:
                echo "mười một";
                break;
            case 2:
                echo "mười hai";
                break;
            case 3:
                echo "mười ba";
                break;
            case 4:
                echo "mười bốn";
                break;
            case 5:
                echo "mười lăm";
                break;
            case 6:
                echo "mười sáu";
                break;
            case 7:
                echo "mười bảy";
                break;
            case 8:
                echo "mười tám";
                break;
            case 9:
                echo "mười chín";
                break;
            case 10:
                echo "hai mươi";
                break;
        }
    }
    }
?>
