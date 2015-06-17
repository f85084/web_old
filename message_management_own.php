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
  <!--查詢-->
  <div class=form-Search>
  <form method="get" action="management.php">
     <!-- 單列文字輸入欄位 -->
    帳號:<input type="text" name="no"> <br>
    <input type="submit" value="查詢資料">
    <input type="reset" value="清除資料">
  </form>
  </div>
   <br>
    <br>
  <br>
  <br>
</body>
</html>

<?php
//header('Content-Type: text/html; charset=utf-8');
include("mydb.php");

// 刪除
if ($_GET['del']) {
	$a=$_GET['del'];
	$d="delete from message where message_no=$a";
	mysql_query($d);
	//異動會顯示異動資料
	echo '成功幾筆<br>'.mysql_affected_rows();
}

$id=$_GET['message_no'];

$sql = "select message_no,message_name,message_email,message_content,message_date from   `message`  ";

// 查詢帳號
if ($_GET['message_no']) {
	$sql = $sql."where message_no=".$id;
}
// 使用編號排序
if ($_GET['order']==1) {
	$sql = $sql."order by message_no";
}
if ($_GET['order']==2) {
	$sql = $sql."order by message_no desc";
}
// 使用編號排序
if ($_GET['order']==3) {
	$sql = $sql."order by message_name";
}
if ($_GET['order']==4) {
	$sql = $sql."order by message_name desc";
}
// 使用價格排序
if ($_GET['order']==5) {
	$sql = $sql."order by message_email";
}
if ($_GET['order']==6) {
	$sql = $sql."order by message_email desc";
}
// 使用價姓名序
if ($_GET['order']==7) {
	$sql = $sql."order by message_content";
}
if ($_GET['order']==8) {
	$sql = $sql."order by message_content desc";
}
// 使用價姓名序
if ($_GET['order']==9) {
	$sql = $sql."order by message_date";
}
if ($_GET['order']==10) {
	$sql = $sql."order by message_date desc";
}

// 回傳結果
$result=mysql_query($sql);

// 表格表題
echo '總共有' .mysql_num_rows($result).'人';
echo "<table border=1>
		<tr>";
if ($_GET['order']==2) {
	echo "	<td width=2%><a href=message_management_own.php?order=1>編號</a></td>";
} 
 else {
	echo "	<td width=2%><a href=message_management_own.php?order=2>編號</a></td>";
}
if ($_GET['order']==4) {
	echo "	<td width=5%><a href=message_management_own.php?order=3>姓名</a></td>";
} 
 else {
	echo "	<td width=5%><a href=message_management_own.php?order=4>姓名</a></td>";
}
if ($_GET['order']==6) {
	echo "	<td width=5%><a href=message_management_own.php?order=5>信箱</a></td>";
}
 else {
	echo "	<td width=5%><a href=message_management_own.php?order=6>信箱</a></td>";
}
if ($_GET['order']==8) {
	echo "	<td width=5%><a href=message_management_own.php?order=7>內容</a></td>";
} 
 else {
	echo "	<td width=5%><a href=message_management_own.php?order=8>內容</a></td>";
}
if ($_GET['order']==10) {
	echo "	<td width=5%><a href=message_management_own.php?order=9>時間</a></td>";
} 
 else {
	echo "	<td width=5%><a href=message_management_own.php?order=10>時間</a></td>";
}



echo "	
            <td width=4%>編輯</td>	
			<td width=4%>刪除</td>
		</tr>";

// 表格內容
while ($row=mysql_fetch_array($result)) {
	echo 
		"<tr>
			<td width=1%>$row[0]</td>
			<td width=10%>$row[1]</td>
			<td width=10%>$row[2]</td>
			<td width=10%>$row[3]</td>
			<td width=10%>$row[4]</td>
			<td width=10%>$row[5]</td>
			<td width=7%><img src=./photo/$row[6] width=100 height=50></td>
			<td width=10%>$row[7]</td>
			<td width=1%><a href=management.php?edit=$row[0]>編輯<a></td>
			<td width=1%><a href=management.php?del=$row[0]>刪除<a></td>
		</tr>";
}

echo "</table>";
?>