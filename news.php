<?php
  include_once("DBLink/Db.php");
  include_once("DBLink/news.php");
  
  include_once 'newsControl.php';
  newsPageType::setNewsPage("News");  //设置页面
  
  $db=new Db();//定义数据库查询对象
  $db->table("news");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>产品中心</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<!--[if lt IE 7]><script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script><![endif]-->
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->

</head>
<?php
if(isset($_GET['newsType'])){
	$newstype = $_GET['newsType'];
	$db->where(" where news_type = '$newstype'");
	$db->order(" order by id DESC ");
	$db->select();
}
else {
	$db->select();
}

?>
<body>
<?php include_once("top.html");?>
<div class="bg_cont1">
    <div class="bg_cont">
        <section id="content">
<div class="main">
  <div class="inside">
  <h2>新闻中心</h2>
    <div class="container_16">
      <div class="tail2">
                            <div class="container">
                                <div class="grid_5 alpha">
                                    <ul class="list1">
                                        <li><a href="#">所&nbsp;有&nbsp;新&nbsp;闻</a></li>
                                        <li><a href="?newsType=proaq">产&nbsp;品&nbsp;问&nbsp;答</a></li>
                                        <li><a href="?newsType=winecul">美&nbsp;酒&nbsp;文&nbsp;化</a></li>
                                        <li><a href="?newsType=indusnews">行&nbsp;业&nbsp;新&nbsp;闻</a></li>
                                        <li><a href="?newsType=cornews">公&nbsp;司&nbsp;快&nbsp;讯</a></li>
                                        <li><a href="?newsType=other">其&nbsp;&nbsp;&nbsp;他</a></li>
                                        <!--  <li><a href="#">Structural Steel Erection</a></li>-->
                                    </ul>
                                </div>
                                <div class="grid_11 omega">
									<?php include_once("newslist.php");?>
								</div>
                            </div>
           
      </div>
    </div>
  </div>
</div>
</section>
</div>
</div>

<?php include_once("bottom.html");?>
</body>
</html>
