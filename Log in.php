<!DOCTYPE html>
<html lang=en><head><meta charset=utf-8>
<title>登入</title>
<meta name=viewport content="width=device-width, initial-scale=1.0">
<meta name=description content=""><meta name=author content="">
<link href=http://f85084.github.io/css.css  rel=stylesheet>
<style>
/*整體字型、背景*/
body{
	font-family: Arial, 微軟正黑體;
	background-color:#f5f5f5;
	margin: 0px auto;
	}
	

</style>
<body><div>
<?
session_start();
$_SESSION['flag']='0';
?>
<form name="login" method="get" action="message.php" class=form-signin>
<h2 class=form-signin-heading>請登入</h2>
<p>
<input type="text" name="id" class="input-block-level" placeholder="輸入帳號 "> 
<input type="password" name="password" class="input-block-level" placeholder="輸入密碼">
  <label class=checkbox> 
    </br>
  </label>
</p>
<label class=checkbox>
  <button class="btn btn-large btn-primary" type=submit>登入</button>
  </br>
  <input type=checkbox value=remember-me> 忘記密碼 </label>
</form>
</div>
<div class="h8">
  <a href="newuser.php"><button class="btn btn-large btn-primary" type=submit>註冊</button> </a>
  </div> 


