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
	background-color:#f5f5f5;
	margin: 0px 100px auto;
	}

</style>


<body><br>
<?php
//資料庫檔案
include ('mydb.php');
  
// 新增 
	$name=$_POST['name'];
	$id=$_POST['id'];
	$email=$_POST['email'];
	$content=$_POST['content'];
	$date=$_POST['date'];
    $sql="INSERT message (message_id,message_name,message_email,message_content,message_date)
        VALUES ('{$id}','{$name}','{$email}','{$content}',sysdate())";

	$result=mysql_query($sql);
	//異動會顯示異動資料
	if (mysql_affected_rows()>=1);
	echo '新增成功<br><br>';  


?>
 <a href="message.php"><button class="btn btn-large btn-primary" type=submit>回到留言</button> </a>

</body>
</html>