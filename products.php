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
  include_once("DBLink/Db.php");
  $Db=new Db();
  $Db->select("wine");
  $row=$Db->row;
  $nums=$Db->num;
?>
<body>
<?php include_once("top.html");?>
<div class="main">
  <div class="inside">
    <div class="container_16">
      <div class="tail2">
        <div class="container">
        <p></p>
          <h2>我们的产品</h2>
          <div class="container indent">
            <?php
						   for($i=1;$i<=$nums;$i++)
						   {
						?>
            <div class="grid_4"> <img alt="" src="images/wine/<?php echo $row[$i]['photoPath'];?>" /><br>
              <a href="Detail.php?id=<?php echo $row[$i]['id'];?>" class="button1"><?php echo $row[$i]['name'];?></a> </div>
            <?php
						   }
						?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once("bottom.html");?>
</body>
</html>
