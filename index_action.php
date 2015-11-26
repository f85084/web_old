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
echo "<div class=$h10></div>";
    $sql="select * from member where id='$_SESSION[id]' and password='$_SESSION[password]'";
	$result=mysql_query($sql);
if (!$row=mysql_fetch_array($result))
{
	echo '登入失敗';
	header("location:index.php");
	die();
	}
if ($_GET[id]=='root')
{
$_SESSION['flag']='1';
header("location: manage.php");
}
?>


<style>
/*整體字型、背景*/
body{
	font-family: Arial, 微軟正黑體;
	background-color:#f5f5f5
	}
</style>
<!--<link href=/Content/BS2/bootstrap-responsive.css rel=stylesheet> -->
<!--[if lt IE 9]><script src=~/Scripts/BS2/html5shiv.js></script><![endif]-->

<body>
</body>
</html>