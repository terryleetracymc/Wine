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
</head>
<body>
<div class="content-box"> 
  <!-- Start Content Box -->
  <div class="content-box-header">
    <h3>添加产品</h3>
    <div class="clear"></div>
  </div>
  
  <!-- End .content-box-header -->
  <div class="content-box-content">
    <form action="trans.php" enctype="multipart/form-data" method="post">
      <fieldset>
        <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
        <p>
          <label>图片文件上传</label>
          <input type="file" class="text-input small-input" name="upload"/>
          <br />
        <h6>请选择所需要的图片</h6> </p>
        <p>
          <label>名称</label>
          <input class="text-input small-input" type="text" id="medium-input" name="winename"/>
          <input type="hidden" name="transtype" value="add"/><strong style="color:#F00">(*必须)</strong>
        </p>
        
        <p>
          <label>价格</label><input class="text-input small-input" type="text" id="medium-input" name="price" />
          <label>等级</label><input class="text-input small-input" type="text" id="medium-input" name="rank" />
        </p>
        <p>
          <label>产地</label><input class="text-input small-input" type="text" id="medium-input" name="region" />
          <label>类型</label><input class="text-input small-input" type="text" id="medium-input" name="type" />
        </p>
        <p>
          <label>口味</label><input class="text-input small-input" type="text" id="medium-input" name="taste" />
          <label>饮用建议</label><input class="text-input small-input" type="text" id="medium-input" name="suggest" />
        </p>
        <p>
          <label>详细介绍</label>
          <textarea name="detail" class="ckeditor"></textarea>
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