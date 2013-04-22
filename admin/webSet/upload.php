<?php
    include_once("DBLink/Db.php");
	header("content-type:text/html; charset=utf-8");
	$fileName = $_FILES["upload"]["name"]; //获取文件名称
	$photoLink = $_POST['photolink'];
	$photoInfo = $_POST['photoinfo'];
	if(!isset($_POST['validate'])){
	$upFileType="gif|jpg|bmp|png";
	$upFileMax = 4096;// 上传大小限制，单位是“KB”，默认为：10
	if (!preg_match("/(".$upFileType.")/", $_FILES["upload"]["name"]) || ($_FILES["upload"]["size"]==0)){
		echo "无效文件名";
		exit;}
	if ($_FILES["upload"]["size"]>($upFileMax*1000)){
	echo "文件上太大，只能是小于".$upFileMax."K";
	exit;
	}}
	$fileAddress=rand().date('YmdHis').$fileName;
	if($_GET['action']=="add"){
		if(move_uploaded_file($_FILES['upload']['tmp_name'], "../../movingPhoto/".$fileAddress))
		{
			$cols=array("photoPath","photolink","photoinfo");
			$values=array("'$fileAddress'","'$photoLink'","'$photoInfo'");
			$db=new Db();
			$db->insert("photo",$cols,$values);
			echo "<script language=javascript>alert('添加图片成功!');location.href=\"MovingImg.php?p=forms\";</script>";
		}
		else{
			echo "上传失败";
			exit;
			}
		}
	if($_GET['action']=="edit"){
		$id=$_GET['id'];
		$db=new Db();
		$db->select("photo","id=$id");
		$orifile="../../movingPhoto/".$db->row[1]['photoPath'];
		if($fileName==NULL)
		{
			//说明不需要修改图像
			//echo "no";
			$cols=array("photolink","photoinfo");
			//echo $photoInfo;
			//echo $photoLink;
			
			$values=array("'$photoLink'","'$photoInfo'");
			//print_r($values);
			$db->update("photo",$cols,$values,"id=$id");
			echo "<script language=javascript>alert('修改成功!');location.href=\"MovingImg.php?p=forms\";</script>";
	    }
		else
		{
			echo "yes";
			unlink($orifile);
			if(move_uploaded_file($_FILES['upload']['tmp_name'], "../../movingPhoto/".$fileAddress))
			{
				$cols=array("photoPath","photolink","photoinfo");
			    $values=array("'$fileAddress'","'$photoLink'","'$photoInfo'");
				$db->update("photo",$cols,$values,"id=$id");
				echo "<script language=javascript>alert('修改成功!');location.href=\"MovingImg.php?p=forms\";</script>";
			}
		}
	}
?>