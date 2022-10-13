<?php 
	if(!isset($bien_bao_mat)){exit();}
	$nd_ckt=$_SERVER['PHP_SELF'];$m_ckt_lllll_l_ll_999=explode("cumchucnang",$nd_ckt);
	$so=count($m_ckt_lllll_l_ll_999);if($so>1){exit();}
?>
<html>
<head>
	<meta charset="utf-8" >
	<title>Web</title>
</head>
<body>
<?php 
	if($chuc_nang_binh_luan_danh_sach_bai_viet=="bat")
	{
		$thoi_gian_xoa_binh_luan_san_pham=lay_thong_so("thoi_gian_xoa_binh_luan_san_pham");
		$time=time();
		
		$so=$time-$thoi_gian_xoa_binh_luan_san_pham;
		
		//xuat_bm("$so <hr>");
		
		if($so>4)
		{
			$id=get_bm("id");
			$id_bv=get_bm("id_bv");
			$trang=get_bm("trang");
			
			if($trang=="sai"){$trang=1;}
			
			$so_lan_xoa=lay_o("so_lan_xoa",$id,"binh_luan_lllll");
			
			$so_lan_xoa_bot_1=$so_lan_xoa-1;
			
			if($so_lan_xoa<=1)
			{		
				$tv="select count(*) from binh_luan_lllll where id='$id' ";
				$tv_1=truy_van_bm($tv);
				$tv_2=mysql_fetch_array($tv_1);
				if($tv_2[0]!=0)
				{
					
					cap_nhat_sbl_tn_sau_khi_xoa();
					
					$tv_xoa="DELETE FROM `binh_luan_lllll` WHERE `id` = '$id' ";		
					truy_van_bm($tv_xoa);
				}
			}
			else 
			{
				sua_o($so_lan_xoa_bot_1,"so_lan_xoa",$id,"binh_luan_lllll");
			}
			
			sua_thong_so_l($time,"thoi_gian_xoa_binh_luan_san_pham");
			
			$lien_ket_chuyen_trang="?thamso=chi_tiet_tin_tuc&id=".$id_bv."&trang=".$trang;
			
			chuyen_trang($lien_ket_chuyen_trang);
			
		}
		else 
		{
			
			thong_bao_a10("<div style='width:660px' >Có lỗi xảy ra . Web được lập trình 4 giây mới xóa được bình luận , có thể ai đó đã xóa bình luận nào đó vào khoảng 4 giây gần đây </div>","Về trang trước");
			
		}
	}

	
?>
</body>
</html>
<?php 
	exit();
?>
