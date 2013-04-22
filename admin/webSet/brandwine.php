<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>页面修改</title>
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
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="ckfinder/ckfinder.js"></script>
</head>
<body>
<div class="content-box">
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <!-- Start Content Box -->
  <div class="content-box-header">
    <h3>静态页面修改</h3>
    <div class="clear"></div>
  </div>
  
  <!-- End .content-box-header -->
  <div class="content-box-content">
    <form action="messageAut.php?type=brandwine" method="post">
      <p>
        <label>请对关于品牌红酒进行修改</label>
      <p></p>
      <textarea class="ckeditor" name="Editor"><?php $text = file_get_contents('../../staticContent/brandwine.txt');
			echo $text;?>
</textarea>
      </p>
      <p>
        <input class="button" type="submit" value="提交" />
        <input class="button" type="reset" value="重置" />
      </p>
    </form>
  </div>
</div>
</body>
