<?php 
	chong_pha_hoai();

?>
<?php 
	
	//$tv=$chuoi_union__ppp." limit $vtbd,$so_gioi_han ";
	$tv="select * from quang_cao_phai order by id desc ";
	$tv_1=mysql_query($tv);
?>
<center>

	<table width="976px" border="1" style="clear:left;margin:6px" id="er" >
		<tr>
			<td width="255px" align="center"><b>Hình ảnh / Flash</b></td>
			<td width="325px" align="left" ><b>Liên kết</b></td>
			<td width="100px"><b>Rộng</b></td>
			<td width="100px"><b>Cao</b></td>
			<td width="100px" align="center"><b>Sửa</b></td>
			<td width="100px" align="center"><b>Xóa</b></td>
		</tr>
		<?php 
			while($tv_2=mysql_fetch_array($tv_1))
			{
				$link_hinh="../hinhanh_flash/tin_tuc/".$tv_2['hinh_anh'];
				$link_sua="?thamso=sua_quang_cao_phai&id=".$tv_2['id']."&trang=$_GET[trang]";
				$link_xoa="?thamso=xoa_quang_cao_phai&id=".$tv_2['id'];
				?>
					<tr>
						<td align="center">
							<div class="cao_3_px"></div>
							<?php 
								$m=explode(".",$tv_2['file']);
								$duoi_file=$m[count($m)-1];
								$link_file="../hinhanh_flash/quang_cao/".$tv_2['file'];
								$rong=$tv_2['rong'];
								$cao=$tv_2['cao'];
								$link_lien_ket=$tv_2['link'];
								if($duoi_file=="swf")
								{
									flash($link_file,$rong,$cao);
								}
								else 
								{
									echo "<a href='$link_lien_ket' target='_blank'>";
										echo "<img src='$link_file' width='$rong' height='$cao'>";
									echo "</a>";
									
								}
							?>
							<div class="cao_3_px"></div>
						</td>
						<td align="left" >
							<?php if($link_lien_ket!=""){echo $link_lien_ket;}else {echo "&nbsp;";} ?>
						</td>
						<td align="center">
							<?php echo $rong; ?>
						</td>
						<td align="center">
							<?php echo $cao; ?>
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
			}
		?>
		<tr>
			<td colspan="6" align="center">
				<?php 
					//echo $_GET['tu_khoa'];
					/*for($i=1;$i<=$st;$i++)
					{
						$link="?thamso=quan_ly_quang_cao_phai&trang=$i";
						echo "<a href='$link'>";
							echo $i;
						echo "</a>";echo " ";
					}*/
					xuat_link($st);
				?>
			</td>
		</tr>
	</table>
</center>
<script>
	table_css_2("er");
</script>