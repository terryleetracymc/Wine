<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>所有产品</title>
<!--                       CSS                       -->
<!-- Reset Stylesheet -->
<link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />
<!-- Main Stylesheet -->
<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
<link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />
<!--                       Javascripts                       -->
<!-- jQuery -->
<script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>
<!-- jQuery Configuration -->
<script type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"></script>
<!-- Facebox jQuery Plugin -->
<script type="text/javascript" src="resources/scripts/facebox.js"></script>
<!-- jQuery WYSIWYG Plugin -->
<script type="text/javascript" src="resources/scripts/jquery.wysiwyg.js"></script>
<!-- jQuery Datepicker Plugin -->
<script type="text/javascript" src="resources/scripts/jquery.datePicker.js"></script>
<script type="text/javascript" src="resources/scripts/jquery.date.js"></script>
<script type="text/javascript" src="resources/scripts/zoombox/zoombox.js"></script>
<script type="text/javascript" src="resources/scripts/main.js"></script>
</head>
<body>
<?php 		
	include_once("DBLink/Db.php");
	$DB=new Db();
	if(isset($_GET['page']))
	{
		$page=$_GET['page'];
	}
	else
	{
		$page=1;
	}
	$DB->select("news");
	$nums=$DB->num;
	$num=5;
	$pages=$nums/$num;
	$start=($page-1)*$num;
	$DB->select("news","","limit $start,$num");
?><p></p><p></p><p></p><p></p><p></p>
<div class="content-box"> 
  <!-- Start Content Box -->
  
  <div class="content-box-header">
    <h3>所有新闻</h3>
    <div class="clear"></div>
  </div>
  
  <!-- End .content-box-header -->
  <div class="content-box-content">
  <fieldset>
    <table>
      <tr>
        <th>标题</th>
        <th>类型</th>
        <th>时间</th>
        <th>操作</th>
      </tr>
      <?php 
        for($i =1 ;$i<=$DB->num;$i++){
            ?>
      <tr align="center">
        <td>
        <?php echo $DB->row[$i]["news_title"];?>
        </td>
        <td><?php echo $DB->row[$i]["news_type"];?></td>
        <td><?php echo $DB->row[$i]["news_time"];?></td>
        <td>
        <a href="editnews.php?id=<?php echo $DB->row[$i]["id"]?>" title="修改">
        <img src="resources/images/icons/pencil.png" alt="修改" />
        </a> 
        <a href="deletenews.php?id=<?php  echo $DB->row[$i]["id"]?>" title="删除" onClick="{if(confirm('确定要删除该信息?')){return true;} return false;}">
        <img src="resources/images/icons/cross.png" alt="删除" />
        </a>
        </td>
        <td>
        </td>
      </tr>
      <?php }?>
    </table>
  </div>
  <p></p>
  <div id="content-box-content">
  
  <?php
    for($i=0;$i<$pages;$i++)
	{
  ?>
    <a class="button" href="allproduct.php?page=<?php echo $i+1;?>"><?php echo $i+1;?></a>
  <?php 
    }
  ?>
  </div>
  <p></p>
  </fieldset>
</div>
</body>
