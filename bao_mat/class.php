<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	
	include("bao_mat/class_ham_bao_mat_chung.php");	
	include("bao_mat/class_tim_kiem.php");	
	include("bao_mat/class_binh_luan.php");	
	
	class bao_mat extends binh_luan
	{		
		
		
		
		function kiem_tra_ky_danh($ky_danh)
		{
			
			$ky_danh__lllll=$ky_danh;
			
			//////////////////////////////////////////////////////////////////////////
			
			
			$kiem=$this->kiem_tra_tu_trong_chuoi("thanh_vien_lllll",$ky_danh);
			//xuat_bm($kiem);xuat_bm("<hr>");
			if($kiem=="khong_hop_le")
			{
				//xuat_bm("llllllllllllllllllllllllll");xuat_bm("<hr>");
				$_SESSION['ma_loi_kiem_tra_ky_danh']="lkt_kd_1";
				return "khong_hop_le";
			}
			
			
			
			
			
			//////////////////////////////////////////////////////////////////////////
			
			
			$m=explode(" ",$ky_danh);
			
			$so=count($m);
			
			if($so!=1)
			{
				$_SESSION['ma_loi_kiem_tra_ky_danh']="lkt_kd_2";
				return "khong_hop_le";
			}
			
			// kiem tra ky danh co khoang trang hay khong
			
			
			//////////////////////////////////////////////////////////////////////////
			
			
			$strlen_ky_danh=strlen($ky_danh);
			
			if($strlen_ky_danh>40)
			{
				$_SESSION['ma_loi_kiem_tra_ky_danh']="lkt_kd_3";
				return "khong_hop_le";
			}
			
			
			// kiem tra do dai ky danh ( do dai ky danh khong duoc qua 40 ky tu )
			
			
			//////////////////////////////////////////////////////////////////////////
			
			
			$ky_danh_trim=trim($ky_danh);
			
			$strlen_ky_danh=strlen($ky_danh__lllll);
			$strlen_ky_danh_trim=strlen($ky_danh_trim);
			
			//xuat_bm($strlen_ky_danh." - ".$ky_danh__lllll);xuat_bm(" - <hr>");
			//xuat_bm($strlen_ky_danh_trim);xuat_bm(" -- <hr>");
			
			if($strlen_ky_danh!=$strlen_ky_danh_trim)
			{
				$_SESSION['ma_loi_kiem_tra_ky_danh']="lkt_kd_4";
				return "khong_hop_le";
			}
			
			// kiem tra ky danh co de khoang trang o dau chuoi hay cuoi chuoi khong
			
			
			//////////////////////////////////////////////////////////////////////////
			
			
			for($i=0;$i<$strlen_ky_danh;$i++)
			{
				$c=substr($ky_danh,$i,1);
				$mang_tung_ky_tu[$i]=$c;
			}
			
			//print_r($mang_tung_ky_tu);
			
			for($i=0;$i<count($mang_tung_ky_tu);$i++)
			{
				
				$ky_tu=$mang_tung_ky_tu[$i];
				
				$kiem=$this->kiem_tra_tung_ky_tu($ky_tu);
				
				if($kiem=="khong_hop_le")
				{
					$_SESSION['ma_loi_kiem_tra_ky_danh']="lkt_kd_5";
					return "khong_hop_le";
				}
				
			}
			
			
			// kiem tra ky danh co phai la 38 ky tu hop le hay khong
			
			
			//////////////////////////////////////////////////////////////////////////
			
			
			return "hop_le";
			
		}
		
		function kiem_tra_mat_khau($mat_khau)
		{
			return $this->kiem_tra_ky_danh($mat_khau);
		}
		
	}
	
	
	
?>