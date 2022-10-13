<?php 
	chong_pha_hoai();
?>
<html>
<head>

<meta charset="utf8" >

<title>Web</title>

</head>

<body>
<?php 
	$ten_web=post_bm("ten_web");
	$mo_ta_web=post_bm("mo_ta_web");
	sua_thong_so($ten_web,"tieu_de_web");
	sua_thong_so($mo_ta_web,"mo_ta_web");
	trangtruoc();
?>
</body>
</html>
<?php 
	exit();
?>