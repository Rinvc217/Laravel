<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Product Discount Calculator</h1>
<form action="show" method="post">
    @csrf
  <fieldset>
      Product Description:<input type= "text" size="50" name="giatri1"/><br/>
      List Price : <input type="text" size="50" name="giatri2"/><br/>
      Discount Percent: <input type="text" size="50" name="giatri3">
       <button type="submit">Tính Chiết Khấu</button>
  </fieldset>
</form>
</body>
</html>