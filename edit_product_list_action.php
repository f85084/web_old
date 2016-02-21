<!DOCTYPE html>
<html lang=en><head><meta charset=utf-8>
<head>
<title>修改</title>
</head>
<?
include ('mydb.php');
session_start();
        //定義存放上傳檔案的目錄
        $upload_dir='./photo/';
        //如果錯誤代碼為 UPLOAD_ERR_OK, 表示上傳成功
        if($_FILES['product_pic1']['error'] == UPLOAD_ERR_OK ) {
        $fname = iconv('UTF-8', 'big5',
        $_FILES['product_pic1']['name']);
        //將暫存檔搬移到上傳目錄, 並且改回原始檔名
        if(move_uploaded_file($_FILES['product_pic1']['tmp_name'],
        $upload_dir . $fname)){
        //顯示上傳檔案的相關訊息
        echo '上傳成功...';
        }
        }
        else
        echo "上傳失敗";
		
		        //定義存放上傳檔案的目錄
        $upload_dir='./photo/';
        //如果錯誤代碼為 UPLOAD_ERR_OK, 表示上傳成功
        if($_FILES['product_pic2']['error'] == UPLOAD_ERR_OK ) {
        $fname = iconv('UTF-8', 'big5',
        $_FILES['product_pic2']['name']);
        //將暫存檔搬移到上傳目錄, 並且改回原始檔名
        if(move_uploaded_file($_FILES['product_pic2']['tmp_name'],
        $upload_dir . $fname)){
        //顯示上傳檔案的相關訊息
        echo '上傳成功...';
        }
        }
        else
        echo "上傳失敗";
		
		        //定義存放上傳檔案的目錄
        $upload_dir='./photo/';
        //如果錯誤代碼為 UPLOAD_ERR_OK, 表示上傳成功
        if($_FILES['product_pic3']['error'] == UPLOAD_ERR_OK ) {
        $fname = iconv('UTF-8', 'big5',
        $_FILES['product_pic3']['name']);
        //將暫存檔搬移到上傳目錄, 並且改回原始檔名
        if(move_uploaded_file($_FILES['product_pic3']['tmp_name'],
        $upload_dir . $fname)){
        //顯示上傳檔案的相關訊息
        echo '上傳成功...';
        }
        }
        else
        echo "上傳失敗";

$s="update product set 
product_name='{$_POST['product_name']}',
product_price='{$_POST['product_price']}',
product_sale_price='{$_POST['product_sale_price']}',
product_text='{$_POST['product_text']}',
product_display='{$_POST['product_display']}'
where product_id=$_SESSION[product_id] ";
$result=mysql_query($s);
echo $s;
if (mysql_affected_rows()>0)
echo '更新成功<br>';
else echo '更新失敗<br>';
header("location:product_list.php");

?>

