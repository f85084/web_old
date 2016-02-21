<!DOCTYPE html>
<html lang=en><head><meta charset=utf-8>
<head>
<title>修改</title>
</head>
<?
include ('mydb.php');
session_start();
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


$s="update member set 
password='{$_POST['password']}',
name='{$_POST['name']}',
tel='{$_POST['tel']}',
address='{$_POST['address']}',
gif='{$_FILES['gif']['name']}'
where number=$_SESSION[number] ";
$result=mysql_query($s);
echo $s;
if (mysql_affected_rows()>0)
echo '更新成功<br>';
else echo '更新失敗<br>';
header("location:manage_member.php");

?>

