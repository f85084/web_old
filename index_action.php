<?
    include ('mydb.php');
    session_start();
    if($_GET[id])
    {
    $_SESSION['id']=$_GET[id];
    $_SESSION['password']=$_GET[password];
    }
    $h10="h10";
    echo "<div class=$h10></div>";
    $sql="select * from member where id='$_SESSION[id]' and password='$_SESSION[password]'";
    $result=mysql_query($sql);
//if (!$row=mysql_fetch_array($result))
    /*{
    echo '登入失敗';
    header("location:index.php");
    die();
    }*/
    /*if ($_GET[id]=='root')
    {
    $_SESSION['flag']='1';
    header("location: manage.php");
    }*/
    ?>