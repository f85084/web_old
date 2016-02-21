<!DOCTYPE html>
<html lang="zh-Hant">

<head><meta charset=utf-8>
<title>註冊</title>
    <meta name=viewport content="width=device-width, initial-scale=1">
<meta name=description content="">
<meta name=author content="">
    <link rel=icon href=photo/index/an_logo.ico>
        <link href=css/bootstrap.min.css rel=stylesheet>
      <!--   <link href=css/other.css rel=stylesheet>
-->
<style>
/*整體字型、背景*/
body{
	font-family: Arial, 微軟正黑體;
	}

</style>
<body>
               <!--內容B-->
			   <div class="container">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form role="form" name="newuser" method="post" action="adduser.php" enctype="multipart/form-data">    
                    <h2>請輸入基本資料</h2>                 
                        <div class="form-group">
                            <label>登入帳號</label>

                            <input type="text" name="id" class="form-control" id="exampleInputEmail1" placeholder="登入帳號"> 
                        </div>
                        <div class="form-group">
                            <label>登入密碼</label>
                            <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="登入密碼"> 
                        </div>
                        <div class="form-group">
                            <label>姓名</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="姓名"> 
                        </div>
                        <div class="form-group">
                            <label>電話</label>
                            <input type="text" name="tel" class="form-control" id="exampleInputEmail1"  placeholder="電話"> 
                        </div>
                        <div class="form-group">
                            <label>地址</label>
                            <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="地址"> 
                        </div>                        
                        <div class="form-group">
                            <label>上傳照片</label>
                            <input type="file" name="gif" id="exampleInputFile" placeholder="上傳照片"> 
                            <p class="help-block">會員圖片</p>
                        </div>

                        <button type="submit" class="btn btn-primary">送出</button>
                    </form>
                    <br>
                    <br>
                    <br>

                </div>
            </div>
        </div>
		        </div>
        <!-- /#page-wrapper -->
        <!--內容S-->
        <!-- /#wrapper -->