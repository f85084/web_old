<?
include ('mydb.php');

    $sql="select * from member where id='$_GET[id]' and password='$_GET[password]'";
	$result=mysql_query($sql);
if (!$row=mysql_fetch_array($result))
{
	echo 'MISS';
	echo "<a href=index.php>回首頁</a>";
	die();
}
?>
<!DOCTYPE html>
<html lang=en><head><meta charset=utf-8>
<title>留言</title>
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
<!--<link href=/Content/BS2/bootstrap-responsive.css rel=stylesheet> -->
<!--[if lt IE 9]><script src=~/Scripts/BS2/html5shiv.js></script><![endif]-->
<body>
<body><br>
<?php
//資料庫檔案
include ('mydb.php');
  
// 新增 
	$no=$_POST['no'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$content=$_POST['content'];
	$date=$_POST['date'];
    $sql="INSERT message (message_no,message_name,message_email,message_content,message_date)
        VALUES ('{$no}','{$name}','{$email}','{$content}',sysdate())";
echo $sql;
	//$result=mysql_query($sql);
	//異動會顯示異動資料
	//if (mysql_affected_rows()>=1);
	//echo '新增成功<br><br>';  


?>


</body>
</html>