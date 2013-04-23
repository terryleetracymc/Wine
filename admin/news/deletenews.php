<?php
header("content-type:text/html; charset=utf-8");
include_once("DBLink/Db.php");
$id=$_GET['id'];
$Db=new Db();
if($Db->delete("news","id=$id"))
	echo "<script>alert('操作成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
else
	echo "<script>alert('操作失败!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";	//mysql_close($link);
?>