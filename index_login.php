<!DOCTYPE html>
<html lang=en><head><meta charset=utf-8>
<title>留言</title>
<meta name=viewport content="width=device-width, initial-scale=1.0">
<meta name=description content=""><meta name=author content="">
<link href=http://f85084.github.io/css.css  rel=stylesheet>

<?
include ('mydb.php');
session_start();
if($_GET[id])
{
$_SESSION['id']=$_GET[id];
$_SESSION['password']=$_GET[password];
}
$h10="h10";
echo "<div class=$h10>";
    $sql="select * from member where id='$_SESSION[id]' and password='$_SESSION[password]'";
	$result=mysql_query($sql);
if (!$row=mysql_fetch_array($result))
{
	echo '登入失敗';
	echo "<a href=index.php>回首頁</a>";
	die();
}
if ($_GET[id]=='root')
{

$_SESSION['flag']='1';
header("location: index.php");
}
?>

</body>
</html>