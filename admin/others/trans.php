<?php
  $username=$_POST['username'];
  $passwd=$_POST['newpasswd'];
  $oripass=$_POST['oripasswd'];
  $oripass=md5($oripass);
  $username=md5($username);
  $passwd=md5($passwd);
  $fp=fopen("logui.txt","r");
  fgets($fp);
  $opd=fgets($fp);
  fclose($fp);
  if($opd!=$oripass)
  {
	   echo "<script language=javascript>alert('原始密码错误！');location.href=\"editpaswd.php\";</script>";
	   exit;
  }
  else
  {
  	$fp=fopen("logui.txt","w");
  	fputs($fp,$username."\r\n");
  	fputs($fp,$passwd);
  	fclose($fp);
  }
   echo "<script language=javascript>alert('修改成功！');location.href=\"editpaswd.php\";</script>";
?>