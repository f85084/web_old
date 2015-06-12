<!DOCTYPE html>
<html lang=en>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>建立帳號</title>
</head>
<body>
<?php
//資料庫檔案
include ('mydb.php');
//定義存放上傳檔案的目錄
$upload_dir='./photo/'; 
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
	if (mysql_affected_rows()>=1);
	echo '新增成功<br><br>';  
?>
</body>
</html>