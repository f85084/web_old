<?php
//��Ʈw�]�w
$dbServer = "localhost";
$dbUser = "root";
$dbPass = "123456";
$dbName = "ch09";

//�s�u��Ʈw���A��
$conn = @mysql_connect($dbServer, $dbUser, $dbPass);

if (@mysql_connect($conn))
{
  die("�L�k�s�u��Ʈw���A��</BR>");
}
else 
{
}
//�s�u��Ʈw
if (!@mysql_select_db($dbName))
{
  die("�L�k�s�u��Ʈw");
}
else 
{
}
//�]�w�s�u���r������ UTF8 �s�X
mysql_query("SET NAMES  utf8");
?>