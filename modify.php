<!DOCTYPE html>
<html lang=en><head><meta charset=utf-8>
<head>
<title>登入</title>
</head>
<?
include ('mydb.php');
session_start();
$s="update member set 
name='{$_POST['name']}',
id='{$_POST['id']}',
tel='{$_POST['tel']}',
address='{$_POST['address']}'
where number=$_SESSION[number] ";
$result=mysql_query($s);
echo $s;
if (mysql_affected_rows()>0)
echo '更新成功<br>';
else echo '更新失敗<br>';
header("location:message.php");

?>
