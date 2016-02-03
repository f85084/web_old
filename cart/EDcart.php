<?php
/*
�� webforce cart v.1.2 �ק� (http://webforce.co.nz/cart)
---------------------------------------------------------
*/
class edCart {
	var $total = 0;
	var $deliverfee = 0; //�ק�A�B�O
	var $grandtotal = 0; //�[�W�F�B�O�᪺�`�X�O��
	var $itemcount = 0;
	var $items = array();
	var $itemprices = array();
	var $itemqtys = array();
	var $iteminfo = array();
	var $itempic = array();	

	function cart() {} // �ŧi���

	function get_contents(){ // ���o�ʪ������e
		$items = array();
		foreach($this->items as $tmp_item){
		    $item = FALSE;
			$item['id'] = $tmp_item;
			$item['qty'] = $this->itemqtys[$tmp_item];
			$item['price'] = $this->itemprices[$tmp_item];
			$item['info'] = $this->iteminfo[$tmp_item];
			$item['pic'] = $this->itempic[$tmp_item];
			$item['subtotal'] = $item['qty'] * $item['price'];
			$items[] = $item;
		}
		return $items;
	} 


	function add_item($itemid,$qty=1,$price = FALSE, $info = FALSE, $pic = FALSE){ // �s�W���ʪ���
		//if(!$price){
			//$price = ed_get_price($itemid,$qty);
		//}
		//if(!$info){
			//$info = ed_get_info($itemid);
		//}
		if(isset($this->itemqtys[$itemid]) && $this->itemqtys[$itemid] > 0){ 
			$this->itemqtys[$itemid] = $qty + $this->itemqtys[$itemid];
			$this->_update_total();
		} else {
			$this->items[]=$itemid;
			$this->itemqtys[$itemid] = $qty;
			$this->itemprices[$itemid] = $price;
			$this->iteminfo[$itemid] = $info;
			$this->itempic[$itemid] = $pic;			
		}
		$this->_update_total();
	} 


	function edit_item($itemid,$qty){ // ��s�ʪ����ƶq
		if($qty < 1) {
			$this->del_item($itemid);
		} else {
			$this->itemqtys[$itemid] = $qty;
		}
		$this->_update_total();
	} 


	function del_item($itemid){ // �����ʪ���
		$ti = array();
		$this->itemqtys[$itemid] = 0;
		foreach($this->items as $item){
			if($item != $itemid){
				$ti[] = $item;
			}
		}
		$this->items = $ti;
		$this->_update_total();
	} 


	function empty_cart(){ // �M���ʪ���
		$this->total = 0;
		$this->itemcount = 0;
		$this->items = array();
		$this->itemprices = array();
		$this->itemqtys = array();
		$this->itemdescs = array();
	} 


	function _update_total(){ // ��s�ʪ��������e
		$this->itemcount = 0;
		$this->total = 0;
		if(sizeof($this->items > 0)){
			foreach($this->items as $item) {
				$this->total = $this->total + ($this->itemprices[$item] * $this->itemqtys[$item]);
				$this->itemcount++;
			}
		}
		$this->grandtotal = $this->total + $this->deliverfee; //�p��̫��`�p
	} 
}
?>
EDcart.php
�� 5 ���A�@ 6 ��
_�Ѧҵ{���Xaddtocart.phpcartok.phpcartorder.phpEDcart.php�ʪ����ثe��ܪ��O�uEDcart.php�v�C