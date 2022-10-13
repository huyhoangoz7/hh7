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
	$gt_1=trim($_POST['hop_chon_1']);
	$gt_2=trim($_POST['hop_chon_2']);
	$gt_3=trim($_POST['hop_chon_3']);
	$gt_4=trim($_POST['hop_chon_4']);
	$gt_5=trim($_POST['hop_chon_5']);
	$gt_6=trim($_POST['hop_chon_6']);
	$gt_7=trim($_POST['hop_chon_7']);
	$gt_8=trim($_POST['hop_chon_8']);
	$gt_9=trim($_POST['hop_chon_9']);
	$gt_10=trim($_POST['hop_chon_10']);
	
	$c=$gt_1."[---]";
	$c=$c.$gt_2."[---]";
	$c=$c.$gt_3."[---]";
	$c=$c.$gt_4."[---]";
	$c=$c.$gt_5."[---]";
	$c=$c.$gt_6."[---]";
	$c=$c.$gt_7."[---]";
	$c=$c.$gt_8."[---]";
	$c=$c.$gt_9."[---]";
	$c=$c.$gt_10;
	
	sua_thong_so($c,"sxcp");

			
	trangtruoc();
?>
</body>
</html>
