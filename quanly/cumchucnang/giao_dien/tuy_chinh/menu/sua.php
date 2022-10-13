<?php 
	if(!isset($bien_bao_mat)){exit();}
	if($bien_bao_mat!="co"){exit();}
?>
<?php 
	include("../csdl_php/giao_dien/menu/menu.php");
	$mau_nen=$csdl['gd_menu']['mau_nen'];
	$hinh_nen=$csdl['gd_menu']['hinh_nen'];
	$duong_dan_hinh="../giao_dien/tuy_chinh/hinh_anh/menu/1/".$csdl['gd_menu']['hinh_nen'];
	//echo "<br>".$duong_dan_hinh;
	//print_r($csdl['gd_menu']);echo "<hr>";
	$mau_chu=$csdl['gd_menu']['mau_chu_menu_cap_1'];
	$mau_chu_2=$csdl['gd_menu']['mau_chu_krcv_menu_cap_1'];
	$mau_sac_3=$csdl['gd_menu']['mau_dau_phan_cach'];
	$mau_sac_4=$csdl['gd_menu']['mau_nen_krcv_menu_cap_1'];
	
	
	$tc_mn_krcv_menu=$csdl['gd_menu']['tc_mn_krcv_menu'];
	
	
	
?>
<br>
<form method="post" action="" enctype="multipart/form-data" >
<div style="margin-left:20px;" >
<h1 style='color:blue' >Đổi giao diện menu</h1><br>
<div style="border:1px solid blue;width:900px;padding:20px" >
	<h2>Menu cấp 1</h2><br>
	<?php 

		$l_1="";$l_2="";
		if($csdl['gd_menu']['tc_mn_hn']=="mau_nen"){$l_1="chon_truoc";}
		if($csdl['gd_menu']['tc_mn_hn']=="hinh_nen"){$l_2="chon_truoc";}
		
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
		
		vung("rong : 880px ; duong_vien : 1px | black ; le : 10px ");
		
			xuat("Hình nền : <br><br>");
			
			hinh_anh("dd : $duong_dan_hinh ; ");
			
			xd_2(2);
			
			khung("kieu : tap_tin ; ten : hinh_1 ");
			
			khung("kieu : an ; ten : hinh_cu ; gia_tri : $hinh_nen ");
			
			xuat("<br><br>");
		
		vung("/");
		
		//xuat("<hr>");
		
		xuat("<br><br>");
		
		xuat("Màu chữ menu : ");
		
		khung("ten : mau_chu ; gia_tri : $mau_chu ; rong : 200px ; cach_trai : 101px");
		
		xuat("<br><br>");
		
		xuat("Màu chữ khi rê chuột vào menu : ");
		
		
		khung("ten : mau_chu_2 ; gia_tri : $mau_chu_2 ; rong : 200px");
		
		xuat("<br><br>");
		
		xuat("Màu dấu phân cách : ");
		
		
		khung("ten : mau_sac_3 ; gia_tri : $mau_sac_3 ; rong : 200px; cach_trai : 73px ");
		
		xuat("<br><br>");
		
	
		vung("rong : 880px ; duong_vien : 1px | black ; le : 10px ");
		
			xuat("Màu nền khi rê chuột vào menu : ");

			xd_2(2);

			xuat("Sử dụng : ");	
			
			$l_1="";$l_2="";
			
			//xuat($tc_mn_krcv_menu);
			
			if($tc_mn_krcv_menu=="co"){$l_1="chon_truoc"; }
			if($tc_mn_krcv_menu=="khong"){$l_2="chon_truoc";}
			
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
		
		xuat("<br><br>");


	?>

	<input type="hidden" name="bm_sgd_menu" value="bm_sgd_menu" > 

	<input type="submit" value="Sửa" style="width:100px;height:40px;font-size:22px;margin-top:20px" >


	</form>
	
	

	</div>
</div>

<?php 
	include("cumchucnang/giao_dien/tuy_chinh/menu/sua_2.php");
?>