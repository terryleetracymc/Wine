<?php
	header("content-type:text/html; charset=utf-8");
	include_once("DBLink/Db.php");
	$ttype=$_POST['transtype'];
	if($ttype=='add')
	{
		$title=$_POST['title'];
		$type=$_POST['type'];
		$content=$_POST['content'];
		$time=date('Y-m-d H:i:s');
		$cols=array("news_title","news_type","news_content","news_time");
		$values=array("'$title'","'$type'","'$content'","'$time'");
		$db=new Db();
		if($db->insert("news",$cols,$values))
			echo "<script language=javascript>alert('添加成功！');location.href=\"allnews.php\";</script>";
		else
			echo "<script language=javascript>alert('添加失败，请检查数据是否符合要求！');location.href=\"addnews.php\";</script>";
	}
	else if($ttype=="edit")
	{
		$db=new Db();
		$id=$_GET['id'];
		$title=$_POST['title'];
		$type=$_POST['type'];
		$content=$_POST['content'];
		$time=date('Y-m-d H:i:s');
		$cols=array("news_title","news_type","news_content","news_time");
		$values=array("'$title'","'$type'","'$content'","'$time'");
			//print_r($values);
		if($db->update("news",$cols,$values,"id=$id"))
			echo "<script language=javascript>alert('修改成功!');location.href=\"allnews.php\";</script>";
		else
			echo "<script language=javascript>alert('修改失败!请检查数据是否符合要求！');location.href=\"allnews.php\";</script>";
	}
?>