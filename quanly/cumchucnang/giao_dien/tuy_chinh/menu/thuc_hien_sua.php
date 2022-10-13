<?php 
	if(!isset($bien_bao_mat_csdl)){exit();}
?>
<?php 
	
	/*$duong_dan_css="../giao_dien/tuy_chinh/chung.css";
	$duong_dan="../csdl_php/giao_dien/menu/menu.php";
	
	$tc_mn_hn=lay_2("tc_mn_hn");
	$mau_nen=lay_2("mau_nen");
	
	$tc_mn_krcv_menu=lay_2("tc_mn_krcv_menu");
	//xuat($tc_mn_krcv_menu);
	
	$mau_chu=lay_2("mau_chu");
	$mau_chu_2=lay_2("mau_chu_2");
	$mau_sac_3=lay_2("mau_sac_3");
	$mau_sac_4=lay_2("mau_sac_4");
	
	
	$mau_chu_l="color:".$mau_chu.";";
	$mau_chu_2_l="color:".$mau_chu_2.";";
	$mau_sac_3_l="color:".$mau_sac_3.";";
	if($tc_mn_krcv_menu=="co")
	{
		$mau_sac_4_l="background:".$mau_sac_4.";";
	}
	else 
	{
		$mau_sac_4_l="";
	}
	
	
	
	if(isset($_FILES['hinh_1']['name']))
	{
		$t_hn_menu_tl=$_FILES['hinh_1']['name'];
	}
	else 
	{
		$t_hn_menu_tl="";
	}
	$t_hn_menu_cu=lay_2("hinh_cu");
	$ten_hinh_nen_menu=$t_hn_menu_cu;
	
	$thu_muc_hinh_nen="../giao_dien/tuy_chinh/hinh_anh/menu/1/";
	$thu_muc_hinh_nen_2="../../giao_dien/tuy_chinh/hinh_anh/menu/1/";
	$duong_dan_hinh_nen_cu=$thu_muc_hinh_nen.$t_hn_menu_cu;
	
	
	sua_csdl_php_3($tc_mn_hn,"gd_menu","tc_mn_hn",$duong_dan);
	
	sua_csdl_php_3($mau_nen,"gd_menu","mau_nen",$duong_dan);
	
	sua_csdl_php_3($mau_chu,"gd_menu","mau_chu_menu_cap_1",$duong_dan);
	
	sua_csdl_php_3($mau_chu_2,"gd_menu","mau_chu_krcv_menu_cap_1",$duong_dan);
	
	sua_csdl_php_3($mau_sac_3,"gd_menu","mau_dau_phan_cach",$duong_dan);
	
	sua_csdl_php_3($mau_sac_4,"gd_menu","mau_nen_krcv_menu_cap_1",$duong_dan);
	
	sua_csdl_php_3($tc_mn_krcv_menu,"gd_menu","tc_mn_krcv_menu",$duong_dan);
	
	if($t_hn_menu_tl!="")
	{
		$duong_dan_hinh_nen=$thu_muc_hinh_nen.$t_hn_menu_tl;
		
		sua_csdl_php_3($t_hn_menu_tl,"gd_menu","hinh_nen",$duong_dan);
		
		xoa_tap_tin($duong_dan_hinh_nen_cu);
		
		$kt_th=kiem_tra_ten_hinh($t_hn_menu_tl);
		
		if($kt_th=="hop_le")
		{
			tai_hinh("hinh_1",$duong_dan_hinh_nen);
		}
		else 
		{
			thong_bao_a1("Tên hình không hợp lệ");
		}
		
		$ten_hinh_nen_menu=$t_hn_menu_tl;
	}
	
	$noi_dung_sua_css="";
	if($tc_mn_hn=="mau_nen")
	{
		$noi_dung_sua_css="background:".$mau_nen.";";
	}
	if($tc_mn_hn=="hinh_nen")
	{
		$noi_dung_sua_css="background:url('".$thu_muc_hinh_nen_2.$ten_hinh_nen_menu."');";
	}
	sua_giao_dien_css($noi_dung_sua_css,"mn_hoac_hn_menu");
	
	sua_giao_dien_css($mau_chu_l,"mau_chu_menu_cap_1");
	
	sua_giao_dien_css($mau_chu_2_l,"mau_chu_krcv_menu_cap_1");
	
	sua_giao_dien_css($mau_sac_3_l,"mau_dau_phan_cach");
	
	sua_giao_dien_css($mau_sac_4_l,"mau_nen_krcv_menu_cap_1");*/
?>
<?php 
	//trang_truoc_a1();
?>