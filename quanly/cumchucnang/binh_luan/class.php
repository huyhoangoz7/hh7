<?php 
	if(!isset($bien_bao_mat)){exit();}
	$nd_ckt=$_SERVER['PHP_SELF'];$m_ckt_lllll_l_ll_999=explode("cumchucnang",$nd_ckt);
	$so=count($m_ckt_lllll_l_ll_999);if($so>1){exit();}
	if($bien_bao_mat!="co"){exit();}
?>

<?php 

	$thu_muc_include="cumchucnang/binh_luan/";

	include($thu_muc_include."tuy_chinh_binh_luan.php");
	include($thu_muc_include."bat_tat_binh_luan.php");
	include($thu_muc_include."sua_binh_luan.php");
	include($thu_muc_include."xoa_binh_luan.php");
	include($thu_muc_include."xem_binh_luan.php");
	include($thu_muc_include."quan_ly_binh_luan.php");
	
	class binh_luan_2 extends quan_ly_binh_luan
	{
		function bien_luan_xuat_noi_dung()
		{
			$thamso=get_bm('thamso');
			
			if($thamso=="quan_ly_binh_luan_san_pham")
			{
				$this->xuat_qlbl("san_pham");
			}
			if($thamso=="quan_ly_binh_luan_bai_viet")
			{
				$this->xuat_qlbl("danh_sach_bai_viet");
			}
			if($thamso=="quan_ly_binh_luan_bai_viet_mot_tin")
			{
				$this->xuat_qlbl("bai_viet_mot_tin");
			}
			if($thamso=="xem_binh_luan")
			{
				$this->xem_bl();
			}
			if($thamso=="sua_binh_luan")
			{
				$this->sua_bl();
			}
			if($thamso=="bat_hoac_tat_binh_luan")
			{
				$this->bat_tat_bl();
			}
			if($thamso=="tuy_chinh_binh_luan")
			{
				$this->tuy_chinh_binh_luan();
			}
		}
		
		function xu_ly_post_get_bl()
		{
			
			$thamso=get_bm('thamso');
			
			if($thamso=="xoa_binh_luan"){$this->xoa_bl();}
			
			$bm_sua_binh_luan=post_bm('bm_sua_binh_luan');			
			
			if($bm_sua_binh_luan!="sai")
			{
				if($bm_sua_binh_luan=="bm_sua_binh_luan")
				{
					$this->thuc_hien_sua_binh_luan();
				}
			}
			
			$bm_bht_binh_luan=post_bm('bm_bht_binh_luan');			
			
			if($bm_bht_binh_luan!="sai")
			{
				if($bm_bht_binh_luan=="bm_bht_binh_luan")
				{
					$this->th_sua_bt_binh_luan();
				}
			}
			
			$bm=post_bm('bieu_mau_tuy_chinh_binh_luan');			
		
			if($bm!="sai")
			{
				if($bm=="bieu_mau_tuy_chinh_binh_luan")
				{
					$this->th_sua_tuy_chinh_binh_luan();
				}
			}
			
		}
	}
?>