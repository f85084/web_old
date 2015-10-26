<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name=description content="">
    <meta name=author content="">
    <link rel=icon href=/Content/AssetsBS3/img/favicon.ico>
    <title>Sticky Footer Navbar Template for Bootstrap</title>
    <!--<link href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css rel=stylesheet>-->
    <link href=css/index/css1026.css rel=stylesheet type="text/css">
    <!--[if lt IE 9]><script src=~/Scripts/AssetsBS3/ie8-responsive-file-warning.js></script><![endif]-->
    <script src=/Scripts/AssetsBS3/ie-emulation-modes-warning.js></script>
    <!--[if lt IE 9]><script src=https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js></script><script src=https://oss.maxcdn.com/respond/1.4.2/respond.min.js></script><![endif]-->

    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role=navigation>
            <div class=container>
                <div class=navbar-header>
                    <button type=button class="navbar-toggle collapsed" data-toggle=collapse data-target=#navbar aria-expanded=false aria-controls=navbar> <span class=sr-only>Toggle navigation</span> <span class=icon-bar></span> <span class=icon-bar></span> <span class=icon-bar></span> </button> <a class=navbar-brand href=#>Project name</a></div>
                <div id=navbar class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class=active><a href=#>Home</a>
                            <li><a href=#about>About</a>
                                <li><a href=#contact>Contact</a>
                                    <li class=dropdown><a href=# class=dropdown-toggle data-toggle=dropdown role=button aria-expanded=false>Dropdown <span class=caret></span></a>
                                        <ul class=dropdown-menu role=menu>
                                            <li><a href=#>Action</a>
                                                <li><a href=#>Another action</a>
                                                    <li><a href=#>Something else here</a>
                                                        <li class=divider>
                                                            <li class=dropdown-header>Nav header
                                                                <li><a href=#>Separated link</a>
                                                                    <li><a href=#>One more separated link</a></ul>
                    </ul>
                </div>
            </div>
        </nav>
        <div class=container>
            <div class=page-header>
                <h1>Sticky footer with fixed navbar</h1></div>
            <p class=lead>Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body > .container</code>.
                <p>Back to <a href="/bs3/Examples?name=sticky-footer">the default sticky footer</a> minus the navbar.</div>
                                  <div class=jumbotron>
                            <h1>Hello, world!</h1>
                            <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.
                             <img id="fx" src="photo/index/2015-10-1.jpg"/>
</div>
        <footer class=footer>
            <div class=container>
                <p class=text-muted>Place sticky footer content here.</div>
        </footer>
        <script src=https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js></script>
        <script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js></script>
        <script src=/Scripts/AssetsBS3/ie10-viewport-bug-workaround.js></script>