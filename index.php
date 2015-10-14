
<!DOCTYPE html>
<html lang=en>
<head>
<meta charset=utf-8>
<title>An's 旅</title>
<meta name=viewport content="width=device-width, initial-scale=1.0">
<meta name=description content="">
<meta name=author content="">
<link href="http://kkbruce.tw/Content/BS2/bootstrap.css" rel=stylesheet>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
<script>
//圖片縮圖
$(window).load(function(){
	$("img").each(function(i){
		if($(this).attr("alumb")=="true"){
			//移除目前設定的影像長寬
			$(this).removeAttr('width');
			$(this).removeAttr('height');
 
			//取得影像實際的長寬
			var imgW = $(this).width();
			var imgH = $(this).height();
 
			//計算縮放比例
			var w=$(this).attr("_w")/imgW;
			var h=$(this).attr("_h")/imgH;
			var pre=1;
			if(w>h){
				pre=h;
			}else{
				pre=w;
			}
 
			//設定目前的縮放比例
			$(this).width(imgW*pre);
			$(this).height(imgH*pre);
		}
	});
});
</script>
<style>
body {
	padding-top: 60px;
	padding-bottom: 40px
}

.sidebar-nav {
	padding: 9px 0
}

@media ( max-width :980px) {
	.navbar-text.pull-right {
		float: none;
		padding-left: 5px;
		padding-right: 5px
	}
}
</style>
<link href="http://kkbruce.tw/Content/BS2/bootstrap-responsive.css" rel=stylesheet>
<!--[if lt IE 9]><script src=~/Scripts/BS2/html5shiv.js></script><![endif]-->
<link rel=apple-touch-icon-precomposed sizes=144x144
	href=/Images/BS2/ico/apple-touch-icon-144-precomposed.png>
<link rel=apple-touch-icon-precomposed sizes=114x114
	href=/Images/BS2/ico/apple-touch-icon-114-precomposed.png>
<link rel=apple-touch-icon-precomposed sizes=72x72
	href=/Images/BS2/ico/apple-touch-icon-72-precomposed.png>
<link rel=apple-touch-icon-precomposed
	href=/Images/BS2/ico/apple-touch-icon-57-precomposed.png>
<link rel="shortcut icon" href=/Images/BS2/ico/favicon.png><br>
</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class=navbar-inner>
			<div class=container-fluid>
				<button type=button class="btn btn-navbar" data-toggle=collapse
					data-target=.nav-collapse>
					<span class=icon-bar></span> <span class=icon-bar></span> <span
						class=icon-bar></span>
				</button>
				<a class=brand href=#>An's 旅</a>
				<div class="nav-collapse collapse">
					<p class="navbar-text pull-right">
						<a href="Log in.php">登入 </a>
				  <ul class=nav>
						<li class=active><a href=#>Home</a>
						<li><a href=#about>About</a>
						<li><a href=book.php>Contact</a>
				  </ul>
				</div>
			</div>
		</div>
	</div>
	<div class=container-fluid>
	  <div class=row-fluid>
			<div class=span3>
				<div class="well sidebar-nav">
					<ul class="nav nav-list">
						<li class=nav-header>Sidebar
						<li><a href=#>Link</a>
						<li><a href=#>Link</a>
						<li class=nav-header>Sidebar
						<li><a href=#>Link</a>
						<li class=nav-header>Sidebar
						<li><a href=#>Link</a>
						<li><a href=#>Link</a>
					</ul>
				</div>
			</div>
			<div class=span9>
				<div class=hero-unit>
				  <h1>Hello!</h1>
					<p><img src="photo/index/2015-10-1.jpg" alumb="true" _w="400" _h="400" width="500"/></p>
					  <a href=# class="btn btn-primary btn-large">Learn more &raquo;</a>
			  </div>
				<div class=row-fluid>
					<div class=span4>
					  <h2>粉紅聯名</h2>
						<p><img src="img/1.jpg">
                        <p><a class=btn href=#>View details &raquo;</a>
					</div>
					<div class=span4>
					  <h2>新品9折</h2>
						<p><img src="img/2.jpg">
						<p><a class=btn href=#>View details &raquo;</a>
					</div>
					<div class=span4>
					  <h2>條紋&amp;格紋</h2>
						<p><img src="img/3.jpg">
					    <p><a class=btn href=#>View details &raquo;</a>
					</div>
				</div>
				<div class=row-fluid>
					<div class=span4>
					  <h2>暢銷現貨</h2>
						<p><img src="img/4.jpg">
                        <p><a class=btn href=#>View details &raquo;</a>
					</div>
					<div class=span4>
					  <h2>微暖春意</h2>
						<p><img src="img/5.jpg">
					    <p>
							<a class=btn href=#>View details &raquo;</a>
					</div>
					<div class=span4>
					  <h2>透膚春裝</h2>
					  <p><img src="img/6.jpg"><p>
                      <a class=btn href=#>View details &raquo;</a>			
					</div>
				</div>
			</div>
		</div>
		<footer>
			<p>&copy; Company 2013
	  </footer>
	</div>
</body>
</html>

	<script
		src="/bundles/BS2SourceJS?v=-O94v1sF-Ld_eoTZUXiBlhDnpnzgMMzrPRxNVzqBaqc1"></script>