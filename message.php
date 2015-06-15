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
<body><br>

<div>
<form name="form" method="post" action="addmessage.php" class=form-signin>
<h2 class=form-signin-heading>留言</h2>
<p>
姓名
<input type="text" name="name" class="input-block-level" placeholder="輸入姓名">
信箱
<input type="email" name="email" class="input-block-level" placeholder="輸入信箱">
內容
<textarea name="content" rows=10 cols=30 class="input-block-level" placeholder="輸入內容"  ></textarea>
<br>
<input type="hidden" name="no" value=<?echo"$row[no]";?>>
 
 <a href="newuser.php">
 <button class="btn btn-large btn-primary" type=submit>留言</button>&nbsp;&nbsp;&nbsp;
  <button class="btn btn-large btn-primary" type=reset> 重置</button> 
 </a>
 
</form>
</div>

</body>
</html>