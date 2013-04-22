<?php
header("content-type:text/html; charset=utf-8");
error_reporting(0);
include_once("DBLink/Db.php");
if($_GET['action']=="del"){
	$id=$_GET['id'];
	$Db=new Db();
	$Db->select("photo","id=$id");
	$fileName=$Db->row[1]['photoPath'];
	unlink("../movingPhoto/".$fileName);
	if($Db->delete("photo","id=$id"))
		echo "<script>alert('操作成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	else
		echo "<script>alert('操作失败!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";	//mysql_close($link);
}
?>