<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
class binh_luan extends ham_bao_mat_chung
{
	function kiem_tra_binh_luan($noi_dung)
	{
		//xuat_bm($noi_dung);xuat_bm("<hr>");
		//xuat_bm("1");xuat_bm("<hr>");
		
		$noi_dung=trim($noi_dung);			
		
		$do_dai_noi_dung=strlen($noi_dung);
		
		
		
		$noi_dung_br=nl2br($noi_dung);
		//echo $noi_dung_br."<hr>";
		$noi_dung_br=strtolower($noi_dung_br);
		$noi_dung_br=str_replace("<br>","<br />",$noi_dung_br);
		$noi_dung_br=str_replace("<br/>","<br />",$noi_dung_br);
		
		//echo $noi_dung_br."<hr>";
		
		$m_br=explode("<br />",$noi_dung_br);
		
		$so=count($m_br);
		
		$so=$so-1;
		
		//echo $so."<hr>";
		
		if($so>20)
		{
			$_SESSION['ma_loi_kiem_tra']="ll_6";
			return "khong_hop_le";
		}
		
		
		
		//$noi_dung=str_replace("\n",",,!?xuongdongl?!,,",$noi_dung);
		$noi_dung=str_replace("\n","",$noi_dung);
		$noi_dung=str_replace("\r","",$noi_dung);
		$noi_dung=str_replace("\t","",$noi_dung);
		
		//xuat_bm($noi_dung);xuat_bm("<hr>");
		
		if($do_dai_noi_dung>1200)
		{
			$_SESSION['ma_loi_kiem_tra']="ll_1";
			return "khong_hop_le";
			
		}
		if($do_dai_noi_dung<26)
		{
			$_SESSION['ma_loi_kiem_tra']="ll_2";
			return "khong_hop_le";
			
		}
		
		//xuat_bm("3");xuat_bm("<hr>");
		
		//$noi_dung=str_replace();
		
		$mang_tung_ky_tu=$this->mang_tach_ky_tu_hop_le($noi_dung);	
		
		$so=count($mang_tung_ky_tu);
		
		for($i=0;$i<$so;$i++)
		{
			
			$ky_tu=trim($mang_tung_ky_tu[$i]);
			
			if($ky_tu!=" " or $ky_tu!="")
			{
				
				$kiem=$this->kiem_tra_tung_ky_tu($ky_tu);
				
				if($kiem=="khong_hop_le")
				{
					$_SESSION['ma_loi_kiem_tra']="ll_3";
					//xuat_bm($ky_tu);xuat_bm("<hr>");
					return "khong_hop_le";
				}
				
			}
			
		}
		
		//xuat_bm("4");xuat_bm("<hr>");
		
		$kiem=$this->kiem_tra_tu_trong_chuoi("thanh_vien_lllll",$noi_dung);
		if($kiem=="khong_hop_le"){$_SESSION['ma_loi_kiem_tra']="ll_4";return "khong_hop_le";}
		$kiem=$this->kiem_tra_tu_trong_chuoi(";",$noi_dung);
		if($kiem=="khong_hop_le"){$_SESSION['ma_loi_kiem_tra']="ll_4";return "khong_hop_le";}
		
		//xuat_bm("2");xuat_bm("<hr>");
		
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
	
	function thay_the_noi_dung_binh_luan($noi_dung)
	{
		$bien_bao_mat="co";
		include("bao_mat/ky_tu_binh_luan_khong_hop_le.php");
		$noi_dung=strip_tags($noi_dung);
		$noi_dung=str_replace("thanh_vien_lllll","",$noi_dung);
		
		$noi_dung=str_replace("'","",$noi_dung);
		$noi_dung=str_replace('"',"",$noi_dung);
		$noi_dung=str_replace("<","",$noi_dung);
		$noi_dung=str_replace(">","",$noi_dung);
		
		$so=count($mang_phan_tu_khong_hop_le);
		
		for($i=0;$i<$so;$i++)
		{
			$ky_tu=trim($mang_phan_tu_khong_hop_le[$i]);
			$noi_dung=str_replace($ky_tu,"",$noi_dung);
		}
		
		//$chuoi_ky_tu_khong_hop_le
		
		
		return $noi_dung;
	}
	
}
?>