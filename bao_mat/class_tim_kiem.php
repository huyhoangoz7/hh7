<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	class tim_kiem_bm extends ham_bao_mat_chung
	{
		function kiem_tra_tung_ky_tu_tu_khoa($ky_tu)
		{
			$hop_le="khong_hop_le";
			
			$bien_bao_mat="co";
			
			include("bao_mat/ky_tu_tim_kiem_hop_le.php");
			
			//xuat_bm(count($mang_phan_tu_hop_le)."-"); 
			
			for($i=0;$i<count($mang_phan_tu_tu_khoa_hop_le);$i++)
			{
				$phan_tu_hop_le=trim($mang_phan_tu_tu_khoa_hop_le[$i]);
				//$phan_tu_hop_le=str_replace("\n","",$phan_tu_hop_le);
				//$phan_tu_hop_le=str_replace("\r","",$phan_tu_hop_le);
				//$phan_tu_hop_le=str_replace("\t","",$phan_tu_hop_le);
				if($ky_tu==$phan_tu_hop_le)
				{
					$hop_le="hop_le";
				}
			}

			//tao_session_bm('ma_loi_kiem_tra_2',$ky_tu);	
			
			return $hop_le;
			
		}	
		function mang_tach_ky_tu_tu_khoa_hop_le($noi_dung)
		{

			$noi_dung=trim($noi_dung);
			$bien_bao_mat="co";
			include("bao_mat/ky_tu_tim_kiem_hop_le.php");
			


			$so=count($mang_phan_tu_tu_khoa_hop_le);
			
			for($i=0;$i<$so;$i++)
			{
				$ky_tu=trim($mang_phan_tu_tu_khoa_hop_le[$i]);
				$noi_dung=str_replace($ky_tu,$ky_tu.";",$noi_dung);
			}
			
			$mang_tung_ky_tu=explode(";",$noi_dung);
			
			return $mang_tung_ky_tu;
		}
		function kiem_tra_tu_khoa($noi_dung)
		{
			$noi_dung=trim($noi_dung);			
		
			$do_dai_noi_dung=strlen($noi_dung);
			
			
			if($do_dai_noi_dung==0){return "khong_hop_le";}
			if($do_dai_noi_dung>100){return "khong_hop_le";}
			
			$mang_tung_ky_tu=$this->mang_tach_ky_tu_tu_khoa_hop_le($noi_dung);
			
			
			$so=count($mang_tung_ky_tu);
		
			for($i=0;$i<$so;$i++)
			{
				
				$ky_tu=trim($mang_tung_ky_tu[$i]);
				
				if($ky_tu!=" " or $ky_tu!="")
				{
					
					$kiem=$this->kiem_tra_tung_ky_tu_tu_khoa($ky_tu);
					
					if($kiem=="khong_hop_le")
					{
						$_SESSION['ma_loi_kiem_tra']="ll_3";
						//xuat_bm("<br>".$ky_tu."<hr>");
						return "khong_hop_le";
					}
					
				}
				
			}
			
			$kiem=$this->kiem_tra_tu_trong_chuoi("thanh_vien_lllll",$noi_dung);
			if($kiem=="khong_hop_le"){$_SESSION['ma_loi_kiem_tra']="ll_4";return "khong_hop_le";}
			$kiem=$this->kiem_tra_tu_trong_chuoi(";",$noi_dung);
			if($kiem=="khong_hop_le"){$_SESSION['ma_loi_kiem_tra']="ll_4";return "khong_hop_le";}
			
			$kiem=$this->kiem_tra_tu_trong_chuoi("lllll",$noi_dung);
			if($kiem=="khong_hop_le"){$_SESSION['ma_loi_kiem_tra']="ll_4";return "khong_hop_le";}
			
			$m=explode(" ",$noi_dung);
		
			$so=count($m);
			
			for($i=0;$i<$so;$i++)
			{
				$tu=trim($m[$i]);
				$do_dai_tu=strlen($tu);
				if($tu!="")
				{
					if($do_dai_tu>20)
					{
						$_SESSION['ma_loi_kiem_tra']="ll_5";
						return "khong_hop_le";
					}
				}
			}	
			
			
			return "hop_le";
		
		}
		function thay_the_noi_dung_tu_khoa_tim_kiem($noi_dung)
		{
			$bien_bao_mat="co";
			include("bao_mat/ky_tu_tim_kiem_khong_hop_le.php");
			$noi_dung=strip_tags($noi_dung);
			$noi_dung=str_replace("thanh_vien_lllll","",$noi_dung);
			
			$noi_dung=str_replace("'","",$noi_dung);
			$noi_dung=str_replace('"',"",$noi_dung);
			$noi_dung=str_replace("<","",$noi_dung);
			$noi_dung=str_replace(">","",$noi_dung);
			$noi_dung=str_replace('\\',"",$noi_dung);
			
			
			$so=count($mang_phan_tu_tu_khoa_khong_hop_le);
			
			for($i=0;$i<$so;$i++)
			{
				$ky_tu=trim($mang_phan_tu_tu_khoa_khong_hop_le[$i]);
				$noi_dung=str_replace($ky_tu,"",$noi_dung);
			}
			
			//$chuoi_ky_tu_khong_hop_le
			
			
			return $noi_dung;
		}
	}
?>