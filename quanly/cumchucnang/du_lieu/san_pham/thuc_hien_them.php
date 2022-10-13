<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="select max(id) from san_pham ";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$id_lnc1=$tv_2[0]+1;
?>
<?php 
	$ten_hinh=$_FILES['hinh_anh']['name'];
	$m_tv="select max(id) from san_pham";
	$m_tv_1=mysql_query($m_tv);
	$m_tv_2=mysql_fetch_row($m_tv_1);
	$max__id_cong_1=$m_tv_2[0]+1;

	$m_tv="select max(sap_xep_trang_chu) from san_pham";
	$m_tv_1=mysql_query($m_tv);
	$m_tv_2=mysql_fetch_row($m_tv_1);
	$max__sxtt=$m_tv_2[0]+1;
	
	kiem_tra_anh_upload__ddd("hinh_anh");
	
	$khung_san_pham=$_POST['khung_san_pham'];
	if($khung_san_pham!="khong")
	{
		$ten_ksp=",`ksp".$khung_san_pham."`";
		$gt_ksp=",'co'";
	}
	
	$noi_dung=$_POST['noi_dung'];
	$loai_gia=$_POST['loai_gia'];
	$noi_dung_ngan=$_POST['noi_dung_ngan'];
	
	$bat_tat_binh_luan=post_bm("bat_tat_binh_luan");
	
	
	$duong_dan_upload="../hinhanh_flash/san_pham/".$ten_hinh;
	move_uploaded_file($_FILES['hinh_anh']['tmp_name'],$duong_dan_upload);
	
	$chuoi="
		INSERT INTO `san_pham` (
		`id` ,
		`ten` ,
		`hinh_anh` ,
		`gia_ban` ,
		`noi_dung` ,
		`thuoc_menu`,
		`trang_chu`,
		`sap_xep_trang_chu`,
		`loai_gia`,
		`noi_dung_ngan`,
		`loai`,
		`sx_ksp1`,`sx_ksp2`,`sx_ksp3`,`sx_ksp4`,
		`hinh_anh_pnd`,
		`sap_xep`,
		`bat_tat_binh_luan`
		$ten_ksp
		)
		VALUES (
		NULL , 
		'$_POST[ten]', 
		'$ten_hinh', 
		'$_POST[gia]', 
		'$_POST[noi_dung]', 
		'$_POST[cap_do]',
		'$_POST[trang_chu]',
		'$max__sxtt',
		'$loai_gia',
		'$noi_dung_ngan',
		'menu_ngang',
		'$max__id_cong_1','$max__id_cong_1','$max__id_cong_1','$max__id_cong_1',
		'$chuoi_hapnd',
		'$id_lnc1',
		'$bat_tat_binh_luan'
		$gt_ksp		
		);
	";
	mysql_query($chuoi);
	$_SESSION[$ten_danh_dau__kkk."cap_do___kkk"]=$_POST['cap_do'];
	$_SESSION['loai_gia']=$loai_gia;
	$_SESSION['khung_san_pham']=$khung_san_pham;
	
	tao_session_bm("bt_bl_sp",$bat_tat_binh_luan);
	
	
?>