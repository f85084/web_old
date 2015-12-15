<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width, initial-scale=1.0">
    <meta name=description content="">
    <meta name=author content="">
    <link rel=icon href=/photo/index/an_logo.ico>
    <title>分享</title>

<?
include ('mydb.php');
include ('index_action.php');
session_start();
$_SESSION['flag']='0';

?>
    <style>

    </style>
    <link href=css/index/index1119.css rel=stylesheet> <!--[if lt IE 9]><script src=~/Scripts/BS2/html5shiv.js></script><![endif]-->
    <link href=css/index/bootstrap-responsive.css rel=stylesheet>
    <link rel=apple-touch-icon-precomposed sizes=144x144 href=/Images/BS2/ico/apple-touch-icon-144-precomposed.png>
    <link rel=apple-touch-icon-precomposed sizes=114x114 href=/Images/BS2/ico/apple-touch-icon-114-precomposed.png>
    <link rel=apple-touch-icon-precomposed sizes=72x72 href=/Images/BS2/ico/apple-touch-icon-72-precomposed.png>
    <link rel=apple-touch-icon-precomposed href=/Images/BS2/ico/apple-touch-icon-57-precomposed.png>
    <link rel="shortcut icon" href=/Images/BS2/ico/favicon.png>
    <link href=css/index/css1026.css rel=stylesheet type="text/css">
    </head>
<body>

 <!--menu 開始-->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class=navbar-inner>
            <div class=container>
              <button type=button class="btn btn-navbar" data-toggle=collapse data-target=.nav-collapse> <span class=icon-bar></span> <span class=icon-bar></span> <span class=icon-bar></span> </button>
                <a class=brand href=index.php>An's旅</a>
                <div class="nav-collapse collapse">
                  <ul class=nav>
                  <li class=dropdown>                  
                  <li class=dropdown><a href=index-share.php>分享</a>
                  <li class=dropdown> <a href=# class=dropdown-toggle data-toggle=dropdown>國外<b class=caret></b></a>
                    <ul class=dropdown-menu>
                      <li><a href=japan.php>日本</a>
                      <li><a href=#>韓國</a>
                    </ul>
                  <li class=dropdown> <a href=# class=dropdown-toggle data-toggle=dropdown>國內<b class=caret></b></a>
                    <ul class=dropdown-menu>
                      <li><a href=#>北</a>
                      <li><a href=#>中</a>
                      <li><a href=#>南</a>
                    </ul>
                  <li class=dropdown> <a href=# class=dropdown-toggle data-toggle=dropdown>Dropdown <b class=caret></b></a>
                    <ul class=dropdown-menu>
                      <li><a href=#>公告</a>
                      <li><a href=#>簡介</a>
                      <li><a href=#>連結</a>
                      <li class=divider>                    
                      <li class=nav-header>Nav header
                      <li><a href=#>Separated link</a>
                      <li><a href=#>One more separated link</a>
                    </ul>
                  </ul>

           <form name="login" method="get" action="" class="navbar-form pull-right" id="login" >
                           <?
				 if(!$row=mysql_fetch_array($result)){
				  echo '<br><a href=login.php>登入</a>';	  }
				  else{
				    echo '你好'.$row['name'];
				   }
				  echo '<br><a href=message.php>會員專區</a>';
				  echo '<br><a href=logout_action.php>登出</a>';
				  
                                              ?>

</form>
</div>
            </div>
        </div>
    </div>
    <!--menu 結束-->
    <div class=container>
        <div class=page-header>
      <h1>Sticky footer with fixed navbar</h1></div>
            <p class=lead>Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body > .container</code>.
<p>Back to <a href="/bs3/Examples?name=sticky-footer">the default sticky footer</a> minus the navbar.</div>
                             <div class=container>
                             <div class=jumbotron>
                            <h1>Hello, world!</h1>
                            <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.<img id="fx" src="photo/index/2015-10-1.jpg"/>
</div></div>

        <script src=https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js></script>
        <script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js></script>
        <script src=/Scripts/AssetsBS3/ie10-viewport-bug-workaround.js></script>
        <!--FOOTER S-->
    <footer class="rwd-footer clearfix">

        <ul class="contact">
            <li><a href="tel:0800"><i class="icon-phone"></i>0800</a></li>
            <li><a href="mailto:Anna's"><i class="icon-email"></i>Anna's</a></li>
        </ul>
    </div>
    <p class="copyright">© <span id="spanCopyYear">1990</span> Anna's All Rights Reserved.</p>
</footer>
    <!--FOOTER E-->
	<script type="text/javascript">
	    document.getElementById('spanCopyYear').innerHTML = (new Date()).getFullYear();</script>    
</body>