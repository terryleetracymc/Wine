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
    <h3>添加新闻</h3>
    <div class="clear"></div>
  </div>
  
  <!-- End .content-box-header -->
  <div class="content-box-content">
    <form action="trans.php" enctype="multipart/form-data" method="post">
      <fieldset>
        <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
        <p></p>
          <label>标题</label>
          <input class="text-input small-input" type="text" id="medium-input" name="title"/>
          <input type="hidden" name="transtype" value="add"/>
        <p>
        </p>
          <label>类型</label>
          <!--<input class="text-input medium-input datepicker" type="text" id="medium-input" name="type" />-->
          <select class="small-input" name="type">
          <option value="产品问答">产品问答</option>
          <option value="美酒文化">美酒文化</option>
          <option value="行业新闻">行业新闻</option>
          <option value="公司快讯">公司快讯</option>
          <option value="其他">其他</option>
          </select>
        <p>
        </p>
        <p>
        </p>
          <label>内容</label>
          <textarea name="content" id="ckeditor" class="ckeditor"></textarea>
        <p></p>
          <input class="button" type="submit" value="提交" />
          <input class="button" type="reset" value="重置" />
        
      </fieldset>
      <div class="clear"></div>
      <!-- End .clear -->
    </form>
  </div>
</div>
</body>
</html>