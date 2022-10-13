<?php 
	if(!isset($bien_bao_mat)){exit();}
	$nd_ckt=$_SERVER['PHP_SELF'];$m_ckt_lllll_l_ll_999=explode("cumchucnang",$nd_ckt);
	$so=count($m_ckt_lllll_l_ll_999);if($so>1){exit();}
	if($bien_bao_mat!="co"){exit();}
?>

<?php 

	//$thu_muc_include=$ccn.$tm_tro_chuyen;

	//include($thu_muc_include."bat_tat_binh_luan.php");
	//include($thu_muc_include."sua_binh_luan.php");
	//include($thu_muc_include."xoa_binh_luan.php");
	//include($thu_muc_include."xem_binh_luan.php");
	//include($thu_muc_include."quan_ly_binh_luan.php");
	
	$dd=$ccn.$tm_tro_chuyen."sua_so_tn_lt.php";
	include($dd);
	
	$dd=$ccn.$tm_tro_chuyen."sua.php";
	include($dd);
	
	$dd=$ccn.$tm_tro_chuyen."xoa.php";
	include($dd);
	
	$dd=$ccn.$tm_tro_chuyen."quan_ly.php";
	include($dd);
	
	$dd=$ccn.$tm_tro_chuyen."bat_tat_tro_chuyen.php";
	include($dd);
	
	
	class tro_chuyen extends bat_tat_tro_chuyen
	{
		function bl_xuat_nd_tc()
		{
			$thamso=get_bm('thamso');
			
			if($thamso=="bat_tat_tro_chuyen")
			{
				$this->bat_tat_tc();
			}
			if($thamso=="ql_tro_chuyen")
			{
				$this->xuat_qltc();
			}
			if($thamso=="sua_tn_tc")
			{
				$this->sua_tn_tc();
			}
			if($thamso=="so_tin_nhan_luu_tru")
			{
				$this->sua_so_tn_lt();
			}
			
			/*if($thamso=="quan_ly_binh_luan_san_pham")
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
			}*/
		}
		
		function xu_ly_post_get_tc()
		{
			
			$thamso=get_bm('thamso');
			
			if($thamso=="xoa_tn_tc"){$this->xoa_tn_tc();}
			
			$bm=post_bm('bm_bt_tc');
			
			if($bm!="sai")
			{
				if($bm=="bm_bt_tc")
				{
					$this->th_sua_bt_tc();
				}
			}
			
			$bm=post_bm('bm_sua_tn_tc');
			
			if($bm!="sai")
			{
				if($bm=="bm_sua_tn_tc")
				{
					$this->th_sua_tn_tc();
				}
			}
			
			$bm=post_bm('bm_sua_stnlt');
			
			if($bm!="sai")
			{
				if($bm=="bm_sua_stnlt")
				{
					$this->th_sua_stnlt();
				}
			}
			
			

			
			/*$bm_sua_binh_luan=post_bm('bm_sua_binh_luan');			
			
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
			}*/
			
		}
	}
?>