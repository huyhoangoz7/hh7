<?php 
	if(!isset($bien_bao_mat)){exit();}
	$nd_ckt=$_SERVER['PHP_SELF'];$m_ckt_lllll_l_ll_999=explode("cumchucnang",$nd_ckt);
	$so=count($m_ckt_lllll_l_ll_999);if($so>1){exit();}
	if($bien_bao_mat!="co"){exit();}
?>
<?php 
	class xoa_binh_luan extends sua_binh_luan
	{
		function xoa_bl()
		{
			$id=get_bm('id');
			$tv="DELETE FROM `binh_luan_lllll` WHERE `id` = '$id' ";
			
			truy_van_bm($tv);
			
			trang_truoc_a1();
			
			exit();
			
		}
	}
?>