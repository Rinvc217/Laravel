<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Trả kết quả tiếng anh</h1>
<form action="tudien" method="post">
    @csrf
    <h1>Từ tiếng anh sau khi dịch : {{$value}}</h1>
</form>
</body>
</html>