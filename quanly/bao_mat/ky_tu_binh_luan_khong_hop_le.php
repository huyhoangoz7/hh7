<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 

	
	$chuoi_khong_hop_le="~,`,#,$,%,^,&,*,(,),=,|,\,{,[,],},;,',".'"'.",<,>,/,*,/";

	
	$mang_phan_tu_khong_hop_le=explode(",",$chuoi_khong_hop_le);
	
	//print_r($mang_phan_tu_hop_le);echo "<hr>";
	
?>