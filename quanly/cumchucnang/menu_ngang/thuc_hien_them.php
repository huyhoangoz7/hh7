<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="select max(id) from menu_ngang ";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$id_lnc1=$tv_2[0]+1;
?>
<?php 
	$loai=$_POST['loai_menu'];
	$thuoc_menu=$_POST['cap_do'];
	$noi_dung_mo_ta=$_POST['noi_dung_mo_ta'];
	$noi_dung=$_POST['noi_dung'];
	$ten_menu=$_POST['ten_menu'];
	$lien_ket=$_POST['lien_ket'];
	
	$bat_tat_binh_luan=post_bm("bat_tat_binh_luan");

	$tv="
		INSERT INTO `menu_ngang` (
		`id` ,
		`ten` ,
		`link`,
		`loai`,
		`thuoc_menu`,
		`noi_dung_mo_ta`,
		`noi_dung`,
		`sap_xep`,
		`bat_tat_binh_luan`
		)
		VALUES (
		NULL , 
		'$ten_menu', 
		'$lien_ket',
		'$loai',
		'$thuoc_menu',
		'$noi_dung_mo_ta',
		'$noi_dung',
		'$id_lnc1',
		'$bat_tat_binh_luan'
		);
	";
	mysql_query($tv);
	$_SESSION['loai_menu']=$loai;
	$_SESSION['cap_do']=$thuoc_menu;
	
	tao_session_bm("bt_bl_bv_mt",$bat_tat_binh_luan);
	
?>