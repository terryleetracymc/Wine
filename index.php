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
<?php include_once("top.html");?>
<?php
  include_once("DBLink/DB.php");
  $db=new Db();
  $db->select("photo");
  $num=$db->num;
  $rows=$db->row;
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
			  ?>
            </ul>
          </div>
    </div>
</aside>
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
