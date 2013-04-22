<?php
function PIPHP_UploadFile($name,$filetypes,$maxlen) {
	if (!isset($_FILES[$name]['name'])) {
		return array(-1,NULL,NULL);
	}
	if (!in_array($_FILES[$name]['type'], $filetypes)) {
		return array(-2,NULL,NULL);
	}
	if ($_FILES[$name]['size']>$maxlen) {
		return array(-3,NULL,NULL);
	}
	if ($_FILES[$name]['error']>0) {
		return array($_FILES[$name]['error'],NULL,NULL);
	}
	$temp=file_get_contents($_FILES[$name]['temp_name']);
	return array(0,$_FILES[$name]['type'],$temp);
}
if (isset($_POST['flag'])) {
	$result=PIPHP_UploadFile("test", array("image/jpeg","image/jpg"),10000);
	if ($result[0]==0) {
		file_put_contents("test.jpg",$result[2]);
		echo "Flie received with the type '$result[1]' and saved";
		echo "as <a herf='test'>test.jpg</a><br/>";
	}
	else {
		if ($result[0]==-2) {
			echo "Wrong file type<br/>";
		}
		if ($result[0]==-3) {
			echo "Maximun length exceeded<br/>";
		}
		if ($result[0]>0) {
			echo "Error code : $result<br/>";
		}
		echo "file upload failed<br/>";
	}
}
move_uploaded_file("test.jpg", "uploadfile/");
$path="uploadfile/";
$photopath=$path+$_FILES['file']['name'];
include_once 'DBLink/Db.php';
$wine=new Db();
$cols=array("name","photoPath");
$value=array($_FILES['file']['name'],$photopath);
$wine->insert("wine", $cols, $value);
?>

