<?php 
	if(!isset($bien_bao_mat)){exit();}
	if($bien_bao_mat!="co"){exit();}
?>
<?php 
	$noi_dung=post_bm("tbtc");
	sua_o($noi_dung,"luot_truy_cap","1","luot_truy_cap");
	
	$noi_dung=post_bm("tctn");
	sua_o($noi_dung,"luot_truy_cap","2","luot_truy_cap");
	
	$noi_dung=post_bm("tctt");
	sua_o($noi_dung,"luot_truy_cap","5","luot_truy_cap");
	
	$noi_dung=post_bm("tct_nam");
	sua_o($noi_dung,"luot_truy_cap","6","luot_truy_cap");
	
	trang_truoc_a1();
?>