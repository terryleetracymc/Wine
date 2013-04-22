<!DOCTYPE html>
<html lang="en">
<head>
  <title>合作加盟</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/grid.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <!--[if lt IE 7]><script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script><![endif]-->
  <!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
  
</head>

<body>
<?php include_once("top.html");?>

      <div class="main">
      <div class="inside">
      <div class="container_16">
      <div class="tail2">
        <div class="container">
          <?php
			$text = file_get_contents('staticContent/aboutus.txt');
			echo $text;
			?>
        </div>
      </div>
      </div>
      </div>
      </div>

<?php include_once("bottom.html");?> 
</body>
</html>
