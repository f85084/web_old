<!DOCTYPE html>
<html lang=en><head><meta charset=utf-8>
<title>管理留言</title>
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

  <?php
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
      <!--查詢-->
  <div class=form-Search>
  <form method="get" action="message_management_own.php">
     <!-- 單列文字輸入欄位 -->
    帳號:<input type="text" name="message_id"> <br>
    <input type="submit" value="查詢資料">
    <input type="reset" value="清除資料">
  </form>
  </div>
    <?php
//header('Content-Type: text/html; charset=utf-8');
include("mydb.php");
$h10="h10";
echo "<div class=$h10>";
$id=$_GET['message_id'];
// 刪除
if ($_GET['del']) {
	$a=$_GET['del'];
	$d="delete from message where message_id=$a";
	mysql_query($d);
	//異動會顯示異動資料
	echo '成功幾筆'.mysql_affected_rows();
	echo "</div>";
}
$sql = "select *from`message`";
$_GET['message_id']=$id;
// 查詢帳號
if ($_GET['message_id']) {
	$sql = $sql."where message_id="."'$id'";
}
// 回傳結果
$result=mysql_query($sql);
if (!$result) {
    echo "Could not successfully run query ($sql) from DB: " . mysql_error();
    exit;
}
if (mysql_num_rows($result) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}
// 表格表題
echo "<div class=$h7>";
echo '總共有' .mysql_num_rows($result).'人';
echo " <table border=1>
		<tr>";
if ($_GET['order']==2) {
	echo "	<td width=35px><a href=message_management_own.php?order=1>編號</a></td>";
} 
 else {
	echo "	<td width=35px><a href=message_management_own.php?order=2>編號</a></td>";
}
if ($_GET['order']==4) {
	echo "	<td width=60px><a href=message_management_own.php?order=3>帳號</a></td>";
} 
 else {
	echo "	<td width=60px><a href=message_management_own.php?order=4>帳號</a></td>";
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
			<td width=10px>$row[5]</td>
			<td width=10px><a href=message_management_own.php?edit=$row[0]>編輯<a></td>
			<td width=10px><a href=message_management_own.php?del=$row[0]>刪除<a></td>
		</tr>";
}
echo "</table>";
echo "</div>";
?>

   <br>
    <br>
  <br>
  <br>
</body>
</html>