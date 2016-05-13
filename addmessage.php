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
<body>
<?php


 //認證管理員
  session_start();
  //資料庫檔案
include ('mydb.php');
include ('index_action.php');
 $_SESSION['id']='id';
 //$_SESSION['flag']='0';
 $_GET['message_id']=$id;
$url1 = "message.php";
/* if(isset($_POST['action']) && $_POST['action']=='add'){
} */
  
// 新增 
	$name=$_POST['name'];
	$id=$_POST['id'];
	$email=$_POST['email'];
	$content=$_POST['content'];
	$date=$_POST['date'];
    $sql="INSERT message (message_id,message_name,message_email,message_content,message_del,message_date)
        VALUES ('{$id}','{$name}','{$email}','{$content}','Y',sysdate()) ";
	$result=mysql_query($sql);
	//異動會顯示異動資料
	if (mysql_affected_rows()>=1){	
	echo "<script>
            alert('更新成功');
            window.location.href = '$url1';
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