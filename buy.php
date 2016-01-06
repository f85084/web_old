<!DOCTYPE html>
<html lang=en><head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name=description content="">
    <meta name=author content="">
    <link rel=icon href=/web/photo/index/an_logo.ico>
    <title>An</title>
    <link href=/web/css/index/bootstrap.min.css rel=stylesheet>
    <!--<link href=/Content/AssetsBS3/examples/navbar-static-top.css rel=stylesheet> <!--[if lt IE 9]><script src=~/Scripts/AssetsBS3/ie8-responsive-file-warning.js></script><![endif]-->
    <link href=/web/css/index/other.css rel=stylesheet>

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
<nav class="navbar navbar-default navbar-static-top" role=navigation>
    <div class=container>
        <div class=navbar-header>
            <button type=button class="navbar-toggle collapsed" data-toggle=collapse data-target=#navbar aria-expanded=false aria-controls=navbar> <span class=sr-only>Toggle navigation</span> <span class=icon-bar></span> <span class=icon-bar></span> <span class=icon-bar></span> </button>
            <a class=navbar-brand href=index.php>An's</a>
        </div>
        <div id=navbar class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class=active><a href=index.php>Home</a>
                <li><a href=index-share.php>分享</a>
                <li class=dropdown>
                    <a href=# class=dropdown-toggle data-toggle=dropdown role=button aria-expanded=false>國外<span class=caret></span></a>
                    <ul class=dropdown-menu role=menu>
                        <li><a href=japan.php>日本</a>
                        <li><a href=#>韓國</a>
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
                        <li><a href=#>北</a>
                        <li><a href=#>中</a>
                        <li><a href=#>南</a>
                       <!-- <li class=divider>
                             <li class=dropdown-header>Nav header
                 <li><a href=#>Separated link</a>
                 <li><a href=#>One more separated link</a>-->
                    </ul>
                <li><a href=buy.php>行程</a>
</ul>
            <ul class="nav navbar-nav navbar-right">
                <!--<li>
                    <a href=/bs3/Examples/navbar>Default <span class=sr-only>(current)</span></a>
                <li class=active>
                    <a href=/bs3/Examples/navbar-static-top>Static top <span class=sr-only>(current)</span></a>
                <li><a href=/bs3/Examples/navbar-fixed-top>Fixed top</a>-->
                <li><a href=#>公告</a>
                <li><a href=#>簡介</a>
                <li><a href=#>連結</a>
                <li>  <?
				 if(!$row=mysql_fetch_array($result)){
				  echo '<br><li><a href=login.php>登入</a>';	 
				   }
				  else{
				    echo '<br><li><a>你好'.$row['name'];
					
				   }
                        ?>
                 <li><a href=message.php>會員專區</a>
                 <li><a href=logout_action.php>登出</a>
</ul>
        </div>
    </div>
</nav>

<!--menu 結束-->
<!--內文-->
<div class="frame">
    <div class="row">
      <div class="col-xs-6 col-sm-3">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjkzIiB5PSIxMDAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTFwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4yNDJ4MjAwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-3">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjkzIiB5PSIxMDAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTFwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4yNDJ4MjAwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-3">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjkzIiB5PSIxMDAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTFwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4yNDJ4MjAwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
            <div class="col-xs-6 col-sm-3">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjkzIiB5PSIxMDAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTFwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4yNDJ4MjAwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
    </div>
    </div>
<div class="frame">
    <div class="row">
      <div class="col-xs-6 col-sm-3">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjkzIiB5PSIxMDAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTFwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4yNDJ4MjAwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-3">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjkzIiB5PSIxMDAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTFwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4yNDJ4MjAwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-3">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjkzIiB5PSIxMDAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTFwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4yNDJ4MjAwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
            <div class="col-xs-6 col-sm-3">
        <div class="thumbnail">
          <img data-src="holder.js/100%x200" alt="100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjkzIiB5PSIxMDAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTFwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4yNDJ4MjAwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
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