<?php 
	
	function xuat($gt)
	{
		if(!isset($gt)){$gt="";}
		echo $gt;
		echo "\n";
	}
	function hop_chon($c)
	{
		$c=trim($c);
		if($c=="")
		{
			echo "<select><option>Tùy chọn</option></select>";
			return "";
		}
		
		$style="";
		
		$m=explode(";",$c);
		
		$ten="";
		
		for($i=0;$i<count($m);$i++)
		{
			$m_2=explode(":",$m[$i]);
			$ky_hieu=trim($m_2[0]);
			$noi_dung=trim($m_2[1]);
			
			if($ky_hieu=="ten") 
			{
				$ten=$noi_dung;
			}
			
			if($ky_hieu=="cach_trai") 
			{
				$style=$style."margin-left: ".$noi_dung.";";
			}
			
		}
		
		$style=trim($style);
		
		if($style!=""){$style=" style='$style' ";}
		
		echo "<select name='$ten' $style >";
			for($i=0;$i<count($m);$i++)
			{
				$m_2=explode(":",$m[$i]);
				$ky_hieu=trim($m_2[0]);
				$noi_dung=trim($m_2[1]);
				
				if($ky_hieu=="lua_chon") 
				{
					$chon_truoc="";
					$mang_nd_2=explode("|",$noi_dung);
					$ten_lua_chon=trim($mang_nd_2[0]);
					if(isset($mang_nd_2[1]))
					{
						$gt_lua_chon=trim($mang_nd_2[1]);
					}
					else 
					{
						$gt_lua_chon="";
					}
					if($gt_lua_chon=="chon_truoc")
					{
						$gt_lua_chon="";
						$chon_truoc="selected";
					}
					if(isset($mang_nd_2[2]))
					{
						if(trim($mang_nd_2[2])!="")
						{
							$chon_truoc="selected";
						}
					}
					echo "<option value='$gt_lua_chon' $chon_truoc >";
						echo $ten_lua_chon;
					echo "</option>";
					$mang_nd_2[0]="";
					$mang_nd_2[1]="";
					$mang_nd_2[2]="";
				}
			}
		echo "</select>";
		echo "\n";
	}
	function khung($c)
	{
		$c=trim($c);
		if($c==""){echo "<input>";return "";}
		$m=explode(";",$c);
		$ten="";
		$gia_tri="";
		$style="";
		$kieu="";
		$kieu_2="";
		
		for($i=0;$i<count($m);$i++)
		{
			if(trim($m[$i])!="")
			{
				$m_2=explode(":",$m[$i]);
				$ky_hieu=trim($m_2[0]);
				$noi_dung=trim($m_2[1]);
				
				if($ky_hieu=="ten") 
				{
					$ten=$noi_dung;
				}
				if($ky_hieu=="gia_tri") 
				{
					$gia_tri=$noi_dung;
				}
				if($ky_hieu=="rong") 
				{
					$style=$style."width: ".$noi_dung.";";
				}
				if($ky_hieu=="cach_trai") 
				{
					$style=$style."margin-left: ".$noi_dung.";";
				}
				if($ky_hieu=="kieu") 
				{
					if($noi_dung=="an")
					{
						$kieu=" type='hidden' ";
						$kieu_2="an";
					}
					if($noi_dung=="tap_tin")
					{
						$kieu=" type='file' ";
						//$kieu_2="tap_tin";
					}
				}
			}
		}
		
		$style=trim($style);
		$gia_tri=trim($gia_tri);
		$ten=trim($ten);
		
		if($style!=""){$style=" style='$style' ";}
		if($gia_tri!=""){$gia_tri=" value='$gia_tri' ";}
		if($ten!=""){$ten=" name='$ten' ";}
		
		if($kieu_2=="")
		{
			echo "<input $kieu $ten $gia_tri $style  >";
		}
		if($kieu_2=="an")
		{
			echo "<input $kieu $ten $gia_tri  >";
		}
		
		echo "\n";
		
	}
	
	function vung($c)
	{
		$c=trim($c);
		
		if($c=="/"){echo "</div>";return "";}
		if($c=="ket_thuc"){echo "</div>";return "";}
		if($c=="kt"){echo "</div>";return "";}
		$m=explode(";",$c);
		
		$style="";
		
		for($i=0;$i<count($m);$i++)
		{
			if(trim($m[$i])!="")
			{
				$m_2=explode(":",$m[$i]);
				$ky_hieu=trim($m_2[0]);
				$noi_dung=trim($m_2[1]);
				
				
				
				if($ky_hieu=="rong") 
				{
					$style=$style."width: ".$noi_dung.";";
				}
				
				
				$kiem="sai";
				
				if($ky_hieu=="le"){$kiem="dung";}
				if($ky_hieu=="le_vung"){$kiem="dung";}
				if($ky_hieu=="le_cua_vung"){$kiem="dung";}
				
				if($kiem=="dung" ) 
				{
					$style=$style."padding: ".$noi_dung.";";
				}
				
				if($ky_hieu=="duong_vien") 
				{
					$mang_nd_2=explode("|",$noi_dung);
					$do_day=trim($mang_nd_2[0]);
					
					$mau_duong_vien="black";
					
					if(isset($mang_nd_2[1]))
					{
						$mau_duong_vien=trim($mang_nd_2[1]);
					}
					
					$style=$style."border: ".$do_day." solid ".$mau_duong_vien.";";
				}
				
			}
		}
		
		$style=trim($style);
		
		
		if($style!=""){$style=" style='$style' ";}
		
		xuat("<div $style >");

	}
	
	function hinh_anh($c)
	{
		$c=trim($c);
		if($c==""){return "";}
		$m=explode(";",$c);
		for($i=0;$i<count($m);$i++)
		{
			if(trim($m[$i])!="")
			{
				$m_2=explode(":",$m[$i]);
				$ky_hieu=trim($m_2[0]);
				$noi_dung=trim($m_2[1]);
				
				if($ky_hieu=="duong_dan" or $ky_hieu=="dd" ) 
				{
					$duong_dan=$noi_dung;
				}

			}
		}
		if(is_readable($duong_dan))
		{
			echo "<img src='$duong_dan' >";
		}
		//is_readable($duong_dan_hinh)
		echo "\n";
	}
	
	
	function xd(){echo "<br>";echo "\n";}
	function xuong_dong(){echo "<br>";echo "\n";}
	function xd_2($so){for($i=0;$i<$so;$i++){echo "<br>";echo "\n";}}
	function xuong_dong_2($so){for($i=0;$i<$so;$i++){echo "<br>";echo "\n";}}
	function chu_thuong($gt){return strtolower($gt);}
	
	function tai_file($ten,$duong_dan){move_uploaded_file($_FILES[$ten]['tmp_name'], $duong_dan);}
	function tai_tap_tin($ten,$duong_dan){move_uploaded_file($_FILES[$ten]['tmp_name'], $duong_dan);}
	
	function tai_hinh($ten,$duong_dan)
	{
		$ten_hinh=$_FILES[$ten]['name'];
		$m=explode(".",$ten_hinh);
		$duoi_hinh=trim($m[count($m)-1]);
		$duoi_hinh=chu_thuong($duoi_hinh);
		
		$chuoi_hinh_hop_le="jpg_jpeg_gif_png";
		$mang_hinh_hop_le=explode("_",$chuoi_hinh_hop_le);
		
		$hop_le="khong";
		
		for($i=0;$i<count($mang_hinh_hop_le);$i++)
		{
			if($duoi_hinh==$mang_hinh_hop_le[$i])
			{
				$hop_le="co";
				break;
			}
		}
		if($hop_le=="co")
		{
			move_uploaded_file($_FILES[$ten]['tmp_name'], $duong_dan);
			return "da_tai_hinh";
		}
		else 
		{
			return "chua_tai_hinh";
		}
		
	}
	
	function kiem_tra_ten_hinh($ten_hinh)
	{
		$hop_le="khong";
		$m=explode(".",$ten_hinh);
		$duoi_hinh=trim($m[count($m)-1]);
		$duoi_hinh=chu_thuong($duoi_hinh);
		
		$chuoi_hinh_hop_le="jpg_jpeg_gif_png";
		$mang_hinh_hop_le=explode("_",$chuoi_hinh_hop_le);
		
		$hop_le="khong";
		
		for($i=0;$i<count($mang_hinh_hop_le);$i++)
		{
			if($duoi_hinh==$mang_hinh_hop_le[$i])
			{
				$hop_le="co";
				break;
			}
		}
		
		if($hop_le=="co")
		{
			return "hop_le";
		}
		else 
		{
			return "khong_hop_le";
		}
	}
	
	
	
	function xoa_file($duong_dan){if(is_readable($duong_dan)){unlink($duong_dan);}}
	function xoa_tap_tin($duong_dan){if(is_readable($duong_dan)){unlink($duong_dan);}}
	
	function doc_file($duong_dan){return file_get_contents($duong_dan, FILE_USE_INCLUDE_PATH);}
	function doc_tap_tin($duong_dan){return file_get_contents($duong_dan, FILE_USE_INCLUDE_PATH);}
	
	function d($gt){echo "<b>".$gt."</b>";echo "\n";}
	function dam($gt){echo "<b>".$gt."</b>";echo "\n";}
	
?>