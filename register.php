<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>註冊</title>
</head>
<script>
    function validateForm(){
        var w=document.forms["register"]["username"].value;
        var x=document.forms["register"]["useremail"].value;
        var y=document.forms["register"]["remail"].value;
        if(w=="" || x=="" || y==""){
            alert("不能為空值");
            return false;
        }
        //帳號、密碼的長度限制
        if (w.length<6 || w.lenhth>20){
            alert("姓名長度不符合格式");
            return false;
        }
        if (x.length<6 || x.length>20){
            alert("信箱長度不符合格式");
            return false;
        }
        if (x!=y){
            alert("請確認信箱是否正確!");
            return false;
        }
}
</script>
<body>
<h1>註冊</h1>
<form name="register" method="post" action="R_receive.php" onsubmit="return validateForm()">
    請輸入姓名:<input type="text" name="username" size="20"><br>
    請輸入信箱:<input type="text" name="useremail" size="20"><br>
    確認信箱:<input type="text" name="reemail" size="20"><br>
    <input type="submit" value="送出">
    <input type="reset" value="重新設定">

</form>
</body>
</html>