<html>

<head>
    <title>Form trong PHP</title>
</head>

<body>
<?php

// Định nghĩa các biến và gán giá trị rỗng cho biến
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);
}

function test_input($data) {
    $data = trim($data);
//  Hàm trim() sẽ loại bỏ khoẳng trắng( hoặc bất kì kí tự nào được cung cấp) dư thừa ở đầu và cuối chuỗi.
    $data = stripslashes($data);
//    Hàm stripslashes() sẽ loại bỏ các dấu backslashes ( \ ) có trong chuỗi. ( \ ' sẽ trở thành ' , \\ sẽ trở thành \)
    $data = htmlspecialchars($data);
//    Hàm này chuyển các thể html trong chuỗi
// $data sang  dạng thực thể của chúng
// (html sẽ ko còn tác dụng nên bạn có thể echo ra bên ngoài).
    return $data;
}
?>

<h2 style="color: crimson">Mẫu đăng ký </h2>

<form method="post" action="../php/php_form_introduction.htm">
    <table>
        <tr>
            <td>Họ tên:</td>
            <td><input type="text" name="name"></td>
        </tr>

        <tr>
            <td>E-mail:</td>
            <td> <input type="text" name="email"></td>
        </tr>

        <tr>
            <td>Thời gian học:</td>
            <td> <input type="text" name="website"></td>
        </tr>

        <tr>
            <td>Tên lớp:</td>
            <td><textarea name="comment" rows="5" cols="40"></textarea></td>
        </tr>

        <tr>
            <td>Giới tính:</td>
            <td>
                <input type="radio" name="gender" value="female">Nữ
                <input type="radio" name="gender" value="male">Nam
            </td>
        </tr>

        <tr>
            <td>
                <input type="submit" name="submit" value="Submit" id="a1">
            </td>
        </tr>
    </table>
</form>

<?php
echo "<h2>Thông tin bạn đã cung cấp:</h2>";
echo $name;
echo "<br>";

echo $email;
echo "<br>";

echo $website;
echo "<br>";

echo $comment;
echo "<br>";

echo $gender;
?>

</body>
</html>