<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
 function checknumber($number1, $number2){
     if ($number2 % 2 ===0){


        throw new Exception("ali baba ");
     }

//     echo  gettype($number2);
     if(gettype($number2)==='string'){
         throw new Exception('number 2 đg kiểu string');
     }
     return $number1/$number2;
 }
 try {
     echo checknumber(4,www)."</n>";
     echo checknumber(4,0);
 }catch (Exception $exception){
     echo "lỗi" . $exception->getMessage();
 }
?>
</body>
</html>