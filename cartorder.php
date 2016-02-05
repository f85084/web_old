<?php
//加入購物車Class的宣告
require_once('cart/EDcart.php');
session_start();
$cart =& $_SESSION['edCart']; 
if(!is_object($cart)) $cart = new edCart(); 
?>
<?php
$cart->deliverfee = 100; //請設定購物車的運費
?>
<?php
//購物車為空時重新導向指定頁
if ($cart->itemcount == 0){
	header("Location:index.php?errMsg=true");
}
?>
<?php require_once('Connections/connSQL.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO orders (SubTotal, Shipping, GrandTotal, CustomerName, CustomerEmail, CustomerAddress, CustomerPhone, paytype) VALUES (%s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['SubTotal'], "int"),
                       GetSQLValueString($_POST['Shipping'], "int"),
                       GetSQLValueString($_POST['GrandTotal'], "int"),
                       GetSQLValueString($_POST['CustomerName'], "text"),
                       GetSQLValueString($_POST['CustomerEmail'], "text"),
                       GetSQLValueString($_POST['CustomerAddress'], "text"),
                       GetSQLValueString($_POST['CustomerPhone'], "text"),
                       GetSQLValueString($_POST['paytype'], "text"));

  mysql_select_db($database_connSQL, $connSQL);
  $Result1 = mysql_query($insertSQL, $connSQL) or die(mysql_error());

//取得最新的訂單編號
  $max_id = mysql_insert_id();
  $_SESSION['OrderID'] = $max_id; //將編號存入Session值中

//將購物車的詳細內容一筆筆寫入資料表
  if($cart->itemcount > 0) {
    	foreach($cart->get_contents() as $item) {
	  	$insertSQL = sprintf("INSERT INTO orderdetail (OrderID, ProductID, ProductName, UnitPrice, Quantity) VALUES (%s, %s, %s, %s, %s)",
    	                   GetSQLValueString($max_id, "int"),
        	               GetSQLValueString($item['id'], "int"),
        	               GetSQLValueString($item['info'], "text"),				   
            	           GetSQLValueString($item['price'], "int"),
                	       GetSQLValueString($item['qty'], "int")); 
		mysql_select_db($database_connSQL, $connSQL);
		$Result1 = mysql_query($insertSQL, $connSQL) or die(mysql_error()); 
		}
  }
  
  $insertGoTo = "cartok.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>織夢數位購物網</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="warp">
  <div id="header">
    <div class="logo"></div>
  </div>
  <div id="content"> <img src="images/cartTitle2.png" width="920" height="29" />
    <div id="sidediv">
      <div class="sidemenu">資訊中心</div>
      <ul>
        <li><a href="cart.php">檢視購物車</a></li>
        <li><a href="cartordercheck.php">查詢訂單 </a></li>
        <li><a href="index.php">回到首頁</a></li>
      </ul>
    </div>
    <div id="maindiv">
      <form action="<?php echo $editFormAction; ?>" method="POST" name="form1" id="form1">
        <p class="title">確定訂單內容</p>
        <p class="subject">購物清單</p>
        <table width="90%" border="0" align="center" cellpadding="4" cellspacing="0">
          <tr>
            <th align="center"><strong>商品名稱</strong></th>
            <th width="80" align="center"><strong>單價</strong></th>
            <th width="80" align="center"><strong>數量</strong></th>
            <th width="100" align="center"><strong>金額</strong></th>
          </tr>
          <?php
if($cart->itemcount > 0) {
	foreach($cart->get_contents() as $item) {
?><tr>
            <td bgcolor="#FFFFFF"><?php echo $item['info'];?></td>
            <td width="80" align="center" bgcolor="#FFFFFF">$<?php echo $item['price'];?></td>
            <td width="80" align="center" bgcolor="#FFFFFF"><?php echo $item['qty'];?></td>
            <td width="100" align="center" bgcolor="#FFFFFF"><strong>$ <?php echo $item['subtotal'];?></strong></td>
          </tr><?php
	}
}
?>
          <tr>
            <td colspan="3" align="left" bgcolor="#FFFFFF" class="upline"><strong>小計</strong></td>
            <td align="center" bgcolor="#FFFFFF" class="upline"> $ <?php echo $cart->total;?></td>
          </tr>
          <tr>
            <td colspan="3" align="left" bgcolor="#FFFFFF" class="upline"><strong>運費</strong> (固定運費 100 元) </td>
            <td width="100" align="center" bgcolor="#FFFFFF" class="upline">$ <?php echo $cart->deliverfee;?></td>
          </tr>
          <tr>
            <td colspan="3" align="left" bgcolor="#FFFFFF"><strong>總計
              <input name="SubTotal" type="hidden" id="SubTotal" value="<?php echo $cart->total;?>" />
              <input name="Shipping" type="hidden" id="Shipping" value="<?php echo $cart->deliverfee;?>" />
              <input name="GrandTotal" type="hidden" id="GrandTotal" value="<?php echo $cart->grandtotal;?>" />
            </strong></td>
            <td align="center" bgcolor="#FFFFFF"><strong><font color="#FF0000">$ <?php echo $cart->grandtotal;?></font></strong></td>
          </tr>
        </table>
        <p class="subject">客戶資訊</p>
        <table width="90%" border="0" align="center" cellpadding="4" cellspacing="0">
          <tr>
            <th width="100" align="center">資訊</th>
            <th>內容</th>
          </tr>
          <tr>
            <td width="100" align="center" bgcolor="#FFFFFF"><strong>姓名</strong></td>
            <td bgcolor="#FFFFFF"><input name="CustomerName" type="text" class="normalinput" id="CustomerName" /></td>
          </tr>
          <tr>
            <td width="100" align="center" bgcolor="#FFFFFF"><strong>聯絡電話</strong></td>
            <td bgcolor="#FFFFFF"><input name="CustomerPhone" type="text" class="normalinput" id="CustomerPhone" /></td>
          </tr>
          <tr>
            <td align="center" bgcolor="#FFFFFF"><strong>住址</strong></td>
            <td bgcolor="#FFFFFF"><input name="CustomerAddress" type="text" class="normalinput" id="CustomerAddress" size="40" /></td>
          </tr>
          <tr>
            <td align="center" bgcolor="#FFFFFF"><strong>電子郵件</strong></td>
            <td bgcolor="#FFFFFF"><input name="CustomerEmail" type="text" class="normalinput" id="CustomerEmail" /></td>
          </tr>
          <tr>
            <td align="center" bgcolor="#FFFFFF"><strong>付款方式</strong></td>
            <td bgcolor="#FFFFFF"><input name="paytype" type="radio" value="ATM 轉帳" checked="checked" />
              ATM 轉帳
              <input name="paytype" type="radio" value="郵政劃撥" />
              郵政劃撥</td>
          </tr>
        </table>
        <div style="clear:both"></div>
        <table border="0" align="center" cellpadding="10" cellspacing="0">
          <tr>
            <td><input type="button" name="Submit" value="繼續購物" onclick="window.location='index.php'" /></td>
            <td><input type="button" name="Submit1" value="修改購物車內容" onclick="window.location='cart.php'" /></td>
            <td><input type="submit" name="Submit2" value="確認購買" /></td>
          </tr>
        </table>
        <input type="hidden" name="MM_insert" value="form1" />
      </form>
    </div>
    <div style="clear:both"></div>
  </div>
  <div id="footer"></div>
</div>
</body>
</html>