<!DOCTYPE html>
<html lang=en><head><meta charset=utf-8>
<head>
<title>登入</title>
</head>
<?
include ('mydb.php');
session_start();
$s="update message set 
message_email='{$_POST['message_email']}',
message_content='{$_POST['message_content']}'
where message_no=$_SESSION[message_no] ";
$result=mysql_query($s);
echo $s;
if (mysql_affected_rows()>0)
echo '更新成功<br>';
else echo '更新失敗<br>';
header("location:message.php");

?>
