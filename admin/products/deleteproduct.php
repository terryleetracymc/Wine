<?php
header("content-type:text/html; charset=utf-8");
error_reporting(0);
include_once("DBLink/Db.php");
$id=$_GET['id'];
$Db=new Db();
$Db->select("wine","id=$id");
$fileName=$Db->row[1]['photoPath'];
unlink("../images/wine/".$fileName);
if($Db->delete("wine","id=$id"))
	echo "<script>alert('操作成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
else
	echo "<script>alert('操作失败!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";	//mysql_close($link);
?>