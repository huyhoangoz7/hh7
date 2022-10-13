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
	$ten_1=trim($_POST['k1']);
	$ten_2=trim($_POST['k2']);
	$ten_3=trim($_POST['k3']);
	$ten_4=trim($_POST['k4']);
	
	sua_thong_so($ten_1,"ssp_ksp1");
	sua_thong_so($ten_2,"ssp_ksp2");
	sua_thong_so($ten_3,"ssp_ksp3");
	sua_thong_so($ten_4,"ssp_ksp4");

			
	trangtruoc();
?>
</body>
</html>
