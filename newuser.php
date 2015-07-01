<!DOCTYPE html>
<html lang=en><head><meta charset=utf-8>
<title>Sign in</title>
<meta name=viewport content="width=device-width, initial-scale=1.0">
<meta name=description content=""><meta name=author content="">
<link href=http://f85084.github.io/css.css  rel=stylesheet>
<style>
/*整體字型、背景*/
body{
	font-family: Arial, 微軟正黑體;
	background-color:#f5f5f5
	
	}

</style>
<!--<link href=/Content/BS2/bootstrap-responsive.css rel=stylesheet> -->
<!--[if lt IE 9]><script src=~/Scripts/BS2/html5shiv.js></script><![endif]-->
<body>
<!--enctype="multipart/form-data" 載入檔案 -->
<div class=container>
<form name="newuser" method="post" action="adduser.php"  enctype="multipart/form-data"  class=form-signin>
<h2 class=form-signin-heading>請輸入基本資料</h2>
<p>
<input type="text" name="id" class="input-block-level" placeholder="登入帳號"> 

<input type="password" name="password" class="input-block-level" placeholder="登入密碼"> 

<input type="text" name="name" class="input-block-level" placeholder="姓名"> 

<input type="text" name="tel" class="input-block-level" placeholder="電話"> 

<input type="text" name="address" class="input-block-level" placeholder="地址"> 

<input type="file" name="gif" class="input-block-level" placeholder="上傳照片"> 

<button class="btn btn-large btn-primary" type=submit>送出</button>
</br>
</form>
</div>