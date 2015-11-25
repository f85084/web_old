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
<form name="login" method="get" action="message.php" class=form-signin id="login" >
<h2 class=form-signin-heading>請登入</h2>
<p>
<input type="text" id="id" name="id" class="input-block-level" placeholder="輸入帳號 "> 
<input type="password" id="password" name="password" class="input-block-level" placeholder="輸入密碼">
  <label class=checkbox> 
    </br>
  </label>
</p>
<label class=checkbox>
  <button class="btn btn-large btn-primary" id="submitBtn" type=submit >登入</button>
  </br>
  <input type=checkbox value=remember-me> 忘記密碼 </label>
</form>
</div>
<div class="h9">
  <a href="newuser.php"><button class="btn btn-large btn-primary" type=submit>註冊</button> </a>
  </div> 
<!--<script>
// 取得送出按鈕Tag
var btn = document.getElementById("submitBtn");
// 傾聽點擊事件
btn.addEventListener("click", function(){
	// 取得帳號輸入值
	var id = document.getElementById("id").value;
	// 取得密碼輸入值
	var password = document.getElementById("password").value;
	// 如果帳號沒有輸入, 顯示帳號未輸入
	if(!id) {
		alert('請輸入帳號');
		return false;
	}
	// 如果密碼沒有輸入, 顯示密碼未輸入
	if(!password) {
		alert('請輸入密碼');
		return false;
	}
	// 取得表單, 送出
	var login = document.getElementById("login");
	login.submit();
});
</script>-->
</body>
</html>