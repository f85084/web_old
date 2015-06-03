<!DOCTYPE html>
<html lang=en><head><meta charset=utf-8>
<title>Sign in</title>
<meta name=viewport content="width=device-width, initial-scale=1.0">
<meta name=description content=""><meta name=author content="">
<link href=http://kkbruce.tw/Content/BS2/bootstrap.css  rel=stylesheet>
<style>
body{padding-top:40px;padding-bottom:40px;background-color:#f5f5f5}
.form-signin{
max-width:300px;
padding:19px 29px 29px;
margin:0 auto 20px;
background-color:#fff;border:1px solid #e5e5e5;
-webkit-border-radius:5px;
-moz-border-radius:5px;
border-radius:5px;
-webkit-box-shadow:0 1px 2px rgba(0,0,0,.05);
-moz-box-shadow:0 1px 2px rgba(0,0,0,.05);
box-shadow:0 1px 2px rgba(0,0,0,.05)}
.form-signin 
.form-signin-heading,
.form-signin 
.checkbox{margin-bottom:10px}
.form-signin input[type="text"],
.form-signin input[type="password"]
{
font-size:16px;height:auto;
margin-bottom:15px;padding:7px 9px
}
</style>
<link href=/Content/BS2/bootstrap-responsive.css rel=stylesheet> 
<!--[if lt IE 9]><script src=~/Scripts/BS2/html5shiv.js></script><![endif]-->

<body><div class=container>
<form name="newuser" method="post" action="adduser.php" class=form-signin>
<h2 class=form-signin-heading>請輸入基本資料</h2>
<p>
<input type="text" name="id" class="input-block-level" placeholder="登入帳號"> 

<input type="password" name="password" class="input-block-level" placeholder="登入密碼"> 

<input type="text" name="name" class="input-block-level" placeholder="姓名"> 

<input type="text" name="tel" class="input-block-level" placeholder="電話"> 

<input type="text" name="address" class="input-block-level" placeholder="地址"> 

<input type="file" name="gif" class="input-block-level" placeholder="上傳照片"> 

<a href="adduser.php">
<button class="btn btn-large btn-primary" type=submit>送出</button>
</a>  </br>
</form>
</div>