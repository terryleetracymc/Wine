<?php 
$page=newsPageType::$newsPage;
?>

<?php
$num=$db->num;
$rows=$db->row;

switch ($page){
	case "index":{
		showIndexNewsList($rows,$num);
	}
	break;
	case "News":{
		showNewsList($rows,$num);
	}
	break;
}
?>
<ul class="list" style="width:200px; margin:0px 20px 37px 0px;">

<?php 
function showIndexNewsList($rows,$num){
	for($i=1;$i<=$num;$i++){
		?>
	    <li>
	    	<a href="#" style="font-size:15px;color:#6b6b6b"><?php echo $rows[1]['news_title'];?></a>
	    	<span class="right" style="float:right">[ <?php echo $rows[1]['news_time'];?> ]</span>
	    </li>
	<?php }
	}
function showNewsList($rows,$num){
	for($i=1;$i<=$num;$i++){
		?>
		<li>
		    <a href="#" style="font-size:20px;color:#6b6b6b"><?php echo $rows[1]['news_title'];?></a>
		    <span class="right" style="float:right">[ <?php echo $rows[1]['news_time'];?> ]</span>
		</li>
		<?php }
	}?>


</ul>