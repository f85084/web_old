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
session_start();
$_SESSION['flag']='0';

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
                <li class=active><a href=index.php>Home</a>
                <li><a href=index-share.php>美食分享</a>
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
                <li><a href=#>連結</a>
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
                <li><a href=message.php><span class="glyphicon-class">購物車</span></a>
                        
                 
</ul>
        </div>
    </div>
</nav>

<!--menu 結束-->
    <!-- Page Content -->

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class='list-group'>
                    <a href='shop_japan.php' class='list-group-item'>日本</a>
                    <a href='shop_korea.php' class='list-group-item'>韓國</a>
                    <a href='shop_hk.php' class='list-group-item'>香港</a>
                </div>
            </div>

            <div class='col-md-9'>
                <div class='row carousel-holder'>
                    <div class'col-md-12'>
                        <div id='carousel-example-generic' class='carousel slide' data-ride='carousel'>
                            <ol class='carousel-indicators'>
                                <li data-target='#carousel-example-generic' data-slide-to='0' class='active'></li>
                                <li data-target='#carousel-example-generic' data-slide-to='1'></li>
                                <li data-target='#carousel-example-generic' data-slide-to='2'></li>
                            </ol>


		<div class='carousel-inner'>
                                <div class='item active'>
                                    <img class='slide-image' src='http://placehold.it/800x300' alt=''>
                                </div>
                                <div class='item'>
                                    <img class='slide-image' src='http://placehold.it/800x300' alt=''>
                                </div>
                                <div class='item'>
                                    <img class='slide-image' src='http://placehold.it/800x300' alt=''>
                                </div>
                            </div>
                            <a class='left carousel-control' href='#carousel-example-generic' data-slide='prev'>
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class='right carousel-control' href='#carousel-example-generic' data-slide='next'>
                                <span class='glyphicon glyphicon-chevron-right'></span>
                                
                            </a>
                        </div>
                    </div>

                </div>
     <div class='row'>
     <table class='table table-striped' >
	<?
	
$sql="select * from product where product_display='y' ";
$result=mysql_query($sql);
while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
echo " 

		<tr>";
                   echo " <div class='col-sm-4 col-lg-4 col-md-4'>
                        <div class='thumbnail'>
							 <img src=./photo/$row[product_pic1] width=100 height=50>
                            <div class='caption'>
                                <h4 class='pull-right'>特價$$row[4]</h4>
                                <h4>
                                  <a href='shop_page.php?product_number=$row[0]'>$row[product_name]</a>
                                </h4>
                                <p class='over'>$row[5]</p>

								<p class='pull-right'><a href='#' class='btn btn-primary' role='button' onclick='location='addItem.php?sn=1';'>立即購買</a> <a href='shop_page.php?product_number=$row[0]' class='btn btn-default' role='button'>更多</a></p>
                            </div>
                            <div class='ratings'>
                                <p class='pull-right'>15 reviews</p>
                                <p>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                </p>
                            </div>
                            </div>
					    </div>"
;}?>
</table>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4>
                          <a href="#">Like this template?</a>
                        </h4>
                        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>
                </div>
            </div>
    </div>
        </div>
    <!-- /.container -->

   <!-- <div class="container">-->

        <hr>

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

    </div>
    <!-- /.container -->
<!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>  
</body>

</html>
