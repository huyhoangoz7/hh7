<?php 
	chong_pha_hoai();
	//echo "trang quan ly san pham <hr>";
?>
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
		if(!isset($_GET['id']))
		{
			$tv="select count(*) from tin_tuc ";
		}
		else 
		{
			$id=$_GET['id'];
			$tv="select count(*) from tin_tuc where thuoc_menu='$id' ";
		}	
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
	if(!isset($_GET['id']))
	{
		$tv="select * from tin_tuc order by sap_xep desc limit $vtbd,$so_gioi_han ";
	}
	else 
	{
		if(trim($_GET['id']!=""))
		{		
			$id=$_GET['id'];
			$tv="select * from tin_tuc where thuoc_menu='$id' order by sap_xep desc limit $vtbd,$so_gioi_han ";
		}
		else 
		{
			$tv="select * from tin_tuc order by sap_xep desc limit $vtbd,$so_gioi_han ";
		}
	}
	$tv_1=mysql_query($tv);
?>
<center>
<br>
<table width="980px" style="clear:left;" >
		<tr>
			<td width="440px">
					<b>Chọn : </b>
					<?php 
						echo "<select name='cap_do' onchange='chuyen_link_vvv(this.value)'>";
							$q_tv="select * from menu_ngang where thuoc_menu=''";
							$q_tv_1=mysql_query($q_tv);
							echo "<option value=''>";	
								echo "Tất cả";
							echo "</option>";
							while($q_tv_2=mysql_fetch_array($q_tv_1))
							{
								if($_GET['id']==$q_tv_2['id'])
								{
									$select="selected";
								}
								else 
								{
									$select="";
								}
								$gttc=$q_tv_2['id'];
								$ten=$q_tv_2['ten'];
								if($q_tv_2['loai']!="tin_tuc"){$ten="---";$gttc="---";}
								echo "<option value='$gttc' $select >";
									echo $ten;						
								echo "</option>";
								$xac_dinh_menu_cap_duoi__123=xac_dinh_menu_cap_duoi__123($q_tv_2['id']);
								if($xac_dinh_menu_cap_duoi__123=="co")
								{
									de_quy_menu__fff($q_tv_2['id']);
								}
							}
						echo "</select>";
					?>

			</td>
			<td width="440px" align="right">
				&nbsp;
			</td>
		</tr>
	</table>
	<br>
	<form method="post" action="" >
	<input type="hidden" name="cn_sx_tt" value="cn_sx_tt" >
	<table width="980px" border="1" style="clear:left;margin:6px" id="er">
		<tr>
			<td width="100px" align="center"><b>Hình ảnh</b></td>
			<td width="300px" align="left" ><b>Tiêu đề</b></td>
			<td width="280px" align="left" ><b>Nội dung</b></td>
			<td width="100px" align="center"><b>Sắp xếp</b></td>
			<td width="100px" align="center"><b>Sửa</b></td>
			<td width="100px" align="center"><b>Xóa</b></td>
		</tr>
		<?php 
			$l=1;
			while($tv_2=mysql_fetch_array($tv_1))
			{
				$sap_xep=$tv_2['sap_xep'];
				$ten_1="sx_".$l;
				$ten_2="id_".$l;
				$id=$tv_2['id'];
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
				$link_hinh="../hinhanh_flash/tin_tuc/".$tv_2['hinh_anh'];
				$link_sua="?thamso=sua_tin_tuc&id=".$tv_2['id']."&trang=$_GET[trang]";
				$link_xoa="?thamso=xoa_tin_tuc&id=".$tv_2['id'];
				?>
					<tr>
						<td align="center">
							<a href="<?php echo $link_sua; ?>">
								<img src="<?php echo $link_hinh; ?>" width="90px" border="0"/>
							</a>
						</td>
						<td  align="left" ><a href="<?php echo $link_sua; ?>" class="thua__link_1"><?php echo $tv_2['ten']; ?></a></td>
						<td align="left" ><?php echo $chuoi_ndn; ?></td>
						<td align="center" >
							<input type="hidden" name="<?php echo $ten_2; ?>" value="<?php echo $id; ?>" >
							<input style="width:50px" name="<?php echo $ten_1; ?>" value="<?php echo $sap_xep; ?>" >
						</td>
						<td align="center">
							<a href="<?php echo $link_sua; ?>" class="sua_xoa" >
								Sửa
							</a>
						</td>
						<td align="center">
							<a href="<?php echo $link_xoa; ?>" class="sua_xoa" >
								Xóa
							</a>
						</td>
					</tr>
				<?php
				$l++;
			}
		?>
		<tr>
			<td >&nbsp;</td>
			<td>&nbsp;</td>
			<td >&nbsp;</td>
			<td align="center" ><input type="submit" value="Sắp xếp" style="margin:5px" > </td>
			
			<td >&nbsp;</td>
			<td >&nbsp;</td>
		</tr>
		<tr>
			<td colspan="6" align="center">
				<?php 

					xuat_link($st);
				?>
			</td>
		</tr>
	</table>
	</form>
</center>
<script>
	table_css_2("er");
</script>