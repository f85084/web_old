<?
include ('mydb.php');

    $sql="select * from member where id='$_GET[id]' and password='$_GET[password]'";
	$result=mysql_query($sql);
if (!mysql_fetch_array($result))
{
	echo 'MISS';
	echo "<a href=index.php>回首頁</a>";
	die();
}
?>

<!DOCTYPE html>
<html lang=en><head><meta charset=utf-8>
<title>留言</title>
<meta name=viewport content="width=device-width, initial-scale=1.0">
<meta name=description content=""><meta name=author content="">
<link href=http://kkbruce.tw/Content/BS2/bootstrap.css  rel=stylesheet>
<style>
/*整體字型、背景*/
body{
	font-family: Arial, 微軟正黑體;
	background-color:#f5f5f5
	}
.form-Search{
max-width:300px;
padding:19px 29px 29px;
margin:0 auto 20px;
background-color:#fff;border:1px solid #e5e5e5;
font-size:110%;
-webkit-border-radius:5px;
-moz-border-radius:5px;
border-radius:5px;
-webkit-box-shadow:0 1px 2px rgba(0,0,0,.05);
-moz-box-shadow:0 1px 2px rgba(0,0,0,.05);
box-shadow:0 1px 2px rgba(0,0,0,.05)}
.form-signin {
width:500pX;
/*區塊置中*/
margin: 0px auto;;
}
.checkbox{margin-bottom:20px}
.form-signin input[type="text"],
.form-signin input[type="password"]
{
font-size:16px;height:auto;
margin-bottom:15px;padding:7px 9px
}
</style>
<link href=/Content/BS2/bootstrap-responsive.css rel=stylesheet> 
<!--[if lt IE 9]><script src=~/Scripts/BS2/html5shiv.js></script><![endif]-->
<body>
<body><br>
<?
echo '你好'.$row['name'];
?>
<div>
<form name="login" method="post" action="addmessage.php" class=form-signin>
<h2 class=form-signin-heading>留言</h2>
<p>
姓名
<input type="text" name="name" class="input-block-level" placeholder="輸入姓名">
信箱
<input type="email" name="email" class="input-block-level" placeholder="輸入信箱">
內容
<textarea name="Content" rows=10 cols=30 class="input-block-level" placeholder="輸入內容"  ></textarea>
<br>
<input type="hidden" name="number" value=<?echo"$row[number]";?>>
 
 <a href="newuser.php">
 <button class="btn btn-large btn-primary" type=submit>註冊</button>&nbsp;&nbsp;&nbsp;
  <button class="btn btn-large btn-primary" type=reset> 重置</button> 
 </a>
 
</form>
</div>

</body>
</html>