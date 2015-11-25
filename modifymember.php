<!DOCTYPE html>
<html lang=en><head><meta charset=utf-8>
<title>會員資料修改</title>
<meta name=viewport content="width=device-width, initial-scale=1.0">
<meta name=description content=""><meta name=author content="">
<link href=http://f85084.github.io/css.css  rel=stylesheet>
<?
include ('mydb.php');
session_start();
if($_SESSION['flag']=='1')
$_SESSION['number']=$row['number'];
?>
<style>
/*整體字型、背景*/
body{
	font-family: Arial, 微軟正黑體;
	background-color:#f5f5f5;
	margin: 0px auto;
	}

</style>
<!--<link href=/Content/BS2/bootstrap-responsive.css rel=stylesheet> -->
<!--[if lt IE 9]><script src=~/Scripts/BS2/html5shiv.js></script><![endif]-->
<body>

<div >
<!--enctype="multipart/form-data" 載入檔案 -->
<div class=container>
<form name="modifymember" method="post" action="modify.php"  enctype="multipart/form-data"  class=form-signin>
<?
$sql="select * from member where 
number=$_SESSION[number]";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>
<h2 class=form-signin-heading>修改會員基本資料</h2>
<p>
<input type="text" name="id" class="input-block-level" placeholder="登入帳號" value="<? echo $row[id]; ?>"> 

<input type="password" name="password" class="input-block-level" placeholder="登入密碼" value="<? echo $row[password]; ?>">

<input type="text" name="name" class="input-block-level" placeholder="姓名" value="<? echo $row[name]; ?>"> 

<input type="text" name="tel" class="input-block-level" placeholder="電話" value="<? echo $row[tel]; ?>"> 

<input type="text" name="address" class="input-block-level" placeholder="地址" value="<? echo $row[address]; ?>"> 


<button class="btn btn-large btn-primary" type=submit>送出</button>
</br>
</form>
<div class=h8>
<a href="login.php"><button class="btn btn-large btn-primary" type=submit>回到登入</button></a><br>
</div>
