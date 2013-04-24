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
	$DB->select("comment");
	$nums=$DB->num;
	$num=5;
	$pages=$nums/$num;
	$start=($page-1)*$num;
	$DB->select("comment","","limit $start,$num");
?><p></p><p></p><p></p><p></p><p></p>
<div class="content-box"> 
  <!-- Start Content Box -->
  
  <div class="content-box-header">
    <h3>所有图片</h3>
    <div class="clear"></div>
  </div>
  
  <!-- End .content-box-header -->
  <div class="content-box-content">
  <fieldset>
    <table style="text-align:left;" border="1">
      <?php 
        for($i =1 ;$i<=$DB->num;$i++){
            ?>
                    <tr>
    <td rowspan="3" width="80%">内容：<?php echo $DB->row[$i]["content"];?></td>
    <td width="20%">电话：<?php echo $DB->row[$i]["phone"];?></td>
  </tr>
  <tr>
    <td>电子邮箱：<?php echo $DB->row[$i]['email'];?></td>
  </tr>
  <tr>
    <td>留言时间：<?php echo $DB->row[$i]['time'];?></td>
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
    <a class="button" href="allmsg.php?page=<?php echo $i+1;?>"><?php echo $i+1;?></a>
  <?php 
    }
  ?>
  </div>
  <p></p>
  </fieldset>
</div>
</body>
