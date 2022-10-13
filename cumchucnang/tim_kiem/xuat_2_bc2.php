<?php 
	chong_pha_hoai();
?>
<?php


include("cumchucnang/tim_kiem/ham.php");
function lay_chuoi_menu_con__uuu($id_cha,$c="")
{
	$tv="select * from menu where thuoc_menu='$id_cha'";
	$tv_1=mysql_query($tv);
	while($tv_2=mysql_fetch_array($tv_1))
	{
		$c=$c."_".$tv_2['id'];
		$a_tv="select count(*) from menu where thuoc_menu='$tv_2[id]'";
		$a_tv_1=mysql_query($a_tv);
		$a_tv_2=mysql_fetch_row($a_tv_1);
		if($a_tv_2[0]!=0)
		{
			$c=lay_chuoi_menu_con__uuu($tv_2['id'],$c);
		}
	}
	return $c;
}
function lay_chuoi_menu_con__ppp($id_cha)
{
	$c=lay_chuoi_menu_con__uuu($id_cha);
	if($c=="")
	{
		return $id_cha;
	}
	else 
	{
		return $id_cha.$c;
	}
}
function lay_mang_menu_con__ppp($id_cha)
{
	$c=lay_chuoi_menu_con__ppp($id_cha);
	$m=explode("_",$c);
	return $m;
}
//$m=lay_mang_menu_con__ppp("");
//print_r($m);echo "<hr>";
function tinh_gia_dau__yyy()
{
	$gia_dau=$_GET['gia_dau'];
	//echo $gia_dau."<hr>";
	//echo is_int($gia_dau);echo"<hr>";
	if($gia_dau=="Giá từ")
	{
		$gia_dau=0;
	}
	if($gia_dau<0)
	{
		$gia_dau=0;
	}
	return $gia_dau;
}
function tinh_gia_cuoi__yyy()
{
	$gia_cuoi=$_GET['gia_cuoi'];
	if($gia_cuoi=="đến")
	{
		$gia_cuoi=99999999999;
	}
	if($gia_cuoi<0)
	{
		$gia_cuoi=99999999999;
	}
	return $gia_cuoi;
}
//echo tinh_gia_dau__yyy();echo "<hr>";
function tinh_chuoi_union__ppp($chuoi_or)
{
	$gia_dau=tinh_gia_dau__yyy();
	$gia_cuoi=tinh_gia_cuoi__yyy();
	
	$m=lay_mang_menu_con__ppp($_GET['cap_do']);
	$tv="";
	for($i=0;$i<count($m);$i++)
	{
		$id=$m[$i];
		$r_tv="select count(*) from san_pham where thuoc_menu='$id' and ( $chuoi_or ) and gia_ban>=$gia_dau and gia_ban<=$gia_cuoi ";
		$r_tv_1=mysql_query($r_tv);
		$r_tv_2=mysql_fetch_row($r_tv_1);
		$so=$r_tv_2[0];
		if($id!="")
		{
			$tv=$tv." ( select * from san_pham where thuoc_menu='$id' and ( $chuoi_or ) and gia_ban>=$gia_dau and gia_ban<=$gia_cuoi order by id desc limit 0,$so ) union";
		}
	}
	$tv=substr($tv,0,-6);
	return $tv;
}
//$c=lay_chuoi_menu_con__uuu(" ");
//echo $c."<hr>";
?>
<?php
	function tinh_st___rrr($chuoi_or,$so_gioi_han)
	{
		$tv="select count(*) from san_pham where $chuoi_or ";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		$st=ceil($tv_2[0]/$so_gioi_han);
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
	
	
	
	$tu_khoa=trim($_GET['tu_khoa']);
	$mang_tk__abc=explode(" ",$tu_khoa);
	$j=0;
	
	for($i=0;$i<count($mang_tk__abc);$i++)
	{
		if(trim($mang_tk__abc[$i])!="")
		{
			$mang_tk__abc_2[$j]=$mang_tk__abc[$i];
			$j++;
		}
		
	}
	
	$so_tu_khoa=count($mang_tk__abc_2);
	
	if($so_tu_khoa==1)
	{
		$chuoi_tv=truy_van_1_tu($mang_tk__abc_2);
	}
	if($so_tu_khoa==2)
	{
		$chuoi_tv=truy_van_2_tu($mang_tk__abc_2);
	}
	if($so_tu_khoa==3)
	{
		$chuoi_tv=truy_van_3_tu($mang_tk__abc_2);
	}
	if($so_tu_khoa==4)
	{
		$chuoi_tv=truy_van_4_tu($mang_tk__abc_2);
	}
	if($so_tu_khoa==5)
	{
		$chuoi_tv=truy_van_5_tu($mang_tk__abc_2);
	}
	if($so_tu_khoa>=6)
	{
		$chuoi_tv=truy_van_6_tu($mang_tk__abc_2);
	}
	

	
	
	//echo $chuoi_tv;echo "<hr>";
	
	$chuoi_or="";
	for($f=0;$f<count($mang_tk__abc);$f++)
	{
		$q=$mang_tk__abc[$f];
		if($q!="")
		{
			$chuoi_or=$chuoi_or."ten like '%$q%' or ";
		}
	}
	$chuoi_or=substr($chuoi_or,0,-3);

	//$tv="select * from san_pham where $chuoi_or limit $vtbd,$so_gioi_han ";
	$so_du_lieu=mysql_num_rows(mysql_query($chuoi_tv));
	$st=ceil($so_du_lieu/$so_gioi_han);
	$tv=$chuoi_tv." limit $vtbd,$so_gioi_han ";
	$tv_1=mysql_query($tv);
	
	
	
	//echo $so_du_lieu."<hr>";
	echo "<center>";
		echo "<div class='tdg___ggg_bc2'>";
			echo "<a href='#'>";
				$tk_bm=trim($_GET['tu_khoa']);
				xuat_tu_khoa_bm($tk_bm);
			echo "</a>";
		echo "</div>";
		echo "<div class='ndg___ggg_bc2' id='fix_height_div__js' >";
			echo "<table border='0' style='font-size:14px'>";
			while($tv_2=mysql_fetch_array($tv_1))
				{
					
					for($i=1;$i<=$ssp_td;$i++)
					{
						if($i!=1){$tv_2=mysql_fetch_array($tv_1);}
						if($i==1){echo "<tr>";}
						
							$link_chi_tiet="?thamso=chi_tiet_san_pham&id=$tv_2[id]";
							echo "<td width='$chieu_rong_o' align='center'>";
								if($tv_2['ten']!="")
								{
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
								}
								else 
								{
									echo "&nbsp;";
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
