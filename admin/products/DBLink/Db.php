<?php
Class Db {
	var $link;
	var $row;
	var $num;
	function __construct()
	{
		require_once("config.db.php");
		$dsn=$db_config["dbtype"].":dbname=".$db_config["database"].";host=".$db_config["hostname"].";port=".$db_config["port"];
		//echo $dsn;
		try{
		$this->link=new PDO($dsn,$db_config["username"],$db_config["password"]);
		$this->link->exec("set names ".$db_config["charset"]);}
		catch(PDOException $e)
		{
			echo "数据库连接失败！".$e->getMessage()."<br/>";
		}
	}
	function __destruct()
	{
		$link=null;
	}
	function select($table,$aftw="",$opt="")
	{
		$sql="select * from $table";
		if($aftw!="")
		{
			$sql=$sql." where $aftw";
		}
		$sql=$sql." $opt";
		$rst=$this->link->query($sql);
		$time=0;
		while($this->row[$time+1]=$rst->fetch(PDO::FETCH_BOTH))
		{
			$time++;
		}
		$this->num=$time;
	}
	function delete($table,$aftw="")
	{
		$sql="delete from $table";
		if($aftw!="" && isset($aftw))
		{
			$sql=$sql." where $aftw";
			//echo $sql;
			return $this->link->exec($sql);
		}
		else
		{
			echo "不允许删除所有数据！"."<br/>";
		}
	}
	function insert($table,$cols,$value)
	{
		$length=count($cols);
		$tab_name="(";
		$values="(";
		for($i=0;$i<$length;$i++)
		{
			$tab_name=$tab_name.$cols[$i].",";
		}
		for($i=0;$i<$length;$i++)
		{
			$values=$values.$value[$i].",";
		}
		$tab_name=substr($tab_name,0,-1).")";
		$values=substr($values,0,-1).")";
		$sql="insert into $table $tab_name values $values";
		//echo $sql;
		return $this->link->exec($sql);
	}
	function update($table,$cols,$value,$aftw)
	{
		$length=count($cols);
		$aftSet="";
		for($i=0;$i<$length;$i++)
		{
			$aftSet=$aftSet.$cols[$i]."=".$value[$i].",";
			$aftSet;
		}
		//echo $aftSet;
		if($aftw!="" && isset($aftw))
		{
		$aftSet=substr($aftSet,0,-1);
		$sql="update $table set ".$aftSet." where ".$aftw;
		//echo $sql;
		return $this->link->exec($sql);
		}
		else
		{
			echo "不允许修改所有数据！";
		}
	}
}
?>
