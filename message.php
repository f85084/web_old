<!DOCTYPE html>
<html lang=en><head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name=description content="">
    <meta name=author content="">
    <link rel=icon href=/web/photo/index/an_logo.ico>
    <title>留言</title>
    <link href=/web/css/index/bootstrap.min.css rel=stylesheet>
    <!--<link href=/Content/AssetsBS3/examples/navbar-static-top.css rel=stylesheet> <!--[if lt IE 9]><script src=~/Scripts/AssetsBS3/ie8-responsive-file-warning.js></script><![endif]-->
    <link href=/web/css/index/other.css rel=stylesheet>

	<script src=/Scripts/AssetsBS3/ie-emulation-modes-warning.js></script> <!--[if lt IE 9]><script src=https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js></script><script src=https://oss.maxcdn.com/respond/1.4.2/respond.min.js></script><![endif]-->
<!--<link href=http://f85084.github.io/css.css  rel=stylesheet>
-->



<style>
    <?
include ('mydb.php');
include ('index_action.php');
session_start();
$_SESSION['flag']='0';

?>
</style>

    </head>
    <body>
<!--menu 開始-->
<div class="row">
<nav class="navbar navbar-default navbar-static-top" role=navigation>
    <div class=container>
        <div class=navbar-header>
            <button type=button class="navbar-toggle collapsed" data-toggle=collapse data-target=#navbar aria-expanded=false aria-controls=navbar> <span class=sr-only>Toggle navigation</span> <span class=icon-bar></span> <span class=icon-bar></span> <span class=icon-bar></span> </button>
            <a class=navbar-brand href=index.php>An's</a>
        </div>
        <div id=navbar class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class=active><a href=index.php>Home</a>
                <li><a href=index-share.php>分享</a>
                <li class=dropdown>
                    <a href=# class=dropdown-toggle data-toggle=dropdown role=button aria-expanded=false>國外<span class=caret></span></a>
                    <ul class=dropdown-menu role=menu>
                        <li><a href=japan.php>日本</a>
                        <li><a href=#>韓國</a>
                        <!--<li>
                            <a href=#>Something else here</a>
                            <!--<li class=divider>
                            <li class=dropdown-header>Nav header
                            <li><a href=#>Separated link</a>
                            <li><a href=#>One more separated link</a>-->
                    </ul>

                <li class=dropdown>
                    <a href=# class=dropdown-toggle data-toggle=dropdown role=button aria-expanded=false>國內<span class=caret></span></a>
                    <ul class=dropdown-menu role=menu>
                        <li><a href=#>北</a>
                        <li><a href=#>中</a>
                        <li><a href=#>南</a>
                       <!-- <li class=divider>
                             <li class=dropdown-header>Nav header
                 <li><a href=#>Separated link</a>
                 <li><a href=#>One more separated link</a>-->
                    </ul>
                <li><a href=buy.php>行程</a>
</ul>
            <ul class="nav navbar-nav navbar-right">
                <!--<li>
                    <a href=/bs3/Examples/navbar>Default <span class=sr-only>(current)</span></a>
                <li class=active>
                    <a href=/bs3/Examples/navbar-static-top>Static top <span class=sr-only>(current)</span></a>
                <li><a href=/bs3/Examples/navbar-fixed-top>Fixed top</a>-->
                <li><a href=#>公告</a>
                <li><a href=#>簡介</a>
                <li><a href=#>連結</a>
                <li>  <?
				 if(!$row=mysql_fetch_array($result)){
				  echo '<br><li><a href=login.php>登入</a>';	 
				   }
				  else{
				    echo '<br><li><a>你好'.$row['name'];
					
				   }
                        ?>
                 <li><a href=message.php>會員專區</a>
                 <li><a href=logout_action.php>登出</a>
</ul>
        </div>
    </div>
</nav>

<!--menu 結束-->
<!--內文-->
<div>
<div class="col-md-6 col-md-offset-3">
<?
echo '你好'.$row['name'].'請留言<br>';
$_SESSION['number']=$row['number'];
$_SESSION['message_no']=$row['message_no'];
echo "<a href=modifymember.php>修改</a><br>";
?>

<div>
<form name="form" method="post" action="addmessage.php" class=form-signin>
<h2 class=form-signin-heading>留言</h2>
<p>

信箱
<input type="email" name="email" class="form-control" placeholder="輸入信箱">
<br>
內容
<textarea name="content" rows=10 cols=30 class="form-control" placeholder="輸入內容"  ></textarea>
<br>
<input type="hidden" name="name" value=<?echo"$row[3]"?>>
<input type="hidden" name="id" value=<?echo"$row[1]"?>>
 <input type="hidden" name="message_no" value=<?echo"$row[message_no]"?>>
 <a href="newuser.php">
 <button class="btn btn-large btn-primary" type=submit>留言</button></a>&nbsp;&nbsp;&nbsp;
  <button class="btn btn-large btn-primary" type=reset> 重置</button> 
 
 
</form>
<?
$sql = "select *from  `message`";
$_GET['id']=$id;
//$id='number';
// 查詢帳號
/*if ($_GET['message_no']) {
	$sql = $sql."where message_no=".$id;
}*/
// 回傳結果
$result=mysql_query($sql);
// 表格表題
echo "<div >";
echo '總共有' .mysql_num_rows($result).'筆留言';
echo " <table class='table table-striped' >
		<tr>";
if ($_GET['order']==2) {
	echo "	<td data-th ><a href=message_management_own.php?order=1>編號</a></td>";
} 
 else {
	echo "	<td data-th ><a href=message_management_own.php?order=2>編號</a></td>";
}
if ($_GET['order']==4) {
	echo "	<td  data-th ><a href=message_management_own.php?order=3>姓名</a></td>";
} 
 else {
	echo "	<td data-th <a href=message_management_own.php?order=4>姓名</a></td>";
}
if ($_GET['order']==6) {
	echo "	<td data-th ><a href=message_management_own.php?order=5>信箱</a></td>";
}
 else {
	echo "	<td data-th ><a href=message_management_own.php?order=6>信箱</a></td>";
}
if ($_GET['order']==8) {
	echo "	<td data-th><a href=message_management_own.php?order=7>內容</a></td>";
} 
 else {
	echo "	<td data-th ><a href=message_management_own.php?order=8>內容</a></td>";
}
if ($_GET['order']==10) {
	echo "	<td data-th ><a href=message_management_own.php?order=9>時間</a></td>";
} 
 else {
	echo "	<td data-th><a href=message_management_own.php?order=10>時間</a></td>";
}
echo "	
            <td data-th>編輯</td>	
			<td data-th >刪除</td>
		</tr>";
// 表格內容
    //$sql="select * from member where id='$_GET[id]' and password='$_GET[password]'";
	//$result=mysql_query($sql);
//if ($row=mysql_fetch_array($result))
//{
	
$sql = "SELECT *FROM `message` WHERE message_id='$id'";
	$result=mysql_query($sql);


while ($row=mysql_fetch_array($result)) {
	

	echo 
		"<tr>
			<td data-th>$row[0]</td>
			<td data-th>$row[2]</td>
			<td data-th >$row[3]</td>
			<td data-th >$row[4]</td>
			<td data-th >$row[5]</td>
			<td data-th ><a href=edit_message.php?message_no=$row[message_no]>編輯<a></td>
			<td data-th ><a href=message.php?del=$row[0]>刪除<a></td>
		</tr>";
}
echo "</table>";
echo "</div>";

?>
</div>
</div>
</div>
</div>
<!--內文-->        
    <script src=https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js></script>
        <script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js></script>
       <!-- <script src=/Scripts/AssetsBS3/ie10-viewport-bug-workaround.js></script>-->

<!--FOOTER S-->

<footer class="rwd-footer clearfix">

  <ul class="contact">
    <li><a href="tel:0800"><i class="icon-phone"></i>0800</a></li>
    <li><a href="mailto:Anna's"><i class="icon-email"></i>Anna's</a></li>
  </ul>
        <p class="copyright">© <span id="spanCopyYear">1990</span> Anna's All Rights Reserved.</p>
</footer>
<script type="text/javascript">
        document.getElementById('spanCopyYear').innerHTML = (new Date()).getFullYear();
    </script>
<!--FOOTER E-->

</body>