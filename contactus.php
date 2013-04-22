<!DOCTYPE html>
<html lang="en">
<head>
<title>联系我们</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<!--[if lt IE 7]><script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script><![endif]-->
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->

</head>

<body>
<?php include_once("top.html");?>
<div class="bg_cont1">
  <div class="bg_cont">
    <section id="content">
      <div class="main">
        <div class="inside">
          <div class="container_16">
            <div class="container">
              <div class="grid_5 alpha">
                <h2>联系方式</h2>
                <div class="indent5">
                  <?php 
									$text = file_get_contents('staticContent/aboutus.txt');
									echo $text;
									?>
                </div>
              </div>
              <div class="grid_11 omega">
                <div class="suffix_1">
                  <h2>留言</h2>
                  <form action="leaveMsg.php" id="form" method="post">
                    <fieldset>
                      <div class="rowElem">
                        <input type="text" name="name" value="姓名:" onBlur="if(this.value=='') this.value='姓名:'" onFocus="if(this.value =='Name:' ) this.value=''"  />
                      </div>
                      <div class="rowElem">
                        <input type="Email" name="email" value="电子邮件:" onBlur="if(this.value=='') this.value='电子邮箱:'" onFocus="if(this.value =='E-mail:' ) this.value=''"  />
                      </div>
                      <div class="rowElem">
                        <input type="text" name="phone" value="电话:" onBlur="if(this.value=='') this.value='电话:'" onFocus="if(this.value =='Phone:' ) this.value=''"  />
                      </div>
                      <div class="rowElem2">
                        <textarea rows="40" name="message" cols="30" onFocus="if(this.value =='Message:' ) this.value=''" ></textarea>
                      </div>
                      <div class="container">
                        <div class="fright">
                        <input type="submit"  class="link-1" value="留言" style="height:50px;width:75px;text-align:center"/>
                        </div>
                        <div class="fright">
                        <input type="reset"  class="link-1" value="重置" style="height:50px;width:75px;text-align:center"/>
                        </div>
                      </div>
                    </fieldset>
                  </form>
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
