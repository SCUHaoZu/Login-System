<?php
$link=@mysqli_connect(
    "localhost:3300",
    "root",
    "blacklair085");
mysqli_query($link,'SET NAMES utf8');
$dbname="user_data";
if (!mysqli_select_db($link,$dbname)){
    die("資料庫: $dbname 連線失敗!".mysqli_connect_error());
}
else{
    return $link;
}
?>