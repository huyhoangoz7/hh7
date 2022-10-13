<?php 
	chong_pha_hoai();
	//echo "trang quan ly san pham <hr>";
?>
<style>
	a.thua__link_1:link { font-size: 14px; text-decoration: none;  color: #0b55c4; }
	a.thua__link_1:visited { font-size: 14px; color: #0b55c4; text-decoration: none; }
	a.thua__link_1:hover { font-size: 14px; text-decoration: none; color: #084095;  font-style: normal; }
</style>
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
<script type="text/javascript">
	function chuyen_link__ooo(id)
	{
		//alert(id);
		window.location="?thamso=quan_ly_san_pham&cap_do="+id;
	}
</script>
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

	$tv="select count(*) from san_pham where trang_chu='co' ";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$st=ceil($tv_2[0]/$so_gioi_han);
	
	//$tv=$chuoi_union__ppp." limit $vtbd,$so_gioi_han ";
	$tv="select * from san_pham where trang_chu='co' order by sap_xep_trang_chu limit $vtbd,$so_gioi_han ";
	$tv_1=mysql_query($tv);
?>
<center>
	<form action="" method="post">
		<table width="980px" border="1" style="clear:left;margin-top:6px" id="er">
			<tr>
				<td width="100px" align="center"><b>Hình ảnh</b></td>
				<td width="200px" align="left" ><b>Tiêu đề</b></td>
				<td width="280px" align="left" ><b>Nội dung</b></td>
				<td width="100px" align="center"><b>Trang chủ</b></td>
				<td width="100px" align="center"><b>Sắp xếp</b></td>
				<td width="100px" align="center"><b>Sửa</b></td>
				<td width="100px" align="center"><b>Xóa</b></td>
			</tr>
			<?php 
				$jem=1;
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
					$link_hinh="../hinhanh_flash/san_pham/".$tv_2['hinh_anh'];
					$link_sua="?thamso=sua_san_pham&id=".$tv_2['id']."&ts_dong=quan_ly_san_pham_trang_chu&trang=$_GET[trang]";
					$link_xoa="?thamso=xoa_san_pham&id=".$tv_2['id'];
					$ten__cn___trang_chu="cn___trang_chu____$jem";
					$ten__cn___sap_xep="cn___sap_xep____$jem";
					$ten_id="ten_id___$jem";
					?>
						<tr>
							<td align="center">
								<a href="<?php echo $link_sua; ?>">
									<img src="<?php echo $link_hinh; ?>" width="90px"  border="0"/>
								</a>
							</td>
							<td align="left" >
								<a href="<?php echo $link_sua; ?>" class="thua__link_1" >
									<?php echo $tv_2['ten']; ?>
								</a>
							</td>
							<td align="left" ><?php echo $chuoi_ndn; ?></td>
							<td align="center">
								<input type="hidden" name="<?php echo $ten_id; ?>"  value="<?php echo $tv_2['id']; ?>"/>
								<select name="<?php echo $ten__cn___trang_chu; ?>">
									<option value="khong">Không</option>
									<option value="co" selected >Có</option>
								</select>
							</td>
							<td align="center">
								<input style="width:50px" value="<?php echo $tv_2['sap_xep_trang_chu']; ?>" name="<?php echo $ten__cn___sap_xep; ?>" />
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
					$jem++;
				}
			?>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td align="center">
					<input type="hidden" name="so_jem" value="<?php echo $jem; ?>"  />
					
					<input type="hidden" name="cap_nhat__sptt" value="cap_nhat__sptt"  />
					<input type="submit" value="Cập nhật" name="cn___trang_chu" />
				</td>
				<td align="center">
					<input type="submit" value="Cập nhật" name="cn___sap_xep" />
				</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td colspan="7" align="center">
					<?php 
						//echo $_GET['tu_khoa'];
						/*for($i=1;$i<=$st;$i++)
						{
							$link="?thamso=quan_ly_san_pham_trang_chu&trang=$i";
							echo "<a href='$link'>";
								echo $i;
							echo "</a>";echo " ";
						}*/
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