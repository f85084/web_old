<?
include ('mydb.php');
include ('index_action.php');
session_start();
$_SESSION['flag']='1';
$id=$_GET['id'];
$wherea=array();
$where='';
$logws='';
$lurl='';
if(!empty($_GET['key_id'])){
	$wherea[]="message_id like '%".$_GET['key_id']."%'";
	$logw[]="message_id like ".$_GET['key_id'];
}
if(!empty($_GET['key_name'])){
	$wherea[]="message_name like '%".$_GET['key_name']."%'";
	$logw[]="message_name like ".$_GET['key_name'];
}
if($_GET['mg']){
	$wherea[]="group_uid='".$_GET['mg']."'";
	$lurl.="&mg=".$_GET['mg'];
	$logw[]="group_uid = ".$_GET['mg'];
}
if(!empty($wherea)){
	$where=" WHERE ".implode(' and ',$wherea);
	$logws=implode(' and ',$logw);
}
$number=10;
/*總共幾筆*/
$query_num= "SELECT COUNT(*) FROM message ".$where;	
$num=mysql_query($query_num);
$q_num =mysql_fetch_row($num);
$product_page_num= $q_num[0];
$page=ceil($product_page_num/$number);
 /*頁設設定*/
if(isset($_GET['p'])){
	$p=$_GET['p'];
	$start=($p-1)*$number;//開始
}
else{
	$start=0;
}
$querymr = "SELECT * FROM  message $where order by  message_date  ASC LIMIT $start, $number";
$mr=mysql_query($querymr);

/* $query_group= "SELECT group_uid FROM  member ";
$gp=mysql_query($query_group);
$admin_group=array(1=>'訪客',2=>'會員',3=>'操作人員',4=>'管理者')	;
 */
 ?>
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
	<div class="col-md-7 col-md-offset">		
		<form method="get" action="manage_message.php">
			<div class="panel panel-default">
				<div class="panel-heading">
					搜尋欄
				</div>
				<div class="panel-body">
					<table>
						<tr style="line-height: 50px;">
							<td width="50" align="center">帳號:</td>
							<td><input type="text" class="form-control" name="key_id" id="key_id" value="<?=$_GET[key_id]?>"></td>
							<td width="50" align="center">姓名:</td>
							<td><input type="text" class="form-control" name="key_name" id="key_name" value="<?=$_GET[key_name]?>"></td>
						</tr>
<!-- 						<tr>
							<td width="50" align="center">群組</td>
							<td>
								<select class="form-control" name="mg" id="mg">
									<option value="" >請選擇群組</option>
									<?foreach($admin_group as $key => $value){?>
									<option value="<?=$key?>"><?= $value; ?></option>					
									<?}?>
								</select>	
							</td>	
						</tr> -->
					</table>
					<table style="margin: 15px;">			
						<tr>
							<td width="100" ><input type="submit" class="btn btn-primary" value="查詢資料"></td>
						</tr>
					</table>
				</div>		
			</div>	
		</form>
	</div>			
	<div class="col-md-12 col-md-offset">	
	<?if($product_page_num > 0){?>	
	總共有<?=$product_page_num?>人
		<div align="center">
			<ul class="pagination">
			<?for($i=1;$i<=$page;$i++){?>
				<li><a href=manage_message.php?p=<?=$i?>><?=$i?></a></li>
			<?} }?>
			</ul>
		</div>
		<!-- 表格表題-->
		<div class='table-responsive'>
			<table id="form2" class='table '>
				<tr id="form3" >
					<td data-th >編號</td>
					<td data-th >帳號</td>
					<td data-th >姓名</td>
					<td data-th >群組</td>
					<td data-th >信箱</td>
					<td data-th >留言內容</td>
					<td data-th >時間日期</td>
					<td data-th >刪除</td>
					<td data-th >編輯</td>
					<td data-th >刪除</td>
				</tr>
				<!--表格內容-->
				 <?while ($rmr=mysql_fetch_array($mr)) { ?> 
				<tr>
					<td data-th><?=$rmr['message_no']?></td>
					<td data-th><?=$rmr['message_id']?></td>
					<td data-th><?=$rmr['message_name']?></td>
					<td data-th><?=$gp['group_uid']?></td>
					<td data-th><?=$rmr['message_email']?></td>
					<td data-th><?=$rmr['message_content']?></td>
					<td data-th><?=$rmr['message_date']?></td>
					<td data-th><?=$rmr['message_del']?></td>
					<td data-th><a href=edit_manage_member.php?number=<?=$rmr['message_no']?>>編輯</a></td>
					<td data-th><a href=del_manage_member.php?number=<?=$rmr['message_no']?>>刪除</a></td>
				</tr>
			<?}?>
			</table>
		</div>
	</div>          
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
