<?php 
	chong_pha_hoai();
?>
<?php 
	//$noi_dung=addslashes($_POST['noi_dung']);
	$noi_dung=$_POST['noi_dung'];
	$noi_dung=str_replace("'","&nbsp;",$noi_dung);
	$r_tv="UPDATE `footer` SET `html` = '$noi_dung' WHERE `id` ='1';";
	mysql_query($r_tv);
	//thongbao("vao day");
?>