<!DOCTYPE html>
<html lang=en><head><meta charset=utf-8>
<title>建立帳號</title>
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
//資料庫檔案
include ('mydb.php');

//檢查帳號是否重複
    $sql="select * from member where id='$_POST[id]'";
	$result=mysql_query($sql);
if ($row=mysql_fetch_array($result))
{	echo "<script>
            alert('帳號已有人使用');
            history.go(-1);
        </script>";
	die();
}
//定義存放上傳檔案的目錄
$upload_dir='./photo/personal/'; 
//如果錯誤代碼為 UPLOAD_ERR_OK, 表示上傳成功
if($_FILES['gif']['error'] == UPLOAD_ERR_OK ) {
  $fname = iconv('UTF-8', 'big5', 
                 $_FILES['gif']['name']);
  //將暫存檔搬移到上傳目錄, 並且改回原始檔名
  if(move_uploaded_file($_FILES['gif']['tmp_name'],
                        $upload_dir . $fname)){  
    //顯示上傳檔案的相關訊息
    echo '上傳成功...';
  }
}
else
  echo "上傳失敗";
  
// 新增 
	$id=$_POST['id'];
	$password=$_POST['password'];
	$name=$_POST['name'];
	$tel=$_POST['tel'];
	$address=$_POST['address'];
	$file=$_FILES['gif']['name'];
	$memberdate=$_POST['memberdate'];
    $sql="INSERT member (id,password,name,tel,address,gif,memberdate)
        VALUES ('{$id}','{$password}','{$name}','{$tel}','{$address}','{$file}',sysdate())";

	$result=mysql_query($sql);
	//異動會顯示異動資料
	if (mysql_affected_rows()>=1){
	echo "<script>
            alert('更新成功');
            location.href = 'index.php';
        </script>";
         }
	else{ 
	echo "<script>
            alert('更新失敗');
            location.href = 'index.php';
        </script>";
	}
?>


</body>
</html>