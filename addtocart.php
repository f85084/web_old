<?php
//�[�J�ʪ���Class���ŧi
require_once('cart/EDcart.php');
session_start();
$cart =& $_SESSION['edCart']; 
if(!is_object($cart)) $cart = new edCart(); 
?>
<?php
//�����ʪ����ʧ@
$DoSomeThing = (isset($_GET['A']) ? $_GET['A'] : "");
switch($DoSomeThing){
case "Add":
	$cart->add_item($_GET['prono'],1,$_GET['price'],$_GET['name'],isset($_GET['pic'])?$_GET['pic']:'');
	break;
case "Remove":
	$cart->del_item($_GET['prono']);
	break;
case "Empty":
	$cart->empty_cart();
	break;
case "Update":
	for($startNO=0;$startNO < $_GET['itemcount'];$startNO++){
		$cart->edit_item($_GET['itemid'][$startNO],$_GET['qty'][$startNO]);
	}
	break;			
}
?>
<?php header("Location:cart.php");?>