<?php
Class Db {
	private $link;
	public  $row;
	public $num;
	private $sql="";
	function __construct()
	{
		require_once("config.db.php");
		$dsn=$db_config["dbtype"].":dbname=".$db_config["database"].";host=".$db_config["hostname"].";port=".$db_config["port"];
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

	
	/**
	 * 本函数显示的是数据库语句
	 */
	function showSql(){
		echo "sql语句是：".$this->sql;
	}
	/**
	 * 本函数设置查询的表格
	 */
	function table($table){
		$this->sql = "select * from ".$table;
	}
	/**
	 * 本函数设置查询语句where部分的内容
	 */
	function where($whereStr){
		$this->sql = $this->sql.$whereStr;
	}
	/**
	 * 本函数设置查询语句limit部分的内容
	 */
	function limit($num){
		$this->sql = $this->sql." limit ".$num;
	}
	/**
	 * 本函数设置查询语句order部分的内容
	 */
	function order($orderStr){
		$this->sql = $this->sql.$orderStr;
	}
                            
	/**
	 * 本函数设置查询语句select
	 */
	function select()
	{
		$rst=$this->link->query($this->sql);
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
			echo $sql;
			$this->link->exec($sql);
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
		$this->link->exec($sql);
	}
}
?>
