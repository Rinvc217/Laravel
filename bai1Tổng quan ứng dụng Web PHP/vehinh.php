<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Page Title</title>
</head>
<body>

<p id="demo"></p>
<p id="demo1"></p>
<p id="demo2"></p>
<script>

     var text = "";
    for ( let i=1; i<=4; i++){
        text += "\n";
    for (let j =1; j <= 10; j++){
        text += " " + "*"  ;
    }
    }
    document.getElementById("demo").innerText = "hình chữ nhật" + text;

     var text1 = "";
     for ( let a=1; a <= 6; a++){
         text1 += "\n";
         for (let b = 1; b <= a; b++){
             text1 += " " + "*"  ;
         }
     }
     document.getElementById("demo1").innerText = "hình tam giác góc vuông ở botton-left" + text1;

     var text2 = "";
     for ( let c = 1; c <= 6; c++){
         text2 += "\n";
         for (let d = 1; d <= c; d++){
             text2 += " " + "*"  ;
         }
     }
     document.getElementById("demo2").innerText = "hình tam giác góc vuông ở top-left" + text2;
</script>
</body>
</html>