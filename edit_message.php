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

<?
include ('mydb.php');
session_start();

$message_no=$_GET['message_no'];
	$sqlm="SELECT * FROM message where message_no='$message_no'";
	$resm=mysql_query($sqlm);
    $dm=mysql_fetch_array($resm);

$number=$_GET['number'];
	echo $number;
	$sqli="SELECT * FROM member where number='$number'";
	$resi=mysql_query($sqli);
    $da=mysql_fetch_array($resi);

?>
<script language="JavaScript">
        function strim(str){
            return str.replace(/(^\s*)|(\s*$)/g, "");
            	}
        function check_empty() {
            ierror = 0;
            message = '';			
																
					if(ierror ==1){ 
						alert(message);
					}else{
					document.form1.submit(); 
					}
                }        
            </script> 
			
<body>
<div id="dialog-form" title="Create new user">
<div class="container">
<div class="col-md-6 col-md-offset-3">
<div class="row">


<form name="form1" method="post" action="edit_modify.php"  enctype="multipart/form-data" class=form-signin-heading>
<h2 class=form-signin-heading>修改留言</h2>
<p></p>
<?
$sql="select * from message where 
message_no=$message_no";
$result=mysql_query($sql);
$a=mysql_fetch_array($result);
?>

信箱
<input type="email" name="message_email" class="form-control" placeholder="輸入信箱" value="<?= $dm[message_email]; ?>">
內容
<textarea name="message_content" rows=10 cols=30 class="form-control" placeholder="輸入內容" value="<?= $dm[message_content]; ?>"><?= $dm[message_content]; ?></textarea>
<br>
 <a href="edit_modify.php"> <button class="btn btn-large btn-primary" type=submit>送出</button></a><input type="hidden" name="act" value="add" />
<div id="subm_1" style="height:20px;"><input type="button" value="送出" onclick="check_empty(this.form)" /><input type="hidden" name="act" value="add" /></div>

<button class="btn btn-large btn-primary" type=reset> 重置</button> 
</form>
</div>
</div>
</div>
</div>
<? if($error=='ok'){?>
<script>
alert('更新成功');
parent.referu('');
</script>
<? }elseif(!empty($error)){?>
<script>
alert('<?=$error?>');
history.go(-1)
</script>
<? }?>
</html>
</body>