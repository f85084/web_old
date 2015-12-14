<!DOCTYPE html>
<html lang=en><head><meta charset=utf-8>
<title>修改留言</title>
<meta name=viewport content="width=device-width, initial-scale=1.0">
<meta name=description content=""><meta name=author content="">
<link href=http://f85084.github.io/css.css  rel=stylesheet>

<?
include ('mydb.php');
session_start();
if($_SESSION['flag']=='1')
$_SESSION['message_no']=$row['message_no'];
$_SESSION['message_no']=$_GET[message_no];
    $sql="select * from message where message_no='$_SESSION[message_no]'";
	$result=mysql_query($sql);
echo "$sql";
?>

<?
if($row=mysql_fetch_array($result)){
				    echo '你好'.$row['name'];
				   }
echo "<a href=index.php>登出</a>";
//echo "<a href=modifymember.php>修改</a>";
?>
<style>
/*整體字型、背景*/
body{
	font-family: Arial, 微軟正黑體;
	background-color:#f5f5f5
	}
</style>

<body><br>

<div>


<form name="edit_message" method="post" action="modify.php"  enctype="multipart/form-data" class=form-signin>
<h2 class=form-signin-heading>修改留言</h2>
<p>


信箱
<input type="email" name="email" class="input-block-level" placeholder="輸入信箱" value="<? echo $row[message_email]; ?>">
內容
<textarea name="content" rows=10 cols=30 class="input-block-level" placeholder="輸入內容"  value="<? echo $row[message_content]; ?>"> </textarea>
<br>
 
 <a href="edit_modify.php">
 <button class="btn btn-large btn-primary" type=submit>留言</button></a>&nbsp;&nbsp;&nbsp;
  <button class="btn btn-large btn-primary" type=reset> 重置</button> 
 
 
</form>



</div>

</body>
</html>