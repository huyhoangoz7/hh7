<?php 
	chong_pha_hoai();
?>
<?php 
	
	$id=$_GET['id'];
	$tv="select * from menu_ngang where id='$id'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$ten=$tv_2['ten'];
	
	$ssp_td=1;
	$sd=12;
	$so_gioi_han=$ssp_td*$sd;
	if($_GET['trang']=="")
	{
		$vtbd=0;
	}
	else 
	{
		$vtbd=($_GET['trang']-1)*$so_gioi_han;
	}
	
	
	function lay_chuoi_menu_cap_duoi__uuu2($id_cha,$c="")
	{
		$tv="select * from menu_ngang where thuoc_menu='$id_cha'";
		$tv_1=mysql_query($tv);
		while($tv_2=mysql_fetch_array($tv_1))
		{
			$c=$c."_".$tv_2['id'];
			$a_tv="select count(*) from menu_ngang where thuoc_menu='$tv_2[id]'";
			$a_tv_1=mysql_query($a_tv);
			$a_tv_2=mysql_fetch_row($a_tv_1);
			if($a_tv_2[0]!=0)
			{
				$c=lay_chuoi_menu_cap_duoi__uuu2($tv_2['id'],$c);
			}
		}
		return $c;
	}
	function lay_chuoi_menu_cap_duoi__ppp2($id_cha)
	{
		$c=lay_chuoi_menu_cap_duoi__uuu2($id_cha);
		if($c=="")
		{
			return $id_cha;
		}
		else 
		{
			return $id_cha.$c;
		}
	}
	function lay_mang_menu_cap_duoi__ppp2($id_cha)
	{
		$c=lay_chuoi_menu_cap_duoi__ppp2($id_cha);
		$m=explode("_",$c);
		return $m;
	}
	//$m=lay_mang_menu_cap_duoi__ppp(1);
	//print_r($m);echo "<hr>";
	function tinh_chuoi_union__ppp2()
	{
		$m=lay_mang_menu_cap_duoi__ppp2($_GET['id']);
		$tv="";
		for($i=0;$i<count($m);$i++)
		{
			$id=$m[$i];
			$r_tv="select count(*) from tin_tuc where thuoc_menu='$id'";
			$r_tv_1=mysql_query($r_tv);
			$r_tv_2=mysql_fetch_row($r_tv_1);
			$so=$r_tv_2[0];
			$tv=$tv." ( select * from tin_tuc where thuoc_menu='$id' order by sap_xep desc limit 0,$so ) union";
		}
		$tv=substr($tv,0,-6);
		return $tv;
	}
	
	function tinh_so_trang__ppp($so_gioi_han)
	{
		$m=lay_mang_menu_cap_duoi__ppp2($_GET['id']);
		$so=0;
		for($i=0;$i<count($m);$i++)
		{
			$id=$m[$i];
			$r_tv="select count(*) from tin_tuc where thuoc_menu='$id'";
			$r_tv_1=mysql_query($r_tv);
			$r_tv_2=mysql_fetch_row($r_tv_1);
			$so=$so+$r_tv_2[0];
		}
		$st=ceil($so/$so_gioi_han);
		return $st;
	}


	$chuoi_union=tinh_chuoi_union__ppp2();
	$tv=$chuoi_union." limit $vtbd,$so_gioi_han";
	//echo $chuoi_union."<hr>";
	
	$st=tinh_so_trang__ppp($so_gioi_han);
	//echo $st."<hr>";
	echo "<center>";
		echo "<div class='tdg___ggg_bc2'>";
			echo "<a href='#'>";
				echo $ten;
			echo "</a>";
		echo "</div>";
		echo "<div class='ndg___ggg_bc2'>";
			echo "<center>";
				echo "<table border='0' width='768px'>";
					
					//$tv="select * from tin_tuc order by id desc limit $vtbd,$so_gioi_han";
					$tv_1=mysql_query($tv);
					while($tv_2=mysql_fetch_array($tv_1))
					{
						
						for($i=1;$i<=$ssp_td;$i++)
						{
							if($i!=1){$tv_2=mysql_fetch_array($tv_1);}
							if($i==1){echo "<tr>";}
							$do_dai__zzz=dem_do_dai_chuoi_tieng_viet(thay_the_fckeditor($tv_2['noi_dung']));
							//echo $do_dai__zzz;echo "<hr>";
							$chuoi_ndn="";
							if($do_dai__zzz>=230)
							{
								$noi_dung_ngan=cat_chuoi_789(thay_the_fckeditor($tv_2['noi_dung']),0,230);
								$mang_m=explode(" ",$noi_dung_ngan);	
								//print_r($mang_m);			echo "<hr>";
								//echo count($mang_m)-4;echo "<hr>";
								for($y=0;$y<count($mang_m)-2;$y++)
								{
									
									$chuoi_ndn=$chuoi_ndn.$mang_m[$y]." ";
								}
							}
							else 
							{
								$noi_dung_ngan=cat_chuoi_789(thay_the_fckeditor($tv_2['noi_dung']),0,230);	
								$chuoi_ndn=$noi_dung_ngan;
							}
							
							if($tv_2['ten']!="")
							{
								$link_chi_tiet="?thamso=chi_tiet_tin_tuc&id=$tv_2[id]";
								echo "<td width='100%' align='center'>";
									echo "<div class='cao_3_px' ></div> ";
									echo "<table border='0' >";
										echo "<tr>";
											echo "<td align='center' width='140px'>";
												$link_hinh="hinhanh_flash/tin_tuc/".$tv_2['hinh_anh'];
												echo "<a href='$link_chi_tiet'>";
													echo "<img border='0' src='$link_hinh' width='130px' style='margin:4px'>";
												echo "</a>";
											echo "</td>";
											echo "<td width='628px' valign='top' align='left'>";												
												echo "<a href='$link_chi_tiet' class='link_15' >";
													echo $tv_2['ten'];
												echo "</a>";
												echo "<div style='margin-top:3px' >";
													echo $chuoi_ndn;
												echo "</div>";
											echo "</td>";
										echo "</tr>";
									echo "</table>";
									echo "<div class='cao_3_px' ></div> ";
									
								echo "</td>";
							}
							if($i==$ssp_td){echo "</tr>";}
						}
							
						
					}
					echo "<tr>";
						echo "<td colspan='3' align='center'>";
							/*for($i=1;$i<=$st;$i++)
							{
								$link="?thamso=tin_tuc&trang=$i";
								echo "<a href='$link'>";
									echo $i;
								echo "</a>";echo " ";
							}*/
							xuat_link($st);
						echo "</td>";
					echo "</tr>";
				echo "</table>";
			echo "</center>";
		echo "</div>";
	echo "</center>";
?>