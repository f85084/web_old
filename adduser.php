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


//上傳
$upload_dir='./upload/';
//上傳檔案 並改名稱
if(@$_FILES['file']['error']==UPLOAD_ERR_OK){
	//把存檔的檔案搬到上傳目錄下 並改回原始檔名
move_uploaded_file($_FILES['file']['tmp_name'],
                   $upload_dir . $_FILES['file']['name']);
echo '上傳成功';
}
else{
echo "上傳失敗";
}
// 新增 
	$id=$_POST['id'];
	$password=$_POST['password'];
	$name=$_POST['name'];
	$tel=$_POST['tel'];
	$address=$_POST['address'];
	$file=$_FILES['file']['name'];
	$memberdate=$_POST['memberdate'];
    $sql="INSERT member (id,password,name,tel,address,file,memberdate)
        VALUES ('{$id}','{$password}','{$name}','{$tel}','{$address}','$file',sysdate())";
		echo $sql;
	//$result=mysql_query($sql);
	//異動會顯示異動資料
	if (mysql_affected_rows()>=1);
	echo '新增成功<br><br>';  


?>
</body>
</html>