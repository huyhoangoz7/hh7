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
	
	sua_thong_so($ten_1,"td_a1");
	sua_thong_so($ten_2,"td_a2");
	sua_thong_so($ten_3,"td_a3");
	sua_thong_so($ten_4,"td_a4");

			
	trangtruoc();
?>
</body>
</html>
