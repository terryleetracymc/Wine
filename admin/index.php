<?php
  session_start();
  if(isset($_POST['username']))
  {
  	$username=$_POST['username'];
	$_SESSION['user']=$_POST['username'];
  }
  else
  	$username="";
	
  if(isset($_POST['password']))
  	$password=$_POST['password'];
  else
  	$password="";
  //验证
  $username=md5($username);
  $password=md5($password);
  $fp=fopen("others/logui.txt","r");
  $usr=fgets($fp);
  $pwd=fgets($fp);
  $usr=substr($usr,0,-2);
  if($password==$pwd&& $username==$usr)
  {}
  else
  {
	  if(isset($_SESSION['validate']) && $_SESSION['validate']==1)
	  {}
	  else
	  {header("location:login.php");}
  }
  $_SESSION['validate']=1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
</head>
<frameset cols="230px,*" rows="*" border="0" name="index">
     <frame src="left.html" name="left"/>
     <frame src="products/addproduct.php" name="main"/>
</frameset><noframes></noframes>
</html>
