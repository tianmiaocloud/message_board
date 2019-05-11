<?php
session_start();
$_SESSION['admin'] = null;
include "conn.php";
$username = $_POST["username"];
$password = $_POST["password"];
if($username != '') {
    $sql_query = "select* from manage where username = '$username'";
    $result = mysqli_query($mysqli, $sql_query);


    if (mysqli_num_rows($result) < 1) {
        echo "<script language='JavaScript'>alert('该用户不存在！')</script>";
    } else {
        $re = mysqli_fetch_array($result);
        if ($re['password'] != $password) {
            echo "<script language='JavaScript'>alert('密码错误！')</script>";
        } else {
            session_start();
            $_SESSION['admin'] = true;
            //echo "<script language='JavaScript'>alert('登录成功')</script>";
            header("location:manage.php");
        }
    }
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>PHP留言本</title>
    <link href="css/book_style.css" rel="stylesheet" type="text/css" />
    <script>
        function checklogin()
        {
            if (document.form1.username.value=="") {
                window.alert("请输入用户名");
                document.form1.username.focus();
                return (false);
            }
            if (document.form1.password.value=="") {
                window.alert("请输入密码");
                document.form1.password.focus();
                return (false);
            }
            return true;
        }
    </script>
</head>

<body>
<div class='container'>

    <div class='block'><a href='write.php'>首页</a> | <a href='send.php'>我要留言</a> | <a href='login.php'>管理员登录</a></div>


    <div class='block'>
        <div class='b_list'>
            <ul>
                <li>
                    <div class='title'>
                        <div class='name'>管理登录</div>
                        <div class='time'></div>
                        <div class='clear'></div>
                    </div>
                    <div class='content'>
                        <form name='form1' action='login.php' method='post' id='form1' onsubmit='return checklogin();'>
                            <div class='ly_list'>
                                <ul>
                                    <li>
                                        <div class='left'>用户名：</div>
                                        <div class='right'><input name='username' type='text' class='text' /></div></li>
                                    <li>
                                        <div class='left'>密　码：</div>
                                        <div class='right'><input name='password' type='password' class='text' /></div></li>
                                    <li><div class='left'></div><div class='right'>
                                            <input type='submit' name='button' id='button' value='提交' class='btn' />
                                        </div></li>
                                </ul>
                            </div>
                        </form>
                    </div>

                </li>
            </ul>
            <div class='clear'></div>
        </div>
    </div>
    <div class='clear'></div></div>
</div>



</body>
</html>