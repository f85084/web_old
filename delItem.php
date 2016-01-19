<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>
<?php
header('Content-type: text/html; charset=utf-8');
require_once "inc/class/Car.class.php";
//request.getHeader("referer");
session_start();
 
$Cart = new Cart();
 
 
$sn = $_GET["sn"];
 
 
if(isset($sn) && strlen(trim($sn))>0 && is_numeric($sn)){
 
    $Cart->removeItem($sn);
    //echo '刪除成功!';
}
 
?>
<body>
</body>
</html>