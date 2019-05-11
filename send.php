<?php
//$sql_insert="insert into booklist(name,email,content,addtime) value ($name,$email,$content,$addtime)";
//$sql_str = "select* from booklist";
include "conn.php";
$name = $_POST["name"];
$email = $_POST["email"];
$content = $_POST["content"];
$addtime = date("Y-m-d h:i:s");

//$sql_insert="insert into booklist(name,email,content,addtime) values('$name','$email','$content','$addtime')";
if($name != '') {
    $sql_insert = "INSERT INTO `booklist`(`name`, `email`, `content`, `addtime`) VALUES('$name','$email','$content','$addtime')";
    mysqli_query($mysqli,$sql_insert);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PHP留言本</title>
    <link href="css/book_style.css" rel="stylesheet" type="text/css" />
    <script>
        function check()
        {
            if (document.form1.name.value=="") {
                window.alert("请输入昵称");
                document.form1.name.focus();
                return (false);
            }
            if (document.form1.content.value=="") {
                window.alert("请输入内容");
                document.form1.content.focus();
                return (false);
            }
            if (document.form1.email.value=="") {
                window.alert("请输入邮箱");
                document.form1.email.focus();
                return (false);
            }
            return true;
        }
    </script>
</head>
<body>
<div class='container'>

    <div class='block'><a href='write.php'>首页</a> | <a href='send.php?'>我要留言</a> |<a href='login.php'>管理员登录</a></div>


    <div class='block'>
        <div class='b_list'>
            <ul>
                <li>
                    <div class='title'>
                        <div class='name'>我要留言</div>
                        <div class='time'></div>
                        <div class='clear'></div>
                    </div>
                    <div class='content'>
                        <form name='form1' action='send.php?act=add' method='POST' id='form1' onsubmit='return check();'>
                            <div class='ly_list'>
                                <ul>
                                    <li><div class='left'>昵称：</div><div class='right'><input name='name' type='text' class='text' /> *</div></li>
                                    <li><div class='left'>Emial：</div><div class='right'><input name='email' type='text' class='text' /></div></li>
                                    <li><div class='left'>内容：</div><div class='right'><textarea name='content' id='textarea' cols='45' rows='5' class='textarea'></textarea> *</div></li>
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
        <div class="clear"></div>

    </div>
</div>
</body>
</html>