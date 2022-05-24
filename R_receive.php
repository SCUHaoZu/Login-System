<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title></title>
</head>
<body>
<?php
require_once("connect.inc");


$username=$_POST["username"];
$useremail=$_POST["useremail"];
$check="SELECT * FROM user_info WHERE username='$username'";
$result=mysqli_query($link,$check);
if (mysqli_num_rows($result)==0){
    $sql="INSERT INTO user_info (username,email) VALUES ('$username','$useremail')";
    if (mysqli_query($link,$sql)){ //fatal error
        echo "註冊成功!3秒後將自動跳轉頁面<br>";
        echo "<a href='login.php'>未成功跳轉頁面請點擊此</a>";
        header("refresh:3;url=login.php");
        exit;
    }
    else{
        echo "Error creating table:".mysqli_error($link);
    }
}
else{
    echo "該名稱已被使用!<br>3秒後自動跳轉頁面<br>";
    echo "<a href='register.php'>未成功跳轉頁面請點擊此</a>";
    header('HTTP/1.0 302 Found');
    header("refresh:3;url=register.php",true);
    exit;
}

require_once("close_connect.inc");


?>
</body>
</html>