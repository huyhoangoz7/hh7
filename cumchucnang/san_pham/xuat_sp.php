<?php 
	chong_pha_hoai();
?>
<?php 
	function tieu_de_menu__jjj()
	{
		$tv="select * from menu_ngang where id='$_GET[id]'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		return $tv_2['ten'];
	}
	$tieu_de_menu__jjj=tieu_de_menu__jjj();
	function lay_chuoi__menu_cap_duoi_uuu($id_cha,$c="")
	{
		$tv="select * from menu_ngang where thuoc_menu='$id_cha' ";
		$tv_1=mysql_query($tv);
		while($tv_2=mysql_fetch_array($tv_1))
		{
			$c=$c."_".$tv_2['id'];
			$a_tv="select count(*) from menu_ngang where thuoc_menu='$tv_2[id]'";
			$a_tv_1=mysql_query($a_tv);
			$a_tv_2=mysql_fetch_row($a_tv_1);
			if($a_tv_2[0]!=0)
			{
				$c=lay_chuoi__menu_cap_duoi_uuu($tv_2['id'],$c);
			}
		}
		return $c;
	}
	function lay_chuoi__menu_cap_duoi_ppp($id_cha)
	{
		$c=lay_chuoi__menu_cap_duoi_uuu($id_cha);
		if($c=="")
		{
			return $id_cha;
		}
		else 
		{
			return $id_cha.$c;
		}
	}
	function lay_mang__menu_cap_duoi_ppp($id_cha)
	{
		$c=lay_chuoi__menu_cap_duoi_ppp($id_cha);
		$m=explode("_",$c);
		return $m;
	}
	//$m=lay_mang__menu_cap_duoi_ppp(1);
	//print_r($m);echo "<hr>";
	function tinh_chuoi_union__ppp()
	{
		$m=lay_mang__menu_cap_duoi_ppp($_GET['id']);
		$tv="";
		for($i=0;$i<count($m);$i++)
		{
			$id=$m[$i];
			//$r_tv="select count(*) from san_pham where thuoc_menu='$id' and loai='menu_ngang' ";
			$r_tv="select count(*) from san_pham where thuoc_menu='$id' ";
			$r_tv_1=mysql_query($r_tv);
			$r_tv_2=mysql_fetch_row($r_tv_1);
			$so=$r_tv_2[0];
			//$tv=$tv." ( select * from san_pham where thuoc_menu='$id' and loai='menu_ngang' order by sap_xep desc limit 0,$so ) union";
			$tv=$tv." ( select * from san_pham where thuoc_menu='$id' order by sap_xep desc limit 0,$so ) union";
		}
		$tv=substr($tv,0,-6);
		return $tv;
	}
	$chuoi_union=tinh_chuoi_union__ppp();
	//echo $chuoi_union."<hr>";
	function tinh_so_trang__ppp($so_gioi_han)
	{
		$m=lay_mang__menu_cap_duoi_ppp($_GET['id']);
		$so=0;
		for($i=0;$i<count($m);$i++)
		{
			$id=$m[$i];
			$r_tv="select count(*) from san_pham where thuoc_menu='$id' and loai='menu_ngang' ";
			$r_tv_1=mysql_query($r_tv);
			$r_tv_2=mysql_fetch_row($r_tv_1);
			$so=$so+$r_tv_2[0];
		}
		$st=ceil($so/$so_gioi_han);
		return $st;
	}
	$ssp_td=lay_thong_so('so_san_pham_tren_dong');
	$sd=7;
	$so_gioi_han=$ssp_td*$sd;
	if($_GET['trang']=="")
	{
		$vtbd=0;
	}
	else 
	{
		$vtbd=($_GET['trang']-1)*$so_gioi_han;
	}
	$st=tinh_so_trang__ppp($so_gioi_han);
	
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
	
	
	$thuoc_tinh_colspan=$ssp_td;
	
	//$so=768/3;echo$so."<hr>";
	
	//echo $st."<hr>";
	echo "<center>";
		echo "<div class='tdg___ggg_bc2'>";
			echo "<a href='#'>";
				echo $tieu_de_menu__jjj;
			echo "</a>";
		echo "</div>";
		echo "<div class='ndg___ggg_bc2' id='fix_height_div__js' >";
			echo "<table border='0' style='font-size:14px' >";
				//$tv="select * from san_pham where thuoc_menu='$_GET[id]' order by id desc limit $vtbd,$so_gioi_han";
				$tv=$chuoi_union." limit $vtbd,$so_gioi_han";
				//echo $tv."<hr>";
				$tv_1=mysql_query($tv);
				while($tv_2=mysql_fetch_array($tv_1))
				{
					
					for($i=1;$i<=$ssp_td;$i++)
					{
						if($i!=1){$tv_2=mysql_fetch_array($tv_1);}
						if($i==1){echo "<tr>";}
						
							$link_chi_tiet="?thamso=chi_tiet_san_pham&id=$tv_2[id]";
							echo "<td width='".$chieu_rong_o."' align='center'>";
							if($tv_2['ten']!="")
							{
								$link_hinh="hinhanh_flash/san_pham/".$tv_2['hinh_anh'];
								echo "<div class='khung_bao_ngoai___j89'>";
									echo "<div class='cao_3_px'></div>";
									echo "<a href='$link_chi_tiet'>";
										echo "<img border='0' src='$link_hinh' width='".$chieu_rong_anh."' >";
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
									
									echo "<br>";
									
									echo "<div class='cao_3_px'></div>";
									echo "<div class='cao_3_px'></div>";
								echo "</div>";
							}
							echo "</td>";
						
						if($i==$ssp_td){echo "</tr>";}
					}
						
					
				}
				echo "<tr>";
					echo "<td colspan='$thuoc_tinh_colspan' align='center'>";
						xuat_link($st);
					echo "</td>";
				echo "</tr>";
			echo "</table>";
		echo "</div>";
	echo "</center>";
?>

