
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
	$id=$_POST['id'];
	$password=$_POST['password'];
	$name=$_POST['name'];
	$tel=$_POST['tel'];
	$address=$_POST['address'];
	$file=$_FILES['gif']['name'];
	$memberdate=$_POST['memberdate'];
    $sql="INSERT message (id,password,name,tel,address,gif,memberdate)
        VALUES ('{$id}','{$password}','{$name}','{$tel}','{$address}','{$file}',sysdate())";

	$result=mysql_query($sql);
	//異動會顯示異動資料
	if (mysql_affected_rows()>=1);
	echo '新增成功<br><br>';  


?>


</body>
</html>