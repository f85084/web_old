<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset=utf-8>
    <title>建立產品</title>
    <meta name=viewport content="width=device-width, initial-scale=1.0">
    <meta name=description content="">
    <meta name=author content="">
    <link href=http://f85084.github.io/css.css rel=stylesheet>
        <link href=css/index/bootstrap.min.css rel=stylesheet>
            <link href=css/index/other.css rel=stylesheet>
    <style>
        /*整體字型、背景*/
        body {
            font-family: Arial, 微軟正黑體;
            background-color: #f5f5f5;
            margin: 0px 600px;
        }
    </style>
    <body>
        <?php
        //資料庫檔案
        include ('mydb.php');

        //檢查帳號是否重複
        $sql="select * from product where product_id='$_POST[product_id]'";
        $result=mysql_query($sql);
        if ($row=mysql_fetch_array($result))
        {
        echo '帳號已有人使用';
        echo "<a href=index.php>回首頁</a>";
        die();
        }
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

        // 新增
        $product_number=$_POST['product_id'];
        $product_class=$_POST['product_class'];		
        $product_name=$_POST['product_name'];
        $product_price=$_POST['product_price'];
        $product_sale_price=$_POST['product_sale_price'];
        $product_text=$_POST['product_text'];
        $product_pic1=$_FILES['product_pic1']['name'];
        $product_pic2=$_FILES['product_pic2']['name'];
        $product_pic3=$_FILES['product_pic3']['name'];
        $product_product_display=$_POST['product_display'];
        $product_date=$_POST['product_date'];
        $sql="INSERT product (product_id,product_class,product_name,product_price,product_sale_price,product_text,product_pic1,product_pic2,product_pic3,product_display,product_date)
        VALUES ('{$product_id}','{$product_class}','{$product_name}','{$product_price}','{$product_sale_price}','{$product_text}','{$product_pic1}','{$product_pic2}','{$product_pic3}','{$product_display}',sysdate())";

        
       


        $result=mysql_query($sql);
        //異動會顯示異動資料
        if (mysql_affected_rows()>=1);
        echo '新增成功<br><br>';
        ?>
        <a href="product_new.php"><button class="btn btn-primary" type=submit>回到登入</button> </a>

    </body>
</html>