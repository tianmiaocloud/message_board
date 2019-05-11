<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PHP留言本</title>
    <link href="css/book_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include "conn.php";
$sql_str = "select* from booklist order by id desc";

$rs = mysqli_query($mysqli,$sql_str);
?>
<div class='container'>

    <div class='block'><a href='write.php?'>首页</a> | <a href='send.php'>我要留言</a> |<a href='login.php'>管理员登录</a></div>

    <div class='block'>
        <div class='b_list'>
            <ul>
                <?php
                while($row = mysqli_fetch_row($rs))
                {
                ?>
                <li>
                    <div class='title'>
                        <div class='email'><?php echo $row[2]; ?></div>
                        <div class='name'><?php echo $row[1]; ?></div>
                        <div class='addtime'>留言时间：<?php echo $row[4]; ?></div>
                        <div class='clear'></div>
                    </div>
                    <div class='content'>
                        内容:<?php echo $row[3]; ?>
                        <?php
                            if(!empty($row[5])){
                        ?>
                                <div class='reply'>
                                    <div class='gly'><b>管理员回复：</b><?php echo $row[6]; ?></div>
                                    <div class='gly_content'><?php echo $row[5]; ?></div>
                                </div>
                        <?php } ?>
                    </div>

                </li>
                    <?php } ?>
            </ul>
        </div>
        <div class=page>分页<span><strong>2</strong></span><a href=asasfsa>3</a></div>
    </div>

</div>
</body>
</html>
