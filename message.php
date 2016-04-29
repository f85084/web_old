<!DOCTYPE html>
<html lang=en><head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name=description content="">
    <meta name=author content="">
    <link rel=icon href=/web/photo/index/an_logo.ico>
    <title>留言</title>

        <link href=css/bootstrap.min.css rel=stylesheet>
            <link href=css/other.css rel=stylesheet>
	<script src=/Scripts/AssetsBS3/ie-emulation-modes-warning.js></script> <!--[if lt IE 9]><script src=https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js></script><script src=https://oss.maxcdn.com/respond/1.4.2/respond.min.js></script><![endif]-->
<!--<link href=http://f85084.github.io/css.css  rel=stylesheet>
-->



<style>
    <?
include ('mydb.php');
include ('index_action.php');
session_start();
$_SESSION['flag']='0';
//$_SESSION['id']='id';

?>
</style>

    </head>
    <body>
<!--menu 開始-->
<nav class="navbar navbar-inverse navbar-fixed-top" role=navigation>
    <div class=container>
        <div class=navbar-header>
            <button type=button class="navbar-toggle collapsed" data-toggle=collapse data-target=#navbar aria-expanded=false aria-controls=navbar> <span class=icon-bar></span> <span class=icon-bar></span> <span class=icon-bar></span> </button>
            <a class=navbar-brand href=index.php>An's</a>
        </div>
        <div id=navbar class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href=index.php>Home</a>
                <li><a href=index-share.php>美食分享</a>
                <li class=dropdown>
                    <a href=# class=dropdown-toggle data-toggle=dropdown role=button aria-expanded=false>國外<span class=caret></span></a>
                    <ul class=dropdown-menu role=menu>
                        <li><a href=japan.php>日本</a>
                        <li><a href=korea.php>韓國</a>
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
                        <li><a href=north.php>北</a>
                        <li><a href=medium.php>中</a>
                        <li><a href=south.php>南</a>
                       <!-- <li class=divider>
                             <li class=dropdown-header>Nav header
                 <li><a href=#>Separated link</a>
                 <li><a href=#>One more separated link</a>-->
                    </ul>
                <li><a href=shop.php>購買行程</a>
</ul>
            <ul class="nav navbar-nav navbar-right">
                <!--<li>
                    <a href=/bs3/Examples/navbar>Default <span class=sr-only>(current)</span></a>
                <li class=active>
                    <a href=/bs3/Examples/navbar-static-top>Static top <span class=sr-only>(current)</span></a>
                <li><a href=/bs3/Examples/navbar-fixed-top>Fixed top</a>-->
                <!--<li><a href=#>公告</a>
                <li><a href=#>簡介</a>
                <li><a href=#>連結</a>-->
                 <li class=dropdown>
                    <a href=# class=dropdown-toggle data-toggle=dropdown role=button aria-expanded=false>關於<span class=caret></span></a>
                    <ul class=dropdown-menu role=menu>
                <li><a href=#>公告</a>
                <li><a href=#>簡介</a>
                       <!-- <li class=divider>

                             <li class=dropdown-header>Nav header
                 <li><a href=#>Separated link</a>
                 <li><a href=#>One more separated link</a>-->
                    </ul>
                <li>  <?
				 if(!$row=mysql_fetch_array($result)){
				  echo '<br><li><a href=login.php>登入</a>';	 
				   }
				  else{
				    echo '<br><li><a>你好'.$row['name'];
					echo '<br><li><a href=logout_action.php>登出</a>';
					echo '<li><a href=message.php>會員專區</a>';								
				   }
                        ?>

                <li><a href="cart.php"> 購物車 <span class="glyphicon glyphicon-shopping-cart"></span></a> </li>        
                 
</ul>
        </div>
    </div>
</nav>

<!--menu 結束-->

<!--內文-->
    <div class="container">
<div class="col-md-8 col-md-offset-2">
<div class="row">

<?
//echo '你好'.$row['name'].'請留言<br>';
$_SESSION['number']=$row['number'];
$_SESSION['message_no']=$row['message_no'];
//echo "<a href=modifymember.php>修改</a><br>";
?>
<div>
<h2>會員資料</h2>
<?
$sqlm = "select number,id,name,tel,gif  from member where id='$_SESSION[id]'";
$resm=mysql_query($sqlm);   		?>		
<?
$sqlme = "select message_no,message_id,message_name,message_email,message_content,message_date from message where message_id='$_SESSION[id]'";
// 回傳結果
$resme=mysql_query($sqlme);   		
$_GET['id']=$id;
//$id='number';
// 查詢帳號
/*if ($_GET['message_no']) {
	$sql = $sql."where message_no=".$id;
}*/
?>				
<table >
<tr>
<?while ($row=mysql_fetch_array($resm)) {?>
            <td rowspan='4' valign='top'><img style='margin-right:20px;' src=./photo/personal/<?=$row[gif]?> width=100 height=100></td></tr>
			<tr><td>姓名：<?=$row[name]?><br></td></tr>
			<tr><td>帳號：<?=$row[id]?><br></td></tr>
			<tr><td>電話：<?=$row[tel]?><br></td></tr>
<?}?>
		</tr>
</table>
</div>

<div>
<form name="form" method="post" action="addmessage.php" >
<h2 class=form-signin-heading>留言</h2>
<p>
信箱
<input type="email" name="email" class="form-control" placeholder="輸入信箱">
<br>
內容
<textarea name="content" rows=10 cols=30 class="form-control" placeholder="輸入內容" ></textarea>
<br>

<!-- <input type="hidden" name="id" value=<?=$row[id]?>>
<input type="hidden" name="name" value=<?=$row[name]?>>
<input type="hidden" name="message_name" value=<?=$rowme[message_name]?>>
<input type="hidden" name="message_id" value=<?=$rowme[message_id]?>>
 <input type="hidden" name="message_no" value=<?=$rowme[message_no]?>> -->
 <a href="newuser.php">
 <button class="btn btn-large btn-primary" type=submit>留言</button></a>&nbsp;&nbsp;&nbsp;
  <button class="btn btn-large btn-primary" type=reset> 重置</button> 
</form>
		
<!-- 表格表題 -->
<div >
<!--  '總共有' .mysql_num_rows($result).'筆留言' -->
<div class='table-responsive'>
<table class='table table-striped' >
<?// 表格內容
    //$sql="select * from member where id='$_GET[id]' and password='$_GET[password]'";
	//$result=mysql_query($sql);
//if ($row=mysql_fetch_array($result))
//{
?>
	<?while ($rowme=mysql_fetch_array($resme)) {?>
<tr>
			<td data-th><?=$rowme[message_no]?></td>
			<td data-th><?=$rowme[message_name]?></td>
			<td data-th><?=$rowme[message_email]?></td>
			<td data-th><?=$rowme[message_content]?></td>
			<td data-th><?=$rowme[message_date]?></td>
			<td data-th><a href=edit_message.php?message_no=<?=$rowme[message_no]?>>編輯<a></td>
			<td data-th><a href=message.php?del=<?=$rowme[message_no]?>>刪除<a></td>
		</tr>
<?}?>
</table>
</div>
</div>

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