<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />
<script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="resources/scripts/facebox.js"></script>
<script type="text/javascript" src="resources/scripts/jquery.wysiwyg.js"></script>
</head>
<body>
<p></p><p></p><p></p><p></p><p></p>
<div class="content-box"> 
  <!-- Start Content Box -->
  <div class="content-box-header">
    <h3>修改产品</h3>
    <div class="clear"></div>
  </div>
  <?php 
    $ID = $_GET['id'];
	
	include_once("DBLink/Db.php");
	$db=new Db();
	$db->select("wine","id=$ID");
  ?>
  <!-- End .content-box-header -->
  <div class="content-box-content">
    <form action="trans.php?id=<?php echo $db->row[1]['id'];?>" enctype="multipart/form-data" method="post">
      <fieldset>
        <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
        <p>
          <label>图片文件上传</label>
          <input type="file" class="text-input medium-input datepicker" name="upload"/>
          <input type="hidden" name="validate" value="<?php echo $db->row[1]['photoPath'];?>"/>
          <br />
        <h6>请选择所需要的图片</h6> </p>
        <p>
          <label>名称<strong style="color:#F00">(*必须)</strong></label>
          <input class="text-input medium-input datepicker" type="text" id="medium-input" name="winename" value="<?php echo $db->row[1]['name'];?>"/>
          <input type="hidden" name="transtype" value="edit"/>
        </p>
        <p>
          <label>价格</label>
          <input class="text-input medium-input datepicker" type="text" id="medium-input" name="price" value="<?php echo $db->row[1]['price'];?>"/>
        </p>
        <p>
          <label>产地</label>
          <input class="text-input medium-input datepicker" type="text" id="medium-input" name="region" value="<?php echo $db->row[1]['region'];?>"/>
        </p>
        <p>
        </p>
          <label>详细介绍</label>
          <textarea name="detail"><?php echo $db->row[1]['introduction'];?>"</textarea>
        <p>
          <input class="button" type="submit" value="提交" />
          <input class="button" type="reset" value="重置" />
        </p>
      </fieldset>
      <div class="clear"></div>
      <!-- End .clear -->
    </form>
  </div>
</div>
</body>
</html>