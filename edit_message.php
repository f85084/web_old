<!DOCTYPE html>
<html lang=en><head><meta charset=utf-8>
<title>修改留言</title>
<meta name=viewport content="width=device-width, initial-scale=1.0">
    <link href=css/bootstrap.min.css rel=stylesheet>
    <link href=css/other.css rel=stylesheet>
	<script src=/Scripts/AssetsBS3/ie-emulation-modes-warning.js></script> 
	<!--[if lt IE 9]><script src=https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js></script>
	<script src=https://oss.maxcdn.com/respond/1.4.2/respond.min.js></script><![endif]-->
<!--<link href=http://f85084.github.io/css.css  rel=stylesheet>
-->
<style>

</style>
</html>
<?
include ('mydb.php');
session_start();
$_SESSION['message_no']=$row['message_no'];
$_SESSION['message_no']=$_GET['message_no'];
    $sql="select * from message where message_no='$_SESSION[message_no]'";
	$result=mysql_query($sql);
//echo $sql;
	$sqlin = "select number,id,name,tel,gif  from member where id='$_SESSION[id]'";
    $resin=mysql_query($sqlin); 
?>
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
                        <li><a href=japan.php>日本</a></li>
                        <li><a href=korea.php>韓國</a></li>
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
                        <li><a href=north.php>北</a></li>
                        <li><a href=medium.php>中</a></li>
                        <li><a href=south.php>南</a></li>
                       <!-- <li class=divider>
                             <li class=dropdown-header>Nav header
                 <li><a href=#>Separated link</a>
                 <li><a href=#>One more separated link</a>-->
                    </ul></li>
                <li><a href=shop.php>購買行程</a></li>
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
                <li><a href=#>公告</a></li>
                <li><a href=#>簡介</a>
                       <!-- <li class=div</li>ider>

                             <li class=dropdown-header>Nav header
                 <li><a href=#>Separated link</a>
                 <li><a href=#>One more separated link</a>-->
                    </ul></li>
                <li>  <?
				 if(!$row=mysql_fetch_array($resin)){
				  echo '<br><li><a href=login.php>登入</a>';	 
				   }
				  else{
				    echo '<br><li><a>你好'.$row['name'];
					echo '<br><li><a href=logout_action.php>登出</a>';
					echo '<li><a href=message.php>會員專區</a>';								
				   }
                        ?>

                <li><a href="cart.php"> 購物車 <span class="glyphicon glyphicon-shopping-cart"></span></a> </li>        
                 
</ul></li>
        </div>
    </div>
</nav>

<!--menu 結束-->
<body>

<div class="container">
<div class="col-md-6 col-md-offset-3">
<div class="row">


<form name="edit_message" method="post" action="edit_modify.php"  enctype="multipart/form-data" class=form-signin-heading>
<h2 class=form-signin-heading>修改留言</h2>
<p></p>
<?
$sql="select * from message where 
message_no=$_SESSION[message_no]";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
//echo $sql;
?>

信箱
<input type="email" name="message_email" class="form-control" placeholder="輸入信箱" value="<? echo $row[message_email]; ?>">
內容

<textarea name="message_content" rows=10 cols=30 class="form-control" placeholder="輸入內容"><? echo $row[message_content]; ?></textarea>
<br>
 <a href="edit_modify.php">
 <button class="btn btn-large btn-primary" type=submit>送出</button></a>
  <button class="btn btn-large btn-primary" type=reset> 重置</button> 

  
</form>
</div>
</div>
</div>
</body>