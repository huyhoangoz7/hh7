<?php 
	chong_pha_hoai();
?>
<html>
<head>
	<meta charset="utf-8" >
	<title>Quản lý</title>
</head>
<body>
<?php 
	$vt=$_GET['vt'];
	$ten=trim($_POST['ten']);
	$noi_dung=$_POST['noi_dung'];
	$noi_dung=str_replace("'","&nbsp;",$noi_dung);
	$r_tv="UPDATE `khung_html` SET `noi_dung` = '$noi_dung',
	
	`ten`='$ten'

	WHERE `vi_tri` ='$vt';";
	mysql_query($r_tv);
	//echo $r_tv;
	trangtruoc();
?>
</body>
</html>