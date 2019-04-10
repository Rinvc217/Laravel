<!DOCTYPE HTML>
<html>
<style type="text/css">
    .login {
        height:280px; width:430px;
        margin:0;
        padding:10px;
        border:1px #CCC solid;
    }
    .login input {
        padding:5px; margin:5px
    }
</style>
<body>
<form>
    <div class="login">
        <h2 style="color: #0c5460">Login</h2>
        <input type="text" name="username" size="30" placeholder="username" />
        <input type="password" name="password" size="30" placeholder="password" />
        <input type="submit" value="Sign in"/>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $username = $_GET["username"];
            $password = $_GET["password"];

            if ($username === "admin" && $password === "admin") {
                echo "<h2>chào mừng <span style='color:#b5b9ff'>" .$username. "</span> đến với website</h2>";
            } else{
                echo "<h2><span style='color:#ff25c5'>sai mk hoặc tk</span></h2>";
            }
        }
        ?>
    </div>
</form>
</body>
</html>