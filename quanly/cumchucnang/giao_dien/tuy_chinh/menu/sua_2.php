<?php 
	if(!isset($bien_bao_mat)){exit();}
	if($bien_bao_mat!="co"){exit();}
?>
<?php 
	include("../csdl_php/giao_dien/menu/menu.php");
	$mau_nen=$csdl['gd_menu']['mau_nen_cd'];
	$hinh_nen=$csdl['gd_menu']['hinh_nen_cd'];
	$duong_dan_hinh="../giao_dien/tuy_chinh/hinh_anh/menu/2/".$csdl['gd_menu']['hinh_nen'];

	$hn_theo_chieu_doc_cd=$csdl['gd_menu']['hn_theo_chieu_doc_cd'];
	
	$mau_chu=$csdl['gd_menu']['mau_chu_menu_cap_duoi'];
	$mau_chu_2=$csdl['gd_menu']['mau_chu_krcv_menu_cap_duoi'];
	
	$mau_sac_3=$csdl['gd_menu']['mau_dau_phan_cach'];
	$mau_sac_4=$csdl['gd_menu']['mau_nen_krcv_menu_cap_duoi'];
	
	$mau_duong_vien_menu_cap_duoi=$csdl['gd_menu']['mau_duong_vien_menu_cap_duoi'];
	
	
	$tc_mn_krcv_menu=$csdl['gd_menu']['tc_mn_krcv_menu_cap_duoi'];
	
	
	
?>
<br>
<form method="post" action="" enctype="multipart/form-data" >
<div style="margin-left:20px;" >
<br><br>
<div style="border:1px solid blue;width:900px;padding:20px" >
	<h2>Menu cấp dưới</h2><br>
	<?php 

		$l_1="";$l_2="";
		if($csdl['gd_menu']['tc_mn_hn_cd']=="mau_nen"){$l_1="chon_truoc";}
		if($csdl['gd_menu']['tc_mn_hn_cd']=="hinh_nen"){$l_2="chon_truoc";}
		
		vung("rong : 880px ; duong_vien : 1px | black ; le : 10px ");
		
			xd();
		
			d("Màu nền hoặc hình nền : ");
			
			xd_2(2);
			
			xuat("Sử dụng : ");
			
			hop_chon(" 
			
				ten : tc_mn_hn ; 
				
				lua_chon : Màu nền | mau_nen | $l_1 ;
				
				lua_chon : Hình nền | hinh_nen | $l_2 ;
			
			");
			
			xuat("<br><br>");
			
			xuat("Màu nền : ");
			
			khung("ten : mau_nen ; gia_tri : $mau_nen ; rong : 200px");
			
			xuat("<br><br>");
			
			//xuat("<hr>");
		
		
		
			xuat("Hình nền : <br><br>");
			
			hinh_anh("dd : $duong_dan_hinh ; ");
			
			xd_2(2);
			
			khung("kieu : tap_tin ; ten : hinh_1 ");
			
			khung("kieu : an ; ten : hinh_cu ; gia_tri : $hinh_nen ");
			
			xuat("<br><br>");
			
			xuat("Lặp lại theo chiều dọc : ");
			
			$l_1="";$l_2="";
			if($csdl['gd_menu']['hn_theo_chieu_doc_cd']=="khong"){$l_1="chon_truoc";}
			if($csdl['gd_menu']['hn_theo_chieu_doc_cd']=="co"){$l_2="chon_truoc";}
			
			hop_chon(" 
			
				ten : hn_theo_chieu_doc_cd ; 
				
				lua_chon : Không | khong | $l_1 ;
				
				lua_chon : Có | co | $l_2 ;
			
			");
			
			xd_2(2);
		
		vung("/");
		
		//xuat("<hr>");
		
		xuat("<br><br>");
		
		xuat("Màu chữ menu : ");
		
		khung("ten : mau_chu ; gia_tri : $mau_chu ; rong : 200px ; cach_trai : 101px");
		
		xuat("<br><br>");
		
		xuat("Màu chữ khi rê chuột vào menu : ");
		
		
		khung("ten : mau_chu_2 ; gia_tri : $mau_chu_2 ; rong : 200px");
		
		xuat("<br><br>");
		

	
		vung("rong : 880px ; duong_vien : 1px | black ; le : 10px ");
		
			d("Màu nền khi rê chuột vào menu : ");

			xd_2(2);

			xuat("Sử dụng : ");	
			
			$l_1="";$l_2="";
			
			//xuat($tc_mn_krcv_menu);
			
			if($tc_mn_krcv_menu=="co"){$l_1="selected"; }
			if($tc_mn_krcv_menu=="khong"){$l_2="selected";}
			
			hop_chon("
				ten : tc_mn_krcv_menu ;
				lua_chon : Có | co | $l_1 ;
				lua_chon : Không | khong | $l_2 ;
				cach_trai : 130px ;
			");
			
			xd_2(2);		
			
			xuat("Màu : ");
			
			khung("ten : mau_sac_4 ; gia_tri : $mau_sac_4 ; rong : 200px; cach_trai : 152px ");
			
			
		
		vung("/");
		
		xd_2(2);
			
		xuat("Màu đường viền : ");
		
		khung("
		
				ten : mau_duong_vien_menu_cap_duoi ;
				gia_tri : $mau_duong_vien_menu_cap_duoi ;
				rong : 200px;
				cach_trai : 92px 
				
				");
		
		xuat("<br><br>");


	?>

	<input type="hidden" name="bm_sgd_menu_2" value="bm_sgd_menu_2" > 

	<input type="submit" value="Sửa" style="width:100px;height:40px;font-size:22px;margin-top:20px" >


	</form>


	</div>
</div>
