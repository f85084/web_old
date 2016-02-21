<!DOCTYPE html>
<html lang="zh-Hant"><head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name=description content="">
    <meta name=author content="">
    <link rel=icon href=photo/index/an_logo.ico>
    <title>An</title>

        <link href=css/bootstrap.min.css rel=stylesheet>
            <link href=css/other.css rel=stylesheet>
    <!--<link href=/Content/AssetsBS3/examples/navbar-static-top.css rel=stylesheet> <!--[if lt IE 9]><script src=~/Scripts/AssetsBS3/ie8-responsive-file-warning.js></script><![endif]-->

	<script src=/Scripts/AssetsBS3/ie-emulation-modes-warning.js></script> <!--[if lt IE 9]><script src=https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js></script><script src=https://oss.maxcdn.com/respond/1.4.2/respond.min.js></script><![endif]-->
    <?
include ('mydb.php');
include ('index_action.php');
ob_start(); 
session_start();
$_SESSION['flag']='0';
ob_end_flush();
?>

    <style>
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
                <li class=active><a href=index-share.php>美食分享</a>
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
    <div class=container>
        <div class=page-header>
      <h1>美食分享</h1></div>
            <p class=lead> </p>

                             <div class=container>
                             <div class=jumbotron>
                            <h2>J.S. Foodies</h2>
							<h5>
                            <p>J.S. Foodies<br />
店家資訊<br />
地址：新北市林口區文化三路一段356號2F(戶外區)<br />
電話：(02)2606-8666<br />
營業時間<br />
平日(週一至週四)及例假日 11：00～21：30<br />
例假日前一日(週五、週六) 11：00～22：00<br />
				<br />			</h5>
							<img id="fx" src="photo/index/2015-10-1.jpg"/>
</div></div>
<!--內文-->        
    <script src=https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js></script>
        <script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js></script>
       <!-- <script src=/Scripts/AssetsBS3/ie10-viewport-bug-workaround.js></script>-->
</body>
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