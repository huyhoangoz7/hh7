<?php 
	chong_pha_hoai();
?>
<?php 

	$ccn="cumchucnang/";
	$tc="tro_chuyen/";

	function goi_tt_blpt($ts,$dd)
	{
		$thamso=get_bm('thamso');
		if($thamso==$ts)
		{
			include($dd);
		}
	}

	$thamso=get_bm('thamso');
	switch($thamso)
	{	
		case "bien_luan_link_menu__qcp":
			include("cumchucnang/bien_luan_link_menu/bien_luan_link_menu__qcp.php");
		break;
		case "bien_luan_link_menu__qct":
			include("cumchucnang/bien_luan_link_menu/bien_luan_link_menu__qct.php");
		break;
		case "bien_luan_link_menu__qctp":
			include("cumchucnang/bien_luan_link_menu/bien_luan_link_menu__qctp.php");
		break;
		case "bien_luan_link_menu__httt":
			include("cumchucnang/bien_luan_link_menu/bien_luan_link_menu__httt.php");
		break;
		case "bien_luan_quan_ly_du_lieu__www":
			include("cumchucnang/bien_luan_link_menu/bien_luan_quan_ly_du_lieu__www.php");
		break;
		case "bien_luan_quan_ly_menu__www":
			include("cumchucnang/bien_luan_link_menu/bien_luan_quan_ly_menu__www.php");
		break;
		case "bien_luan_them_du_lieu__www":
			include("cumchucnang/bien_luan_link_menu/bien_luan_them_du_lieu__www.php");
		break;
		case "bien_luan_them_menu__www":
			include("cumchucnang/bien_luan_link_menu/bien_luan_them_menu__www.php");
		break;
		case "thay_doi_thong_tin_quan_tri":
			include("cumchucnang/dang_nhap_quan_ly/thay_doi_thong_tin_quan_tri.php");
		break;
		case "quan_ly_san_pham":
			include("cumchucnang/du_lieu/san_pham/quan_ly.php");
		break;
		case "them_san_pham":
			//echo "them san pham <hr>";
			include("cumchucnang/du_lieu/san_pham/them.php");
		break;
		case "sua_san_pham":
			//echo "them san pham <hr>";
			include("cumchucnang/du_lieu/san_pham/sua.php");
		break;
		case "ssp_td_k_xsp":
			include("cumchucnang/du_lieu/san_pham/ssp_td_k_xsp.php");
		break;
		case "quan_ly_tin_tuc":
			include("cumchucnang/du_lieu/tin_tuc/quan_ly.php");
		break;
		case "them_tin_tuc":
			include("cumchucnang/du_lieu/tin_tuc/them.php");
		break;
		case "sua_tin_tuc":
			include("cumchucnang/du_lieu/tin_tuc/sua.php");
		break;
		case "quan_ly_du_lieu_mot_tin":
			include("cumchucnang/du_lieu/du_lieu_mot_tin/quan_ly.php");
		break;
		case "quan_ly_du_lieu_mot_tin_2":
			include("cumchucnang/menu_ngang/ql_bv_1t.php");
		break;
		case "sua_du_lieu_mot_tin":
			//echo "them san pham <hr>";
			include("cumchucnang/du_lieu/du_lieu_mot_tin/sua.php");
		break;

		case "them_menu_ngang":
			include("cumchucnang/menu_ngang/them.php");
		break;
		case "mot_so_menu_ngang_duoc_ho_tro":
			include("cumchucnang/menu_ngang/mot_so_menu_ngang_duoc_ho_tro.php");
		break;
		case "quan_ly_menu_ngang":
			include("cumchucnang/menu_ngang/quan_ly.php");
		break;
		case "sua_menu_ngang":
			include("cumchucnang/menu_ngang/sua.php");
		break;
		case "them_menu_doc":
			include("cumchucnang/menu_doc/them.php");
		break;
		case "quan_ly_menu_doc":
			include("cumchucnang/menu_doc/quan_ly.php");
		break;
		case "sua_menu_doc":
			include("cumchucnang/menu_doc/sua.php");
		break;
		case "quan_ly_slideshow_trang_chu":
			include("cumchucnang/slideshow/quan_ly.php");
		break;
		case "sua_slideshow":
			include("cumchucnang/slideshow/sua.php");
		break;
		case "quan_ly_san_pham_trang_chu":
			include("cumchucnang/san_pham_trang_chu/quan_ly.php");
		break;
		case "them_quang_cao_phai":
			include("cumchucnang/quang_cao/phai/them.php");
		break;
		case "quan_ly_quang_cao_phai":
			include("cumchucnang/quang_cao/phai/quan_ly.php");
		break;
		case "sua_quang_cao_phai":
			include("cumchucnang/quang_cao/phai/sua.php");
		break;
		case "thay_doi_lien_he":
			include("cumchucnang/thay_doi_lien_he/thay_doi_lien_he.php");
		break;
		case "thay_doi_banner":
			include("cumchucnang/banner/sua.php");
		break;
		case "thay_doi_footer":
			include("cumchucnang/footer/sua.php");
		break;
		case "ksp":
			include("cumchucnang/khung_san_pham/quan_ly.php");
		break;
		case "sua_ten_khung_san_pham":
			include("cumchucnang/khung_san_pham/sua_ten.php");
		break;
		case "sua_ssp_trong_khung":
			include("cumchucnang/khung_san_pham/sua_ssp.php");
		break;
		case "ksp_a1":
			include("cumchucnang/khung_san_pham/lien_ket.php");
		break;
		case "bt_sx_ksp":
			include("cumchucnang/khung_san_pham/bt_sx_ksp.php");
		break;
		case "sxcp":
			include("cumchucnang/cot_phai/sap_xep.php");
		break;
		case "kvb":
			include("cumchucnang/khung_van_ban/kvb.php");
		break;
		case "bt_sx_kvb":
			include("cumchucnang/khung_van_ban/bt_sx_kvb.php");
		break;
		case "kvb_a1":
			include("cumchucnang/khung_van_ban/lien_ket.php");
		break;
		case "hinh_anh_knl": 
			include("cumchucnang/hinh_anh_knl/quan_ly.php");
		break;
		case "sua_thong_ke": 
			include("cumchucnang/thong_ke/sua.php");
		break;
		case "doi_giao_dien": 
			include("cumchucnang/giao_dien/sua.php");
		break;
		case "doi_ten_web": 
			include("cumchucnang/thong_tin_web/sua.php");
		break;
		case "dgd_tc":
			$ma=lay("ma");
			switch($ma)
			{
				case "doi_giao_dien_menu":
					include("cumchucnang/giao_dien/tuy_chinh/menu/sua.php");
				break;
			}
		break;		
		
		case "":
			include("cumchucnang/trang_chu/trang_chu.php");	
		break;
		case "sai":
			include("cumchucnang/trang_chu/trang_chu.php");	
		break;		
		default:
			//include("cumchucnang/trang_chu/trang_chu.php");			
	}

	$binh_luan_2->bien_luan_xuat_noi_dung();
	
	$tro_chuyen->bl_xuat_nd_tc();
	
?>