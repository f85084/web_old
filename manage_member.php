<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>後台</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?
    include ('mydb.php');
    include ('index_action.php');
    session_start();
    $_SESSION['flag']='1';

    ?>
</head>

<body>
    <!--目錄-->
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">An</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="pages/login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-user"></i>會員專區<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="manage_newuser.php">新增會員</a>
                                </li>
                                <li>
                                    <a href="manage_member.php">會員資料查詢</a>
                                </li>
                                <li>
                                    <a href="manage_message.php">會員留言</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-user"></i>產品專區<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="product_new.php">新增產品</a>
                                </li>
                                <li>
                                    <a href="product_list.php">產品列表</a>
                                </li>
                            </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <!--目錄-->
        <!--內容B-->
        <div id="page-wrapper">
        <!-- /#page-wrapper -->

        <a href=login.php>登出</a>
        <a href=modifymember.php>修改</a>
        <!--查詢-->
        <div class=form-Search>
            <form method="get" action="management.php">
                <!-- 單列文字輸入欄位 -->
                帳號:<input type="text" name="no"> <br>
                <input type="submit" value="查詢資料">
                <input type="reset" value="清除資料">
            </form>
        </div>
        <br>
    </body>

<?php

    // 刪除
    if ($_GET['del']) {
    $a=$_GET['del'];
    $d="delete from member where number=$a";
    mysql_query($d);
    //異動會顯示異動資料
    echo '成功幾筆<br>'.mysql_affected_rows();
    }

    $id=$_GET['id'];

    $sql = "select number,id,password,name,tel,address,gif,memberdate from   `member`  ";

    // 查詢帳號
    if ($_GET['id']) {
    $sql = $sql."where id=".$id;
    }
    // 使用編號排序
    if ($_GET['order']==1) {
    $sql = $sql."order by number";
    }
    if ($_GET['order']==2) {
    $sql = $sql."order by number desc";
    }
    // 使用編號排序
    if ($_GET['order']==3) {
    $sql = $sql."order by id";
    }
    if ($_GET['order']==4) {
    $sql = $sql."order by id desc";
    }
    // 使用價格排序
    if ($_GET['order']==5) {
    $sql = $sql."order by password";
    }
    if ($_GET['order']==6) {
    $sql = $sql."order by password desc";
    }
    // 使用價姓名序
    if ($_GET['order']==7) {
    $sql = $sql."order by name";
    }
    if ($_GET['order']==8) {
    $sql = $sql."order by name desc";
    }
    // 使用價姓名序
    if ($_GET['order']==9) {
    $sql = $sql."order by tel";
    }
    if ($_GET['order']==10) {
    $sql = $sql."order by tel desc";
    }
    // 使用價姓名序
    if ($_GET['order']==11) {
    $sql = $sql."order by address";
    }
    if ($_GET['order']==12) {
    $sql = $sql."order by tel address";
    }
    // 使用價姓名序
    if ($_GET['order']==13) {
    $sql = $sql."order by file";
    }
    if ($_GET['order']==14) {
    $sql = $sql."order by tel file";
    }
    // 使用價姓名序
    if ($_GET['order']==15) {
    $sql = $sql."order by memberdate";
    }
    if ($_GET['order']==16) {
    $sql = $sql."order by tel memberdate";
    }



    // 回傳結果
    $result=mysql_query($sql);

    // 表格表題
    echo '總共有' .mysql_num_rows($result).'人';
	echo "<div class='table-responsive'>";
    echo "<table class='table table-striped'>
    <tr>";
        if ($_GET['order']==2) {
        echo "
        <td data-th ><a href=management.php?order =1>編號</a></td>";
        }
        else {
        echo "
        <td data-th ><a href=management.php?order =2>編號</a></td>";
        }
        if ($_GET['order']==4) {
        echo "
        <td data-th ><a href=management.php?order =3>帳號</a></td>";
        }
        else {
        echo "
        <td data-th ><a href=management.php?order =4>帳號</a></td>";
        }
        if ($_GET['order']==6) {
        echo "
        <td data-th ><a href=management.php?order =5>密碼</a></td>";
        }
        else {
        echo "
        <td data-th ><a href=management.php?order =6>密碼</a></td>";
        }
        if ($_GET['order']==8) {
        echo "
        <td data-th ><a href=management.php?order =7>姓名</a></td>";
        }
        else {
        echo "
        <td data-th ><a href=management.php?order =8>姓名</a></td>";
        }
        if ($_GET['order']==10) {
        echo "
        <td data-th ><a href=management.php?order =9>電話</a></td>";
        }
        else {
        echo "
        <td data-th ><a href=management.php?order =10>電話</a></td>";
        }
        if ($_GET['order']==12) {
        echo "
        <td data-th ><a href=management.php?order =11>地址</a></td>";
        }
        else {
        echo "
        <td data-th ><a href=management.php?order =12>地址</a></td>";
        }
        if ($_GET['order']==14) {
        echo "
        <td data-th ><a href=management.php?order =13>檔案</a></td>";
        }
        else {
        echo "
        <td data-th ><a href=management.php?order =14>檔案</a></td>";
        }
        if ($_GET['order']==16) {
        echo "
        <td data-th ><a href=management.php?order =15>時間</a></td>";
        }
        else {
        echo "
        <td data-th ><a href=management.php?order =16>時間</a></td>";
        }


        echo "
        <td data-th >編輯</td>
        <td data-th >刪除</td>
    </tr>";

    // 表格內容
    while ($row=mysql_fetch_array($result)) {
    echo
    "
    <tr>
        <td data-th>$row[0]</td>
        <td data-th>$row[1]</td>
        <td data-th>$row[2]</td>
        <td data-th>$row[3]</td>
        <td data-th>$row[4]</td>
        <td data-th>$row[5]</td>
        <td data-th><img src=./photo/$row[6] width=100 height=50></td>
        <td data-th>$row[7]</td>
        <td data-th><a href=management.php?edit =$row[0]>編輯<a></td>
        <td data-th><a href=management.php?del =$row[0]>刪除<a></td>
    </tr>";
    }

    echo "
</table>";
    echo "
</div></div>";
?>
           
</div>
            <!--內容S-->
    <!-- /#wrapper -->
        <!-- jQuery -->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
        <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="dist/js/sb-admin-2.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function () {
                $('#dataTables-example').DataTable({
                    responsive: true
                });

            });
        </script>

</body>

</html>
