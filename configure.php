<?php
//��Ʈw�]�w
$dbServer = "localhost";
$dbUser = "root";
$dbPass = "123456";
$dbName = "newuser";

//�s�u��Ʈw���A��
$conn = @mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);

if (mysqli_connect_errno($conn))
{
  die("�L�k�s�u��Ʈw���A��");
}


//�]�w�s�u���r������ UTF8 �s�X
mysqli_set_charset($conn, "utf8");
?>