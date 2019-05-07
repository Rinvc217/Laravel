<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">
    <input type="file" name="avatar"/>
    <input type="submit" name="uploadclick" value="Upload"/>
</form>
<?php // Xử Lý Upload

// Nếu người dùng click Upload
if (isset($_POST['uploadclick']))
{
    // Nếu người dùng có chọn file để upload
    if (isset($_FILES['avatar']))
    {
        // Nếu file upload không bị lỗi,
        // Tức là thuộc tính error > 0
        if ($_FILES['avatar']['error'] > 0)
        {
            echo 'File Upload Bị Lỗi';
        }
        else{
            // Hàm move_uploaded_file() sẽ kiểm tra để đảm bảo rằng file truyền vào là một file upload hợp lệ
            //( nghĩa là file đã được upload bởi phương thức PHP's HTTP POST).
            // Nếu file hợp lệ nó sẽ được di chuyển đến thư mục đã truyền vào.
            move_uploaded_file($_FILES['avatar']['tmp_name'], './folder/'.$_FILES['avatar']['name']);
            //Cú pháp: move_uploaded_file( $filename, $destination);
            //Trong đó:
            //$filename là tên file upload.
            //$destination là thư mục mà file sẽ được chuyển đến.
            echo 'File Uploaded';
        }
    }
    else{
        echo 'Bạn chưa chọn file upload';
    }
}
?>
</body>
</html>