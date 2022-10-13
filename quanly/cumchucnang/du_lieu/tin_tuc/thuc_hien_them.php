<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="select max(id) from tin_tuc ";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$id_lnc1=$tv_2[0]+1;
?>
<?php 
	kiem_tra_anh_upload__ddd("hinh_anh");
	
	$cap_do=$_POST['cap_do'];

	$ten_hinh=$_FILES['hinh_anh']['name'];
	
	$bat_tat_binh_luan=post_bm("bat_tat_binh_luan");

		$duong_dan_upload="../hinhanh_flash/tin_tuc/".$ten_hinh;
		move_uploaded_file($_FILES['hinh_anh']['tmp_name'],$duong_dan_upload);
		$chuoi="
			INSERT INTO `tin_tuc` (
			`id` ,
			`ten` ,
			`hinh_anh` ,
			`noi_dung`,
			`thuoc_menu`,
			`sap_xep`,
			`bat_tat_binh_luan`
			)
			VALUES (
			NULL , 
			'$_POST[ten]', 
			'$ten_hinh',  
			'$_POST[noi_dung]',
			'$cap_do',
			'$id_lnc1',
			'$bat_tat_binh_luan'
			);
		";
		//thongbao($chuoi);
		mysql_query($chuoi);
		//$_SESSION[$ten_danh_dau__kkk."cap_do___kkk"]=$_POST['cap_do'];

		$_SESSION["cap_do_tin_tuc"]=$_POST['cap_do'];
		
		tao_session_bm("bt_bl_bv",$bat_tat_binh_luan);

?>