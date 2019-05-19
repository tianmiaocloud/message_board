<?php
include "conn.php";

$reply = $_POST["reply"];
echo "$reply";
$id = $_GET['id'];
setcookie("idd",$id,time()+3600);
echo "$id";
if($id != '') {
    $user_account="";
if(!empty($_COOKIE["idd"])){
    $iddd=$_COOKIE["iddd"];
}
else{
    echo "nope";
}
    $sql_reply = "UPDATE `booklist` SET `replay`=$reply WHERE id=$id";
    mysqli_query($mysqli, $sql_reply);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PHP留言本</title>
    <link href="css/book_style.css" rel="stylesheet" type="text/css" />
    
</head>
<body>
<div class='container'>

     <div class='block'>
        <a href='manage.php'>留言管理</a> | <a href='logout.php'>退出</a>  |   欢迎您,管理员！ 今天是
        <?php
        $time = date("Y-m-d");
        echo "$time";
        ?>
    </div>

    <div class='block'>
        <div class='b_list'>
            <ul>
                <li>
                    <div class='title'>
                        <div class='name'>回复留言</div>
                        <div class='time'></div>
                        <div class='clear'></div>
                    </div>
                    <div class='content'>
                        <form name='form1' action='reply.php' method='POST' id='form1' >
                            <div class='ly_list'>
                                <ul>
                                    <li><div class="left">回复：</div><div class="right"><textarea name="reply" id="reply" cols="45" rows="5" class="textarea"></textarea> *</div></li>
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