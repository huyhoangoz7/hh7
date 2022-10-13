<?php 
	chong_pha_hoai();
?>
<?php 
	
	$ssp_td=lay_thong_so('so_san_pham_tren_dong');
	$sd=4;
	$so_gioi_han=$ssp_td*$sd;
	
	$so_dong_splq=lay_thong_so('so_dong_splq');
	$so_splq=$so_dong_splq*$ssp_td;
	
	if($ssp_td==3)
	{
		$chieu_rong_o="256px";
		$chieu_rong_anh="160px";
		$style_tsp="style='margin-top:19px;margin-bottom:12px;' ";
	}
	if($ssp_td==4)
	{
		$chieu_rong_o="212px";
		$chieu_rong_anh="140px";
		$style_tsp="";
	}

	echo "<center>";
		echo "<div class='tdg___ggg_bc2'>";
			echo "<a href='#'>";
				echo "Sản phẩm cùng danh mục";
			echo "</a>";
		echo "</div>";
		echo "<div class='ndg___ggg_bc2' >";
			echo "<table border='0' style='font-size:14px' >";
				//$tv="select * from san_pham where thuoc_menu='$_GET[id]' order by id desc limit $vtbd,$so_gioi_han";
				//$tv=$chuoi_union." limit $vtbd,$so_gioi_han";
				$tv="select * from san_pham where loai='menu_ngang' and thuoc_menu='$thuoc_menu' and id<$id order by id desc limit 0,$so_splq ";
				$tv_1=mysql_query($tv);
				while($tv_2=mysql_fetch_array($tv_1))
				{
					
					for($i=1;$i<=$ssp_td;$i++)
					{
						if($i!=1){$tv_2=mysql_fetch_array($tv_1);}
						if($i==1){echo "<tr>";}
						if($tv_2['ten']!="")
						{
							$link_chi_tiet="?thamso=chi_tiet_san_pham&id=$tv_2[id]";
							echo "<td width='$chieu_rong_o' align='center'>";
								$link_hinh="hinhanh_flash/san_pham/".$tv_2['hinh_anh'];
								echo "<div class='khung_bao_ngoai___j89'>";
									echo "<div class='cao_3_px'></div>";
									echo "<a href='$link_chi_tiet'>";
										echo "<img border='0' src='$link_hinh' width='$chieu_rong_anh' >";
									echo "</a>";
									echo "<br>";
									echo "<a href='$link_chi_tiet' class='ten_san_pham' $style_tsp >";
										echo $tv_2['ten'];
									echo "</a>";
									echo "<br>";
									$dinh_dang_gia=number_format($tv_2['gia_ban'],0,".",".");
									$dinh_dang_gia=$dinh_dang_gia." VNĐ";
									
									if($tv_2['loai_gia']=="lien_he"){$dinh_dang_gia="Giá : Liên hệ";}
									if($tv_2['loai_gia']=="van_ban"){$dinh_dang_gia=$tv_2['gb_vb'];}
									
									echo "<span class='gia_ban'>";
										echo $dinh_dang_gia;
									echo "</span>";
									//echo $tv_2['gia_ban'];
									echo "<br>";

									echo "<div class='cao_3_px'></div>";
									echo "<div class='cao_3_px'></div>";
								echo "</div>";
							echo "</td>";
						}
						if($i==$ssp_td){echo "</tr>";}
					}
						
					
				}
			echo "</table>";
		echo "</div>";
	echo "</center>";
?>
