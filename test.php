<!DOCTYPE html>
<html lang="zh-Hant">
<?
session_start();
$_SESSION['flag']='0';

?>
<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name=description content="">
    <meta name=author content="">
    <link rel=icon href=photo/index/an_logo.ico>
    <title>帳號登入</title>
        <link href=css/bootstrap.min.css rel=stylesheet>
         <link href=css/other.css rel=stylesheet>
    <!--[if lt IE 9]><script src=~/Scripts/AssetsBS3/ie8-responsive-file-warning.js></script><![endif]-->
    <script src=/Scripts/AssetsBS3/ie-emulation-modes-warning.js></script> 
    <script src="/Scripts/AssetsBS3/ie10-viewport-bug-workaround.js"></script>
    <!--[if lt IE 9]><script src=https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js></script><script src=https://oss.maxcdn.com/respond/1.4.2/respond.min.js></script><![endif]-->

    <body>
        <div class=container>
            <form class=form-signin role=form name="login" method="get" action="lonig_action.php" id="login">
                <h2 class=form-signin-heading>請登入</h2>
                <label for=inputEmail class=sr-only>輸入帳號</label> 
                <input type="id" id="id" name="id" class=form-control placeholder="輸入帳號" required autofocus> 
                <label for=inputPassword class=sr-only>輸入密碼</label> 
                <input type="password" id="password" name="password"class=form-control placeholder="輸入密碼">
                <div class=checkbox><label> <input type=checkbox value=remember-me> 忘記密碼 </label>
                </div><button class="btn btn-lg btn-primary btn-block" type=submit>登入</button></form>
        </div>
    <script src=https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js></script>
        <script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js></script>
