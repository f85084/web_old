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
if(@$_FILES['gif']['error']==UPLOAD_ERR_OK){
move_uploaded_file($_FILES['gif']['tmp_name'],
                   $upload_dir . $_FILES['gif']['name']);
echo '上傳成功';
}
else{
echo "上傳失敗";
}
//新增

$sql="insert date(id,password,name,tel,address,gif,date) 
values('$_POST[id]','$_POST[password]','$_POST[name]','$_POST[tel]','$_POST[address]','$_FILES[gif][name]','sysdate()')";

echo $sql;

//$result=mysql_query($sql);
//if(mysql_affected_rows()>=1)
	//echo"新增成功<br>";

?>
</body>
</html>