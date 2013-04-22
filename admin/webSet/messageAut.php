<?php
//error_reporting(0);
header("content-type:text/html; charset=utf-8");
$content=$_POST['Editor'];
if($_GET['type'] == "aboutus"){
	file_put_contents("../../staticContent/aboutus.txt",$content);
	echo "<script language=javascript>alert('修改成功!');location.href=\"aboutus.php\";</script>";
}
if($_GET['type'] == "brandwine"){
	file_put_contents("../../staticContent/brandwine.txt",$content);
	echo "<script language=javascript>alert('修改成功!');location.href=\"brandwine.php\";</script>";
}
if($_GET['type'] == "areashow"){
	file_put_contents("../../staticContent/areashow.txt",$content);
	echo "<script language=javascript>alert('修改成功!');location.href=\"areashow.php\";</script>";
}
if($_GET['type'] == "joinus"){
	file_put_contents("../../staticContent/joinus.txt",$content);
	echo "<script language=javascript>alert('修改成功!');location.href=\"joinus.php\";</script>";
}
if($_GET['type'] == "contactus"){
	file_put_contents("../../staticContent/contactus.txt",$content);
	echo "<script language=javascript>alert('修改成功!');location.href=\"contactus.php\";</script>";
}
?>