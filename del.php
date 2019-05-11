<?php
include "conn.php";
$id = $_GET['id'];
$sql_del = "delete from booklist where id=$id";
$del = mysqli_query($mysqli, $sql_del);
if($del){
    echo "<script language='JavaScript'>alert('ok！')</script>";
}else{
    "<script language='JavaScript'>alert('error！')</script>";
}
?>