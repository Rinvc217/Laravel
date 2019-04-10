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
<h2>Từ Điển Anh - Việt Đơn Giản</h2>
<form method = "POST">
    <input type="text" name="search" placeholder="Nhập từ cần tìm"/>
    <input type = "submit" id = "submit" value = "Tìm"/>
</form>
<?php
$khoitu = array(
    "hello"=>"xin chào",
    "how"=>"thế nào",
    "book"=>"quyển vở",
    "computer"=>"máy tính",
    "Bad gateway"=>"cổng xấu",
    "amount"=>"số tiền",
    "option"=>"tùy chọn");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchword = $_POST["search"];
    $flag = 0;
    foreach($khoitu as $key => $value) {
        if($key == $searchword){
            echo "Từ: " . $key . ". <br/>Nghĩa của từ: " . $value;
            echo "<br/>";
            $flag = 1;
        }
    }

    if($flag == 0){
        echo "Không tìm thấy từ cần tra.";
    }
}
?>
</body>
</html>