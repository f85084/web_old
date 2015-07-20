<!DOCTYPE html>
<html lang=en><head><meta charset=utf-8>
<title>留言</title>
<meta name=viewport content="width=device-width, initial-scale=1.0">
<meta name=description content=""><meta name=author content="">
<link href=http://f85084.github.io/css.css  rel=stylesheet>

<?
include ('mydb.php');
$h7="h7";
echo "<div class=$h7>";
    $sql="select * from member where id='$_GET[id]' and password='$_GET[password]'";
	$result=mysql_query($sql);
if (!$row=mysql_fetch_array($result))
{
	echo '登入失敗';
	echo "<a href=index.php>回首頁</a>";
	die();
}
if ($_GET[id]=='root')
{
session_start();
$_SESSION['flag']='1';
header("location: manage.php");
}
?>


<style>
/*整體字型、背景*/
body{
	font-family: Arial, 微軟正黑體;
	background-color:#f5f5f5
	}
</style>
<!--<link href=/Content/BS2/bootstrap-responsive.css rel=stylesheet> -->
<!--[if lt IE 9]><script src=~/Scripts/BS2/html5shiv.js></script><![endif]-->

<body><br>
<?
echo '你好'.$row['3'].'請留言';
?>
<div>
<form name="form" method="post" action="addmessage.php" class=form-signin>
<h2 class=form-signin-heading>留言</h2>
<p>

信箱
<input type="email" name="email" class="input-block-level" placeholder="輸入信箱">
內容
<textarea name="content" rows=10 cols=30 class="input-block-level" placeholder="輸入內容"  ></textarea>
<br>
<input type="hidden" name="name" value=<?echo"$row[3]";?>>
 
 <a href="newuser.php">
 <button class="btn btn-large btn-primary" type=submit>留言</button>&nbsp;&nbsp;&nbsp;
  <button class="btn btn-large btn-primary" type=reset> 重置</button> 
 </a>
 
</form>
<?
$sql = "select *from  message";
// 查詢帳號
if ($_GET['message_no']) {
	$sql = $sql."where message_no=".$id;
}
// 回傳結果
$result=mysql_query($sql);
// 表格表題
echo "<div class=$h7>";
echo '總共有' .mysql_num_rows($result).'人';
echo " <table border=1>
		<tr>";
if ($_GET['order']==2) {
	echo "	<td width=10px><a href=message_management_own.php?order=1>編號</a></td>";
} 
 else {
	echo "	<td width=10px><a href=message_management_own.php?order=2>編號</a></td>";
}
if ($_GET['order']==4) {
	echo "	<td width=60px><a href=message_management_own.php?order=3>姓名</a></td>";
} 
 else {
	echo "	<td width=60px><a href=message_management_own.php?order=4>姓名</a></td>";
}
if ($_GET['order']==6) {
	echo "	<td width=10px><a href=message_management_own.php?order=5>信箱</a></td>";
}
 else {
	echo "	<td width=10px><a href=message_management_own.php?order=6>信箱</a></td>";
}
if ($_GET['order']==8) {
	echo "	<td width=200px><a href=message_management_own.php?order=7>內容</a></td>";
} 
 else {
	echo "	<td width=200px><a href=message_management_own.php?order=8>內容</a></td>";
}
if ($_GET['order']==10) {
	echo "	<td width=180px><a href=message_management_own.php?order=9>時間</a></td>";
} 
 else {
	echo "	<td width=180px><a href=message_management_own.php?order=10>時間</a></td>";
}
echo "	
            <td width=40px>編輯</td>	
			<td width=40px>刪除</td>
		</tr>";
// 表格內容
while ($row=mysql_fetch_array($result)) {
	echo 
		"<tr>
			<td width=10px>$row[0]</td>
			<td width=10px>$row[1]</td>
			<td width=10px>$row[2]</td>
			<td width=10px>$row[3]</td>
			<td width=10px>$row[4]</td>
			<td width=10px><a href=message_management_own.php?edit=$row[0]>編輯<a></td>
			<td width=10px><a href=message_management_own.php?del=$row[0]>刪除<a></td>
		</tr>";
}
echo "</table>";
echo "</div>";
?>
</div>

</body>
</html>