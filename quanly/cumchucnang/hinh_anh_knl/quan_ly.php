<?php 
	chong_pha_hoai();
?>
<br>
- Khi xóa sản phẩm hoặc bài viết thì hình ảnh đã tải lên từ khung nhập liệu vẫn chưa bị xóa
<br>
- Nếu muốn xóa hình đã tải lên từ khung nhập liệu thì có thể vào đây tìm hình để xóa
<br><br>
<style>
	a.thua__link_1:link { font-size: 14px; text-decoration: none;  color: #0b55c4; }
	a.thua__link_1:visited { font-size: 14px; color: #0b55c4; text-decoration: none; }
	a.thua__link_1:hover { font-size: 14px; text-decoration: none; color: #084095;  font-style: normal; }
</style>
<script type="text/javascript">
	function chuyen_link_vvv(id)
	{
		if(id!="---")
		{
			window.location="?thamso=quan_ly_tin_tuc&id="+id;
		}
	}
</script>
<?php 
	
	function tinh_chuoi_or()
	{
		$chuoi_or="";
		if($_GET['tu_khoa']=="Từ khóa tìm kiếm")
		{
			$tu_khoa_ccc="";
		}
		else 
		{
			$tu_khoa_ccc=$_GET['tu_khoa'];
		}
		$mang_tk__abc=explode(" ",$tu_khoa_ccc);
		for($f=0;$f<count($mang_tk__abc);$f++)
		{
			$q=$mang_tk__abc[$f];
			if($q!="")
			{
				$chuoi_or=$chuoi_or."ten like '%$q%' or ";
			}
		}
		if($chuoi_or!="")
		{
			$chuoi_or=substr($chuoi_or,0,-3);
			$chuoi_or=" and ( ".$chuoi_or." ) ";
		}
		return $chuoi_or;
	}
	//echo $chuoi_or."<hr>";
?>
<?php 
	
	function tinh_st___rrr($so_gioi_han)
	{

			$tv="select count(*) from hinh_anh_knl";

		//$tv="select count(*) from tin_tuc";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);		
		$st=ceil($tv_2[0]/$so_gioi_han);
		return $st;
	}
	
?>
<?php 
	function xac_dinh_menu_cap_duoi__123($id_cha)
	{
		$tv="select count(*) from menu_ngang where thuoc_menu='$id_cha'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_row($tv_1);
		if($tv_2[0]==0)
		{
			return "khong";
		}
		else 
		{
			return "co";
		}
	}
	function de_quy_menu__fff($id_cha,$kt="")
	{
		$kt=$kt."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		$tv="select * from menu_ngang where thuoc_menu='$id_cha'";
		$tv_1=mysql_query($tv);
		while($tv_2=mysql_fetch_array($tv_1))
		{
			if($_GET['id']==$tv_2['id'])
			{
				$select="selected";
			}
			else 
			{
				$select="";
			}
			$gttc=$tv_2['id'];
			$ten=$tv_2['ten'];
			if($tv_2['loai']!="tin_tuc"){$ten="---";$gttc="---";}
			echo "<option value='$gttc' $select >";
				echo $kt;	
				echo $ten;												
			echo "</option>";
			$xac_dinh_menu_cap_duoi__123=xac_dinh_menu_cap_duoi__123($tv_2['id']);
			if($xac_dinh_menu_cap_duoi__123=="co")
			{
				de_quy_menu__fff($tv_2['id'],$kt);
			}
		}	
	}
?>
<?php 
	function xac_dinh_menu_cap_duoi__uuu($id_cha,$c="")
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
				$c=xac_dinh_menu_cap_duoi__uuu($tv_2['id'],$c);
			}
		}
		return $c;
	}
	function xac_dinh_menu_cap_duoi__ppp($id_cha)
	{
		$c=xac_dinh_menu_cap_duoi__uuu($id_cha);
		if($c=="")
		{
			return $id_cha;
		}
		else 
		{
			return $id_cha.$c;
		}
	}
	//echo xac_dinh_menu_cap_duoi__ppp($_GET['cap_do']);
	//echo "<hr>";
	function lay_mang_menu_cap_duoi__ppp($id_cha)
	{
		$c=xac_dinh_menu_cap_duoi__ppp($id_cha);
		$m=explode("_",$c);
		return $m;
	}
	function tinh_chuoi_union__ppp()
	{
		$chuoi_or=tinh_chuoi_or();
		$m=lay_mang_menu_cap_duoi__ppp($_GET['cap_do']);
		$tv="";
		for($i=0;$i<count($m);$i++)
		{
			$id=$m[$i];
			$r_tv="select count(*) from san_pham where thuoc_menu='$id' $chuoi_or ";
			$r_tv_1=mysql_query($r_tv);
			$r_tv_2=mysql_fetch_row($r_tv_1);
			$so=$r_tv_2[0];
			if($id!="")
			{
				$tv=$tv." ( select * from san_pham where thuoc_menu='$id' $chuoi_or order by id desc limit 0,$so ) union";
			}
		}
		$tv=substr($tv,0,-6);
		return $tv;
	}

	
?>
<?php 
	$ssp_td=1;
	$sd=10;
	$so_gioi_han=$ssp_td*$sd;
	if($_GET['trang']=="")
	{
		$vtbd=0;
	}
	else 
	{
		$vtbd=($_GET['trang']-1)*$so_gioi_han;
	}
	$chuoi_union__ppp=tinh_chuoi_union__ppp();
	//echo $chuoi_union__ppp;echo "<hr>";
	$st=tinh_st___rrr($so_gioi_han);
	//$tv=$chuoi_union__ppp." limit $vtbd,$so_gioi_han ";

	$tv="select * from hinh_anh_knl order by id desc limit $vtbd,$so_gioi_han ";
	
	
	$tv_1=mysql_query($tv);
	
?>


	<table  border="1" style="clear:left;margin:6px" id="er">
		<tr>
			<td width="300px" align="center"><b>Hình ảnh</b></td>

			<td width="100px" align="center"><b>Xóa</b></td>
		</tr>
		<?php 
			while($tv_2=mysql_fetch_array($tv_1))
			{
				$noi_dung_ngan=cat_chuoi_789(thay_the_fckeditor($tv_2['noi_dung']),0,150);
				$do_dai__zzz=dem_do_dai_chuoi_tieng_viet(thay_the_fckeditor($tv_2['noi_dung']));
				//echo $do_dai__zzz;echo "<hr>";
				$chuoi_ndn="";
				if($do_dai__zzz>=150)
				{
					$noi_dung_ngan=cat_chuoi_789(thay_the_fckeditor($tv_2['noi_dung']),0,150);
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
					$noi_dung_ngan=cat_chuoi_789(thay_the_fckeditor($tv_2['noi_dung']),0,150);	
					$chuoi_ndn=$noi_dung_ngan;
				}
				$lien_ket_hinh="/du_lieu_kst_lll/hinh_anh/".$tv_2['ten'];
				//print_r($_SERVER);
				$duong_dan_hinh=$_SERVER['DOCUMENT_ROOT'].$lien_ket_hinh;

				$link_xoa="?thamso=xoa_ha_knl&id=".$tv_2['id'];
				?>
					<tr>
						<td align="center">
							<?php 
								if(is_readable($duong_dan_hinh))
								{
							?>
							<a href="#">
								<img src="<?php echo $lien_ket_hinh; ?>" style="max-width:150px" border="0"/>
							</a>
							<?php 
								}
								else 
								{
									echo "Hình ảnh không tồn tại";
								}
							?>
						</td>
						<td align="center">
							<a href="<?php echo $link_xoa; ?>" class="sua_xoa" >
								Xóa
							</a>
						</td>
					</tr>
				<?php
			}
		?>
		<tr>
			<td colspan="5" align="center">
				<?php 
					//echo $_GET['tu_khoa'];
					/*for($i=1;$i<=$st;$i++)
					{
						$link="?thamso=quan_ly_tin_tuc&trang=$i";
						echo "<a href='$link'>";
							echo $i;
						echo "</a>";echo " ";
					}*/
					xuat_link($st);
				?>
			</td>
		</tr>
	</table>

<script>
	table_css_2("er");
</script>