<!DOCTYPE html>
<html lang=en><head><meta charset=utf-8>
<title>管理介面</title>
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

<body>

<?
//認證管理員

session_start();
if($_SESSION['flag']=='1')
{
	echo'歡迎ROOT登入';
	echo '<a href="Log%20in.php"><button class="btn btn-large btn-primary" type=submit>登出</button> </a>';
	}
else
	{
    echo'你不是root';
	echo '<a href="Log%20in.php"><button class="btn btn-large btn-primary" type=submit>登出</button> </a>';
	die();
	}
	
?>


<div class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
      <!--左邊欄位Sidebar content-->
      <a href=management.php>管理會員資料<a><br>
      <a href=message_management_own.php>管裡留言資料<a><br>
    </div>
    <div class="span10">
      <!--右邊欄位Body content-->
    </div>
  </div>
</div>



</body>
</html>