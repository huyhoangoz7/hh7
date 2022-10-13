<?php 
	chong_pha_hoai();
?>
<?php 
	
	$cap_do=$_POST['cap_do'];
	//$loai=$_POST['loai_menu'];
	$ndmt=$_POST['noi_dung_mo_ta'];
	$noi_dung=$_POST['noi_dung'];
	$ten_menu=$_POST['ten_menu'];
	$lien_ket=$_POST['lien_ket'];
	
	$bat_tat_binh_luan=post_bm("bat_tat_binh_luan");

	$tv="
		UPDATE `menu_ngang` SET `ten` = '$ten_menu',
		`link` = '$lien_ket',
		`thuoc_menu` = '$cap_do',
		`noi_dung_mo_ta`='$ndmt' ,
		`noi_dung`='$noi_dung' ,
		`bat_tat_binh_luan`='$bat_tat_binh_luan' 
		
		WHERE `id` ='$_GET[id]';
	";
	mysql_query($tv);
?>