<?php 
	chong_pha_hoai();
?>
<?php 
	//echo $_POST['them_san_pham'];
	//thongbao("dung lai");
	if($_POST['them_san_pham']=="them_san_pham")
	{
		include("cumchucnang/du_lieu/san_pham/xlbm_them.php");
	}
	if($_POST['sua_san_pham']=="sua_san_pham")
	{
		include("cumchucnang/du_lieu/san_pham/xlbm_sua.php");
	}
	if($_GET['thamso']=="xoa_san_pham")
	{

	}


	if($_POST['them_menu_ngang']=="them_menu_ngang")
	{
		include("cumchucnang/menu_ngang/xlbm_them.php");
	}
	if($_POST['sua_menu_ngang']=="sua_menu_ngang")
	{
		include("cumchucnang/menu_ngang/xlbm_sua.php");
	}
	if($_GET['thamso']=="xoa_menu_ngang")
	{
		include("cumchucnang/menu_ngang/xoa.php");
		trang_truoc_a1();
	}
	
	if(isset($_POST['cap_nhat_ksp']))
	{
		include("cumchucnang/khung_san_pham/thuc_hien_sua.php");
		trang_truoc_a1();
	}
	if(isset($_POST['bm_st_ksp']))
	{
		include("cumchucnang/khung_san_pham/thuc_hien_sua_ten.php");
	}
	if(isset($_POST['bm_s_ssp_tk']))
	{
		include("cumchucnang/khung_san_pham/thuc_hien_sua_ssp.php");
	}
	if(isset($_POST['bm_sxcp']))
	{
		include("cumchucnang/cot_phai/thuc_hien_sua.php");
	}
	if(isset($_POST['bm_kbv']))
	{
		include("cumchucnang/khung_van_ban/thuc_hien_sua.php");
	}
	if($_GET['thamso']=="xoa_ha_knl")
	{
		include("cumchucnang/hinh_anh_knl/xoa.php");
		trang_truoc_a1();
	}
	if(isset($_POST['cn_sx_menu']))
	{
		include("cumchucnang/menu_ngang/cn_sx_menu.php");
		trang_truoc_a1();
	}
	if(isset($_POST['cn_sx_sp']))
	{
		include("cumchucnang/du_lieu/san_pham/cn_sx_sp.php");
		trang_truoc_a1();
	}
	if(isset($_POST['cn_sx_tt']))
	{
		include("cumchucnang/du_lieu/tin_tuc/cn_sx_tt.php");
		trang_truoc_a1();
	}
	if(isset($_POST['bm_sua_giao_dien']))
	{
		include("cumchucnang/giao_dien/thuc_hien_sua.php");
		trang_truoc_a1();
	}
	if(isset($_POST['bm_sgd_menu']))
	{
		include("cumchucnang/giao_dien/tuy_chinh/menu/thuc_hien_sua.php");
		//trang_truoc_a1();
	}
	if(isset($_POST['bm_sgd_menu_2']))
	{
		include("cumchucnang/giao_dien/tuy_chinh/menu/thuc_hien_sua_2.php");
		//trang_truoc_a1();
	}
	
	$thay_doi_thong_ke=post_bm("thay_doi_thong_ke");
	
	if($thay_doi_thong_ke!="sai")
	{
		if($thay_doi_thong_ke=="thay_doi_thong_ke")
		{
			include("cumchucnang/thong_ke/thuc_hien_sua.php");
		}
	}
	
	
	$bm_ss_sp_td=post_bm("bm_ss_sp_td");
	
	if($bm_ss_sp_td!="sai")
	{
		if($bm_ss_sp_td=="bm_ss_sp_td")
		{
			include("cumchucnang/du_lieu/san_pham/ths_ssp_td.php");
		}
	}
	
	$binh_luan_2->xu_ly_post_get_bl();
	
	$tro_chuyen->xu_ly_post_get_tc();
	
	
	$thay_doi_thong_tin_web=post_bm('thay_doi_thong_tin_web');
	
	if($thay_doi_thong_tin_web!="sai")
	{
		if($thay_doi_thong_tin_web=="thay_doi_thong_tin_web")
		{
			include("cumchucnang/thong_tin_web/thuc_hien_sua.php");
		}
	}
	
?>