<?php 
	chong_pha_hoai();
	//echo "trang quan ly san pham <hr>";
?>
<style>
	a.thua__link_1:link { font-size: 14px; text-decoration: none;  color: #0b55c4; }
	a.thua__link_1:hover { font-size: 14px; text-decoration: none; color: #084095;  font-style: normal; }
</style>
<?php 
	
	$truong_ksp="ksp".$_GET['vt'];
	$truong_ksp_2="sx_ksp".$_GET['vt'];
	
	//$tv=$chuoi_union__ppp." limit $vtbd,$so_gioi_han ";
	$tv="select * from san_pham where ".$truong_ksp."='co' order by ".$truong_ksp_2." limit 0,20 ";
	$tv_1=mysql_query($tv);
?>
<center>
	<form action="" method="post">
		<table width="980px" border="1" style="clear:left;margin-top:6px" id="er">
			<tr>
				<td width="100px" align="center"><b>Hình ảnh</b></td>
				<td width="180px" align="left" ><b>Tiêu đề</b></td>
				<td width="180px" align="left" ><b>Nội dung</b></td>
				<td width="180px" align="center"><b>Khung sản phẩm</b></td>
				<td width="180px" align="center"><b>Sắp xếp</b></td>
				<td width="80px" align="center"><b>Sửa</b></td>
				<td width="80px" align="center"><b>Xóa</b></td>
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
									<img src="<?php echo $link_hinh; ?>" width="70px" border="0"/>
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
								<input style="width:50px" value="<?php echo $tv_2[$truong_ksp_2]; ?>" name="<?php echo $ten__cn___sap_xep; ?>" />
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
				<td align="center" colspan="2">
					<input type="hidden" name="so_jem" value="<?php echo $jem; ?>"  />
					
					<input type="hidden" name="cap_nhat_ksp" value="cap_nhat_ksp"  />
					<input type="submit" value="Cập nhật"  style="margin:5px" />

				</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>

		</table>
	</form>
</center>
<script>
	table_css_2("er");
</script>