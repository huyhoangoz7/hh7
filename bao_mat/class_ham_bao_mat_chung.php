<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
class ham_bao_mat_chung 
{
	function kiem_tra_tung_ky_tu($ky_tu)
	{
		$hop_le="khong_hop_le";
		
		$bien_bao_mat="co";
		
		include("bao_mat/ky_tu_hop_le.php");
		
		//xuat_bm(count($mang_phan_tu_hop_le)."-"); 
		
		for($i=0;$i<count($mang_phan_tu_hop_le);$i++)
		{
			$phan_tu_hop_le=trim($mang_phan_tu_hop_le[$i]);
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
	
	function mang_tach_ky_tu_hop_le($noi_dung)
	{
		/*$noi_dung=trim($noi_dung);
		$do_dai_noi_dung=strlen($noi_dung);
		for($i=0;$i<$do_dai_noi_dung;$i++)
		{
			$c=substr($noi_dung,$i,1);
			$mang_tung_ky_tu[$i]=$c;
		}
		return $mang_tung_ky_tu;*/
		$noi_dung=trim($noi_dung);
		$bien_bao_mat="co";
		include("bao_mat/ky_tu_hop_le.php");
		
		//$chuoi_hop_le=str_replace(";","[---]",$chuoi_hop_le);
		
		//$mang_phan_tu_hop_le=explode(";",$chuoi_hop_le);
		
		//print_r($mang_phan_tu_hop_le);xuat_bm("<hr>");

		$so=count($mang_phan_tu_hop_le);
		
		for($i=0;$i<$so;$i++)
		{
			$ky_tu=trim($mang_phan_tu_hop_le[$i]);
			$noi_dung=str_replace($ky_tu,$ky_tu.";",$noi_dung);
		}
		
		$mang_tung_ky_tu=explode(";",$noi_dung);
		
		return $mang_tung_ky_tu;
	}
	
	function kiem_tra_tung_ky_so($so)
	{
		$hop_le="khong_hop_le";
		$chuoi_so_hop_le="0,1,2,3,4,5,6,7,8,9";
		$mang_so_hop_le=explode(",",$chuoi_so_hop_le);
		
		$so_2=count($mang_so_hop_le);
		
		for($i_2=0;$i_2<$so_2;$i_2++)
		{
			$so_hop_le=$mang_so_hop_le[$i_2];
			if($so==$so_hop_le)
			{
				$hop_le="hop_le";
				break;
			}
		}
		
		return $hop_le;
	}
	
	function kiem_tra_so_post_get($so)
	{

		$hop_le="hop_le";	
	
		$do_dai_so=strlen($so);
		
		for($i=0;$i<$do_dai_so;$i++)
		{
			$c=substr($so,$i,1);
			$mang_tung_ky_so[$i]=$c;
		}
		
		$so=count($mang_tung_ky_so);

		
		for($i=0;$i<$so;$i++)
		{
			$so_can_kiem_tra=$mang_tung_ky_so[$i];
			
			$kiem=$this->kiem_tra_tung_ky_so($so_can_kiem_tra);
			
			if($kiem=="khong_hop_le")
			{
				$hop_le="khong_hop_le";
				break;
			}

		}
		
		return $hop_le;
		
	}
	
	function kiem_tra_tu_trong_chuoi($tu,$chuoi)
	{
		$hop_le="hop_le";
		$m=explode($tu,$chuoi);
		
		$so=count($m);
		
		if($so!=1)
		{
			$hop_le="khong_hop_le";
		}
		
		return $hop_le;
		
	}
	
}
?>