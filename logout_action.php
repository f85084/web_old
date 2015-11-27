<!DOCTYPE html>
<html lang=en><head><meta charset=utf-8>
<title>留言</title>
<meta name=viewport content="width=device-width, initial-scale=1.0">
<meta name=description content=""><meta name=author content="">
<link href=http://f85084.github.io/css.css  rel=stylesheet>
<body>
<?php session_start(); ?>

<?php
//將session清空
//unset($_SESSION['flag']);
session_destroy();
echo '登出中......';
header("location:index.php");
?>

</body>
</html>