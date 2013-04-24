<?php
	header("content-type:text/html; charset=utf-8");
	include_once("DBLink/Db.php");
	$ttype=$_POST['transtype'];
	if($ttype=='add')
	{
		$fileName = $_FILES["upload"]["name"]; //获取文件名称
		$name=$_POST['winename'];
		$price=$_POST['price'];
		$region=$_POST['region'];
		$detail=$_POST['detail'];
		
		$rank=$_POST['rank'];
		$type=$_POST['type'];
		$taste=$_POST['taste'];
		$suggest=$_POST['suggest'];
		/*echo $fileName."<br/>";
		echo $ttype."<br/>";
		echo $price."<br/>";
		echo $region."<br/>";
		echo $detail."<br/>";*/
		$upFileType="gif|jpg|bmp|png";
		$upFileMax = 4096;
		if($name=="")
		{
			echo "<script language=javascript>alert('未输入名称！');location.href=\"addproduct.php\";</script>";
			exit;
		}
		if (!preg_match("/(".$upFileType.")/", $_FILES["upload"]["name"]) || ($_FILES["upload"]["size"]==0))
		{
			echo "<script language=javascript>alert('无效文件名！');location.href=\"addproduct.php\";</script>";
			exit;
		}
		if ($_FILES["upload"]["size"]>($upFileMax*1000))
		{
			echo "文件上太大，只能是小于".$upFileMax."K";
			exit;
		}
		$fileAddress=rand().date('YmdHis').$fileName;
		if(move_uploaded_file($_FILES['upload']['tmp_name'], "../../images/wine/".$fileAddress))
		{
			$cols=array("name","photoPath","price","region","introduction","rank","type","taste","suggest");
			$values=array("'$name'","'$fileAddress'","$price","'$region'","'$detail'","'$rank'","'$type'","'$taste'","'$suggest'");
			$db=new Db();
			if($db->insert("wine",$cols,$values))
				echo "<script language=javascript>alert('添加成功！');location.href=\"allproduct.php\";</script>";
			else
				echo "<script language=javascript>alert('添加失败，请检查数据是否符合要求！');location.href=\"addproduct.php\";</script>";
		}
		else
		{
			echo "上传失败";
			exit;
		}
	}
	else if($ttype=="edit")
	{
		$id=$_GET['id'];
		$db=new Db();
		$fileName = $_FILES["upload"]["name"];
		$name=$_POST['winename'];
		$price=$_POST['price'];
		$region=$_POST['region'];
		$detail=$_POST['detail'];
		
		$rank=$_POST['rank'];
		$type=$_POST['type'];
		$taste=$_POST['taste'];
		$suggest=$_POST['suggest'];
		
		$db->select("wine","id=$id");
		$orifile="../../images/wine/".$db->row[1]['photoPath'];
		if($fileName==NULL)
		{
			//说明不需要修改图像
			echo "no";
			$cols=array("name","price","region","introduction","rank","type","taste","suggest");
			//echo $photoInfo;
			//echo $photoLink;
			
			$values=array("'$name'","$price","'$region'","'$detail'","'$rank'","'$type'","'$taste'","'$suggest'");
			//print_r($values);
			if($db->update("wine",$cols,$values,"id=$id"))
				echo "<script language=javascript>alert('修改成功!');location.href=\"allproduct.php\";</script>";
			else
				echo "<script language=javascript>alert('修改失败!请检查数据是否符合要求！');location.href=\"allproduct.php\";</script>";
	    }
		else
		{
			//echo "yes";
			unlink($orifile);
			$fileAddress=rand().date('YmdHis').$fileName;
			if(move_uploaded_file($_FILES['upload']['tmp_name'], "../../images/wine/".$fileAddress))
			{
			$cols=array("name","photoPath","price","region","introduction","rank","type","taste","suggest");
			$values=array("'$name'","'$fileAddress'","$price","'$region'","'$detail'","'$rank'","'$type'","'$taste'","'$suggest'");
				$db->update("wine",$cols,$values,"id=$id");
				echo "<script language=javascript>alert('修改成功!');location.href=\"allproduct.php?p=forms\";</script>";
			}
		}
	}
?>