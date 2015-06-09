<?
include ('mydb.php');

    $sql="select * from member where id='$_GET[id]' and password='$_GET[password]'";
	$result=mysql_query($sql);
if (!mysql_fetch_array($result))
{
	echo 'MISS';
	echo "<a href=index.php>回首頁</a>";
	die();
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
</body>
</html>