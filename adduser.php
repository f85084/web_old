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
if(@$_FILES['UpFile']['error']==UPLOAD_ERR_OK){
move_uploaded_file($_FILES['UpFile']['tmp_name'],
                   $upload_dir . $_FILES['UpFile']['name']);
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
	$file=$_POST['file'];
	$memberdate=$_POST['memberdate'];
    $sql="INSERT member (id,password,name,tel,address,file,memberdate)
        VALUES ('{$id}','{$password}','{$name}','{$tel}','{$address}','{$_FILES['UpFile']['name']}','{$memberdate}')";
	$result=mysql_query($sql);
	//異動會顯示異動資料
	if (mysql_affected_rows()>=1);
	echo '新增成功<br><br>';  


?>
</body>
</html>