<!DOCTYPE html>
<html lang=en><head><meta charset=utf-8>
<title>新增留言</title>
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


<body><br>
<?php
//資料庫檔案
include ('mydb.php');
  
// 新增 
	$name=$_POST['name'];
	$email=$_POST['email'];
	$content=$_POST['content'];
	$date=$_POST['date'];
    $sql="INSERT message (message_name,message_email,message_content,message_date)
        VALUES ('{$name}','{$email}','{$content}',sysdate())";
echo $sql;
	//$result=mysql_query($sql);
	//異動會顯示異動資料
	if (mysql_affected_rows()>=1);
	echo '新增成功<br><br>';  


?>


</body>
</html>