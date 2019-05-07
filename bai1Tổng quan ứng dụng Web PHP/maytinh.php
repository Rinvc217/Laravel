<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <style>
        input[type=text] {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
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
<br/>
<form  method="post">
    <input type="text" name="bieuthuc1" placeholder="B.thức1"/>
    <select name="pheptinh">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="bieuthuc2" placeholder="B.thức2" /><br>
    <input type = "submit" id = "submit" value = "tính"/><br>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bieuthuc1 = $_POST["bieuthuc1"];
    $bieuthuc2 = $_POST["bieuthuc2"];
    $pheptinh = $_POST["pheptinh"];
}
$result = 0;
switch ($pheptinh) {
    case "+" :
        $result = $bieuthuc1 + $bieuthuc2;
        break;
    case "-" :
        $result = $bieuthuc1 - $bieuthuc2;
        break;
    case "*" :
        $result = $bieuthuc1 * $bieuthuc2;
        break;
    case "/" :
        $result = $bieuthuc1 / $bieuthuc2;
        break;
}

echo $result;
?>
</body>
</html>