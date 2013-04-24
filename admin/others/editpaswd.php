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
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="ckfinder/ckfinder.js"></script>
<script type="text/javascript">
</script>
</head>
<body><p></p><p></p><p></p><p></p><p></p>
<?php
    session_start();
	$user=$_SESSION['user'];
?>
<div class="content-box"> 
  <!-- Start Content Box -->
  <div class="content-box-header">
    <h3>修改密码</h3>
    <div class="clear"></div>
  </div>
  <!-- End .content-box-header -->
  <div class="content-box-content">
    <form action="trans.php" enctype="multipart/form-data" method="post" id="submit">
      <fieldset>
        <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
        <p>
          <label>密码修改</label>
        </p>
        <p>
          <label>用户名</label>
          <input class="text-input small-input" type="text" id="medium-input" name="username" value="<?php echo $user;?>"/>
          <input type="hidden" name="transtype" value="edit"/>
        </p>
        <p>
          <label>原密码</label>
          <input class="text-input small-input" type="password" id="medium-input" name="oripasswd" value=""/>
        </p>
        <p>
          <label>新密码</label>
          <input class="text-input small-input" type="password" id="medium-input" name="newpasswd"/>
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
</body>
</html>