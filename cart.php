<!DOCTYPE html>
<html lang=en><head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name=description content="">
    <meta name=author content="">
    <link rel=icon href=/web/photo/index/an_logo.ico>
    <title>購物車</title>
    <link href=css/bootstrap.min.css rel=stylesheet>
    <!--<link href=/Content/AssetsBS3/examples/navbar-static-top.css rel=stylesheet> <!--[if lt IE 9]><script src=~/Scripts/AssetsBS3/ie8-responsive-file-warning.js></script><![endif]-->
    <link href=css/other.css rel=stylesheet>

	<script src=/Scripts/AssetsBS3/ie-emulation-modes-warning.js></script> <!--[if lt IE 9]><script src=https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js></script><script src=https://oss.maxcdn.com/respond/1.4.2/respond.min.js></script><![endif]-->
<!--<link href=http://f85084.github.io/css.css  rel=stylesheet>
-->



<style>
    <?
include ('mydb.php');
//include ('index_action.php');
include "inc/class/Car.class.php";
session_start();
$MyCart = new Cart();
$Myitems = $MyCart->getAllItems();
//$cart =& $_SESSION['edCart']; 
//if(!is_object($cart)) $cart = new edCart(); 
//$_SESSION['flag']='0';

?>
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/MyCar.js"></script>
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
<div class="row">
<div class="col-md-6 col-md-offset-3">
<?
echo '你好'.$row['name'].'請留言<br>';
$_SESSION['number']=$row['number'];
$_SESSION['message_no']=$row['message_no'];
?>

<div>
<h2>購物車</h2>

<div >
<form id='myform' action='OrderForm.php' method='post'
    onsubmit='return checkForm();'>
 <?
$sql = "select *from  `message`";
$_GET['id']=$id;

// 回傳結果
$result=mysql_query($sql);
// 表格表題   
echo '總共有' .mysql_num_rows($result).'筆留言';
?>
<table class='table table-striped' >
		<tr>
<td data-th>商品名稱</td>
<td data-th>規格</td>
<td data-th>價格</td>
<td data-th>數量</td>
<td data-th>總金額</td>
<td data-th>刪除</td>
		</tr>
        <?
        /*	$sql = "SELECT *FROM `message` WHERE message_id='$id'";
	$result=mysql_query($sql);
while ($row=mysql_fetch_array($result)) {
	echo 
		"<tr>
			<td data-th>$row[0]</td>
			<td data-th>$row[2]</td>
			<td data-th >$row[3]</td>
			<td data-th >$row[4]</td>
			<td data-th >$row[5]</td>
			<td data-th >X</td>
		</tr>";
}
echo "</table>";
echo "</div>";
*/
?>
<!--套程式-->
  <?php
 
    $checkcount = 0;
    if ($Myitems)
    {
        foreach ($Myitems as $key => $Myitem)
        {
            $checkcount ++;
            $background  = $checkcount%2==1?"bgcolor=\"#e7e7e7\"":"";
            //var_export($Myitem);
            ?>
    <tr id="item_<?php echo $Myitem->_sn;?>">
        <td <?php echo $background;?>><input type="hidden"
            name="item<?php echo $Myitem->_sn;?>"
            value="<?php echo $Myitem->_sn;?>"></input> <?php echo $Myitem->_name; ?></td>
        <td <?php echo $background;?>><?php echo $Myitem->_price; ?>元</td>
        <td <?php echo $background;?>><select
            name="Quity<?php echo $Myitem->_sn;?>" class="shopping_down"
            onchange="amount();">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select></td>
        <td <?php echo $background;?>>
        <table width="96" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td width="70%" align="center" valign="middle"><input
                    name="button<?php echo $Myitem->_sn; ?>" type="button"
                    class="shopping_bt" style="cursor: pointer;"
                    onclick="del(<?php echo $Myitem->_sn; ?>);" value="刪 除" /></td>
                <td width="30%" align="center" valign="middle"></td>
            </tr>
        </table>
        </td>
    </tr>
    <?php
        }
    }
    else{
        ?>
            <tr>
        <td bgcolor="#e7e7e7" colspan="4">目前無任何購物資料</td>
    </tr>
    <?php
    }
    ?>
</table>
 <table  border="0" cellpadding="5" cellspacing="0"
    style="margin-top: 10px;">
    <tr>
        <td colspan="2" align="right">總金額：<span class="shopping_w2"
            id="amount">0</span>元</td>
    </tr>
 
</table>
<script type="text/javascript">amount();</script>
 
<table  border="0" cellpadding="0" cellspacing="0"
    style="margin-top: 10px;">
    <tr>
        <td align="right"><input name="Submit2" type="submit"
            class="shopping_bt1" style="cursor: pointer;" value="下一步" /></td>
    </tr>
</table>
</form>

</div>
</div>
</div>
<!--程式結束--->
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