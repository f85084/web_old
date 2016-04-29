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

	}

</style>


<body><br>
<?php
 //認證管理員
  session_start();
 $_SESSION['id']='id';
if($_SESSION['flag']=='0')
{
	}
else
	{
    echo'你不是root';
	echo '<a href="login.php"><button class="btn btn-large btn-primary" type=submit>登出</button> </a>';
	die();
	}

//資料庫檔案
include ('mydb.php');
  
// 新增 
	$name=$_POST['name'];
	$id=$_POST['id'];
	$email=$_POST['email'];
	$content=$_POST['content'];
	$date=$_POST['date'];
    $sql="INSERT message (message_id,message_name,message_email,message_content,message_date)
        VALUES ('{$id}','{$name}','{$email}','{$content}',sysdate())  ";
	$result=mysql_query($sql);
	//異動會顯示異動資料
	if (mysql_affected_rows()>=1){	
	echo "<script>
            alert('更新成功');
            history.go(-1);
        </script>";
         }
	else{ 
	echo "<script>
            alert('更新失敗');
            history.go(-1);
        </script>";
	}
?>
</body>
</html>