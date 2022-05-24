<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>登入</title>
</head>
    <script>
        function validateForm(){
            var x=document.forms["login"]["username"].value;
            var y=document.forms["login"]["email"].value;
                if (x=="" || y==""){
                    alert("不能為空值!");
                    return false;
                }
        }
    </script>
    <?php
    //確認登入狀態
    session_start();
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: welcome.php");
        exit;
    }
    ?>

<body>
<h1>登入</h1>

<form name="login" method="post" action="L_receive.php" onsubmit="return validateForm()">
    請輸入名字:<input type="text" name="username" size="20"><br>
    請輸入信箱:<input type="text" name="email" size="20"><br>
    <input type="submit" value="login"><br>
    <a href="register.php">註冊請點此</a>

</form>


</body>
</html>