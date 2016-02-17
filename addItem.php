<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
<?php
header('Content-type: text/html; charset=utf-8');
include ('mydb.php');
require_once "inc/class/Car.class.php";
 
session_start();
 
$Cart = new Cart();
 
$sn = $_GET["sn"];
$num = $_GET['num'];
//echo $sn;
if(!is_numeric($num))
$num = 1;
$sql="select * from product ";
$result=mysql_query($sql);
while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
if(isset($sn) && strlen(trim($sn))>0 && is_numeric($sn)){
    $Cart->addItem($sn, "$row[product_name]", "$row[product_sale_price]", $num, "$row[product_text]", "單位");
}
}
//加入成功後回到前一頁
$referer  = $_SERVER['HTTP_REFERER'];
if(strlen(trim($referer))==0)
$referer = "shop.php";
 
header("Location:$referer");
?>
</head>

<body>
</body>
</html>