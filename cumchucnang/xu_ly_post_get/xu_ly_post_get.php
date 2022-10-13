<?php 
	chong_pha_hoai();
?>
<?php 

	$thamso=get_bm('thamso');
	
	if($thamso=="tim")
	{
		include("cumchucnang/tim_kiem/xl_bm_tk.php");
	}
	
	if($chuc_nang_binh_luan_san_pham=="bat")
	{
	
		$thamso=get_bm('thamso');
	
		$bm_bl_sp=post_bm('bm_bl_sp');
		
		if($bm_bl_sp!="sai")
		{
			if($bm_bl_sp=="bm_bl_sp")
			{
				include("cumchucnang/binh_luan/san_pham/xu_ly_bm_bl_sp.php");
			}
		}
		
		$bm_bl_sp_2=post_bm('bm_bl_sp_2');
		
		if($bm_bl_sp_2!="sai")
		{
			if($bm_bl_sp_2=="bm_bl_sp_2")
			{
				include("cumchucnang/binh_luan/san_pham/xu_ly_bm_bl_sp_2.php");
			}
		}
		
		if($thamso=="xoa_binh_luan_sp")
		{
			include("cumchucnang/binh_luan/san_pham/xoa.php");
		}
		if($thamso=="xoa_binh_luan_sp_2")
		{
			include("cumchucnang/binh_luan/san_pham/xoa_2.php");
		}
		
	}
	
	if($chuc_nang_binh_luan_danh_sach_bai_viet=="bat")
	{
		
		$thamso=get_bm('thamso');
		
		$bm_bl_bv=post_bm('bm_bl_bv');
		
		if($bm_bl_bv!="sai")
		{
			if($bm_bl_bv=="bm_bl_bv")
			{
				include("cumchucnang/binh_luan/danh_sach_bai_viet/xu_ly_bm_bl_bv.php");
			}
		}
		
		$bm_bl_bv_2=post_bm('bm_bl_bv_2');
		
		if($bm_bl_bv_2!="sai")
		{
			if($bm_bl_bv_2=="bm_bl_bv_2")
			{
				include("cumchucnang/binh_luan/danh_sach_bai_viet/xu_ly_bm_bl_bv_2.php");
			}
		}
		
		if($thamso=="xoa_binh_luan_bv")
		{
			include("cumchucnang/binh_luan/danh_sach_bai_viet/xoa.php");
		}
		
		if($thamso=="xoa_binh_luan_bv_2")
		{
			include("cumchucnang/binh_luan/danh_sach_bai_viet/xoa_2.php");
		}
		
	}
	
	if($chuc_nang_binh_luan_bai_viet_mot_tin=="bat")
	{
		$thamso=get_bm('thamso');
		
		$bm_bl_bv_mt=post_bm('bm_bl_bv_mt');
		
		if($bm_bl_bv_mt!="sai")
		{
			if($bm_bl_bv_mt=="bm_bl_bv_mt")
			{
				include("cumchucnang/binh_luan/bai_viet_mot_tin/xu_ly_bm_bl_bv_mt.php");
			}
		}
		
		$bm_bl_bv_mt_2=post_bm('bm_bl_bv_mt_2');
		
		if($bm_bl_bv_mt_2!="sai")
		{
			if($bm_bl_bv_mt_2=="bm_bl_bv_mt_2")
			{
				include("cumchucnang/binh_luan/bai_viet_mot_tin/xu_ly_bm_bl_bv_mt_2.php");
			}
		}
		
		if($thamso=="xoa_binh_luan_bv_mt")
		{
			include("cumchucnang/binh_luan/bai_viet_mot_tin/xoa.php");
		}
		
		if($thamso=="xoa_binh_luan_bv_mt_2")
		{
			include("cumchucnang/binh_luan/bai_viet_mot_tin/xoa_2.php");
		}
		
	}

?>