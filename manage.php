<!DOCTYPE html>
<html lang=en><head><meta charset=utf-8>
<title>管理介面</title>
<meta name=viewport content="width=device-width, initial-scale=1.0">
<meta name=description content=""><meta name=author content="">
<link href=http://f85084.github.io/css.css  rel=stylesheet>
<style>
/*整體字型、背景*/
body{
	font-family: Arial, 微軟正黑體;
	background-color:#f5f5f5
	}

</style>

<body>
<?
session_start();
$_SESSION['flag']='0';
?>
<a href=management.php>管理會員資料<a>

<a href=message_management_own.php>管裡留言資料<a>
</body>
</html>