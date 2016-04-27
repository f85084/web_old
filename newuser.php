<!DOCTYPE html>
<html lang="zh-Hant">

<head><meta charset=utf-8>
<title>註冊</title>
    <meta name=viewport content="width=device-width, initial-scale=1">
<meta name=description content="">
<meta name=author content="">
    <link rel=icon href=photo/index/an_logo.ico>
        <link href=css/bootstrap.min.css rel=stylesheet>
      <!--   <link href=css/other.css rel=stylesheet>
-->
<style>
/*整體字型、背景*/
body{
	font-family: Arial, 微軟正黑體;
	}

</style>

 <script>

function check_pw(pw) {
	var re = /^[A-Z][a-z]\d{6}$/;
	if (!re.test(pw.value)){
		alert("請輸入大、小寫英文字母，以及6位數字，總共8碼");		
	}
	else 
		return true;		
}
function ck_pe(pe) {
	var re = /^\d{4}$/;	
	if (!re.test(pe.value)){
		alert("請輸入分機號碼入長度為 4");		
	}
	else 
		return true;	
}
function ck_ce(ce) {
	var re = /^[09]{2}[0-9]{8}$/;
	if (!re.test(ce.value)){
		alert("請輸入手機號碼，開頭為09 長度為10位數");		
	}
	else 
		return true;		
}
function ck_pw(){
	if(newuser.pass_word.value==""){
		alert("請輸入密碼");
		newuser.pass_word.focus();
		return false;
				}
	if(newuser.pass_word2.value==""){
		alert("請再次輸入密碼");
		newuser.pass_word2.focus();
		return false;			
				}
	if(newuser.pass_word.value != newuser.pass_word2.value){
		alert("兩次輸入密碼不同");
		newuser.pass_word.value=="";
		newuser.pass_word2.value=="";
		newuser.pass_word.focus();
		return false;			
					}
		return true;			
			}
	
</script> 
<script>
function check_fm(form) {
	if (!ck_pw(form.pass_word)) return;
	if (!ck_pe(form.phone)) return;
	if (!ck_ce(form.tel)) return;	
	if (!check_pw(form.pass_word)) return;
	//alert ("成功！\n表單即將送出！！！");
	document.newuser.submit();	// Submit form
}
</script>

<body>
               <!--內容B-->
			   <div class="container">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form role="form" name="newuser" id="newuser" method="post" action="adduser.php" enctype="multipart/form-data">    
                    <h2>請輸入基本資料</h2>                 
                        <div class="form-group">
                            <label>登入帳號</label>

                            <input type="text" name="id" class="form-control" id="exampleInputEmail1" placeholder="登入帳號" required autofocus> 
                        </div>
                        <div class="form-group">
                            <label>登入密碼</label>
                            <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="登入密碼" required autofocus> 
                        </div>
                        <div class="form-group">						
                            <label>再次確認密碼</label>
                            <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="再次確認密碼" required autofocus> 
                        </div>						
                        <div class="form-group">
                            <label>姓名</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="姓名" required autofocus> 
                        </div>
                        <div class="form-group">
                            <label>手機</label>
                            <input type="text" name="tel" class="form-control" id="exampleInputEmail1"  placeholder="手機" required autofocus> 
                        </div>
                        <div class="form-group">
                            <label>地址</label>
                            <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="地址" required autofocus> 
                        </div>                        
                        <div class="form-group">
                            <label>上傳照片</label>
                            <input type="file" name="gif" id="exampleInputFile" placeholder="上傳照片"required autofocus> 
                            <p class="help-block">會員圖片</p>
                        </div>

                        <button type="submit" class="btn btn-primary">送出</button>
                    </form>
                    <br>
                    <br>
                    <br>

                </div>
            </div>
        </div>
		        </div>
        <!-- /#page-wrapper -->
        <!--內容S-->
        <!-- /#wrapper -->