<?php
  include_once("DBLink/Db.php");
  $test=new Db();
  $cols=array("name","photoPath");
  $value=array("'hello'","'pp'");
  $test->insert("wine",$cols,$value);
?>