<?php 
	chong_pha_hoai();
	//echo "trang quan ly menu ngang";
?>
<style>
	a.a_vvv { font-size: 16px; text-decoration: none;  color: #0b55c4;line-height:35px }
	a.a_vvv:hover {text-decoration: none; color: #084095;  font-style: normal; }
</style>
<?php 
	function echo_khoang_trang($thuoc_menu)
	{
		$tv="select count(*) from menu_ngang where id='$thuoc_menu'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_row($tv_1);
		if($tv_2[0]!=0)
		{
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			$r_tv="select * from menu_ngang where id='$thuoc_menu'";
			$r_tv_1=mysql_query($r_tv);
			$r_tv_2=mysql_fetch_array($r_tv_1);
			echo_khoang_trang($r_tv_2['thuoc_menu']);
		}
		else 
		{
		}
	}
	function lay_chuoi_menu_cap_duoi__uuu($id_cha,$c="")
	{
		$tv="select * from menu_ngang where thuoc_menu='$id_cha' order by sap_xep ";
		$tv_1=mysql_query($tv);
		while($tv_2=mysql_fetch_array($tv_1))
		{
			$c=$c."_".$tv_2['id'];
			$a_tv="select count(*) from menu_ngang where thuoc_menu='$tv_2[id]'";
			$a_tv_1=mysql_query($a_tv);
			$a_tv_2=mysql_fetch_row($a_tv_1);
			if($a_tv_2[0]!=0)
			{
				$c=lay_chuoi_menu_cap_duoi__uuu($tv_2['id'],$c);
			}
		}
		return $c;
	}
	function lay_chuoi_menu_cap_duoi__ppp($id_cha)
	{
		$c=lay_chuoi_menu_cap_duoi__uuu($id_cha);
		if($c=="")
		{
			return $id_cha;
		}
		else 
		{
			return $id_cha.$c;
		}
	}
	function lay_mang_menu_cap_duoi__ppp($id_cha)
	{
		$c=lay_chuoi_menu_cap_duoi__ppp($id_cha);
		$m=explode("_",$c);
		return $m;
	}
	$m_abc=lay_mang_menu_cap_duoi__ppp("");
	//print_r($m_abc);echo "<hr>";
	$c="";
	for($z=1;$z<count($m_abc);$z++)
	{
		$id_z=$m_abc[$z];
		$c=$c." ( select * from menu_ngang where id='$id_z' ) union ";
	}
	$c=substr($c,0,-6);
?>
<?php 
	function tinh_st___rrr($so_gioi_han)
	{
		$tv="select count(*) from menu_ngang ";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);		
		$st=ceil($tv_2[0]/$so_gioi_han);
		return $st;
	}
	
?>
<?php 
	$ssp_td=1;
	$sd=20;
	$so_gioi_han=$ssp_td*$sd;
	if($_GET['trang']=="")
	{
		$vtbd=0;
	}
	else 
	{
		$vtbd=($_GET['trang']-1)*$so_gioi_han;
	}
	$st=tinh_st___rrr($so_gioi_han);
?>
<?php 
	//$tv="select * from menu_ngang order by id limit $vtbd,$so_gioi_han ";
	$tv=$c." limit $vtbd,$so_gioi_han ";
	$tv_1=mysql_query($tv);
?>
<center>
	<form method="post" >
	<input type="hidden" name="cn_sx_menu" value="cn_sx_menu" >
	<table width="990px" style="clear:left;margin-top:6px" id="er" >
		<tr>
			<td width="690px" align="left" ><b>Tên menu</b></td>
			<td width="100px" align="center" ><b>Sắp xếp</b></td>
			<td width="100px" align="center" ><b>Sửa</b></td>
			<td width="100px" align="center" ><b>Xóa</b></td>
		</tr>
		<?php 
			$l=1;
			while($tv_2=mysql_fetch_array($tv_1))
			{
				$link_sua="?thamso=sua_menu_ngang&id=$tv_2[id]&trang=$_GET[trang]";
				$link_xoa="?thamso=xoa_menu_ngang&id=$tv_2[id]";
				$sap_xep=$tv_2['sap_xep'];
				$id=$tv_2['id'];
				$ten_1="sx_".$l;
				$ten_2="id_".$l;
				?>
					<tr>
						<td width="690px" align="left" ><a href="<?php echo $link_sua; ?>" class="a_vvv" >
							
							<?php 
								if($tv_2['thuoc_menu']!="")
								{
									echo_khoang_trang($tv_2['thuoc_menu']);
								}
							?>
							<?php echo $tv_2['ten']; ?>
							
						</a></td>
						<td align="center" >
						<input type="hidden" name="<?php echo $ten_2; ?>" value="<?php echo $id; ?>" >
						<input style="width:50px" name="<?php echo $ten_1; ?>" value="<?php echo $sap_xep; ?>"  >
						</td>
						<td width="100px" align="center" ><a href="<?php echo $link_sua; ?>" class="sua_xoa">Sửa</a></td>
						<td width="100px" align="center" ><a href="<?php echo $link_xoa; ?>" class="sua_xoa">Xóa</a></td>
					</tr>
				<?php
				$l++;
			}	
		?>
		<tr>
			<td width="690px" align="left" >&nbsp;</td>
			<td width="100px" align="center" ><input type="submit" value="Cập nhật" style="margin:5px" > </td>
			<td width="100px" align="center" >&nbsp;</td>
			<td width="100px" align="center" >&nbsp;</td>
		</tr>
		<tr>
			<td colspan="4" align="center">
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