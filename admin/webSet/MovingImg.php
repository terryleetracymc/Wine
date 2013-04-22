<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台图片修改</title>
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
</head>
<body>
<?php if($_GET['p']=="forms"){?>

<div class="content-box"> 
<p></p><p></p><p></p><p></p><p></p>
  <!-- Start Content Box -->
  <div class="content-box-header">
    <h3>图片上传</h3>
    <div class="clear"></div>
  </div>
  
  <!-- End .content-box-header -->
  <div class="content-box-content">
    <form action="upload.php?action=add" enctype="multipart/form-data" method="post">
      <fieldset>
        <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
        <a href="AllPicture.php"><h3>查看所有图片</h3></a>
        <p>
          <label>图片文件上传</label>
          <input type="file" class="text-input medium-input datepicker" name="upload"/>
          
          <br />
          <small>请选择所需要的图片</small> </p>
        <p>
          <label>图片链接</label>
          <input class="text-input medium-input datepicker" type="text" id="medium-input" name="photolink" />
        </p>
        <p>
          <label>图片信息</label>
          <input class="text-input medium-input datepicker" type="text" id="medium-input" name="photoinfo" />
        </p>
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
<?php }?>
<?php if($_GET['p']=="edit"){
	$ID = $_GET['id'];
	
	include_once("DBLink/Db.php");
	$db=new Db();
	$db->select("photo","id=$ID");
?>
<p></p><p></p><p></p><p></p>
<div class="content-box"> 
  <!-- Start Content Box -->
  <div class="content-box-header">
    <h3>图片上传</h3>
    <div class="clear"></div>
  </div>
  <!-- End .content-box-header -->
  <div class="content-box-content">
    <form action="upload.php?action=edit&id=<?php echo $db->row[1]['id']?>" enctype="multipart/form-data" method="post">
      <fieldset>
        <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
        <p>
          <label>图片文件上传</label>
          <input type="file" class="text-input medium-input datepicker" name="upload"/>
          <input type="hidden" name="validate" value=<?php echo $db->row[1]['photoPath'];?>/>
          <br />
          <small>请上传所需要的图片</small> </p>
        <p>
          <label>图片链接</label>
          <input class="text-input medium-input datepicker" type="text" id="medium-input" name="photolink" value="<?php echo $db->row[1]['photolink'];?>"/>
        </p>
        <p>
          <label>图片信息</label>
          <input class="text-input medium-input datepicker" type="text" id="medium-input" name="photoinfo" value="<?php echo $db->row[1]['photoinfo'];?>"/>
        </p>
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
<?php }?>
</body>
