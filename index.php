<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/grid.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/roundabout.js" type="text/javascript"></script>
<script src="js/roundabout_shapes.js" type="text/javascript"></script>
  <!--[if lt IE 7]><script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script><![endif]-->
  <!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
</head>
<body>
<?php
// error_reporting(0);
include_once("top.html");?>
<?php
  include_once("DBLink/Db.php");
  include_once 'newsControl.php';
  newsPageType::setNewsPage("index");  //设置页面
  
  $db=new Db();
  $db->table("photo");
  $db->select();
  $num=$db->num;
?>
<aside>
	<div class="main">
       	<a href="#" class="btnPrev"><img src="images/button-1.png" alt=""></a><a href="#" class="btnNext"><img src="images/button-2.png" alt=""></a>
    	<div id="carousel">
            <ul id="myRoundabout">
            <?php
			  for($i=1;$i<=$num;$i++)
			  { 
			?>
              <li><a href="<?php echo $db->row[$i]['photolink'];?>"><img src="<?php echo "movingPhoto/".$db->row[$i]['photoPath'];?>" alt="" /></a></li>
              <?php
			  }
			  $db->table("news");
			  $db->order(" order by id DESC ");
			  $db->limit(7);
			  $db->select();
			  $num=$db->num;
			  $rows=$db->row;
			  ?>
            </ul>
          </div>
    </div>
</aside>
<div class="bg_cont1">
    <div class="bg_cont">
        <section id="content">
            <div class="main">
                <div class="inside">
                    <div class="container_16">
                        <div class="tail">
                            <div class="container">
                                <div class="grid_4 alpha">
                                    <h2>行业新闻</h2>
										<?php 
										include_once("newslist.php");?>
                                    <div class="container"><a href="#" class="link-1">more</a></div>
                                </div>
                                <div class="grid_4">
                                    <h2>酒庄介绍</h2>
                                    <p class="p2"></p>
                                    <div class="container"><a href="#" class="link-1">more</a></div>
                                </div>
                                <div class="grid_4">
                                    <h2>关于我们</h2>
                                    <p class="p2">Mdrerit sit amet tinunt aiverra selorta diam eu massisque dia loreterdum vitaapibus acuitae ec eget tellus non erat lac ininec in vel ipsum auctorvorpt felieum iaculis lacinia ictum elementum velit.</p>
                                    <div class="container"><a href="#" class="link-1">more</a></div>
                                </div>
                                <div class="grid_4 omega">
                                    <h2>合作加盟</h2>
                                    <p class="p2">In vel ipsum auctorvorpt lieum iaculis lacinia ictum elementum velit.usce euisod consequat antpsum dolor sit consectetuer adipiscing elitellentesque sed dolor. Aliquam congue fer mentum nisl. </p>
                                    <div class="container"><a href="#" class="link-1">more</a></div>
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
<script type="text/javascript">
   // <![CDATA[
   $(document).ready(function() {
      $('ul#myRoundabout').roundabout({
         shape: 'figure8'
      });
	  
	  var cnn=[]
	$('#myRoundabout li').each(function(){
		cnn.push(this)
	})
	
	var curr=0
	$('.btnPrev').live('click',function(){
		if(curr<0)
			curr=cnn.length-1
		else
			curr--
		$(cnn.slice(curr,curr+1)).trigger('click')
		return false
	})
	$('.btnNext').live('click',function(){
		if(curr<cnn.length)
			curr++
		else
			curr=0
		$(cnn.slice(curr,curr+1)).trigger('click')
		return false
	})
   });
   // ]]>
  </script> 
</body>
</html>
