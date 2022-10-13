<?php 
	chong_pha_hoai();
?>
<?php 
	$vt=$_GET['vt'];
	$tv="select * from khung_html where vi_tri='$vt' ";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$noi_dung=$tv_2['noi_dung'];
	$noi_dung=str_replace("\r","",$noi_dung);
	$noi_dung=str_replace("\n","",$noi_dung);
	$noi_dung=str_replace("\t","",$noi_dung);
	$noi_dung=str_replace("'","\'",$noi_dung);
?>
<form action="" method="post">
<table width="990px" id="er" style="margin-top:6px">
	<tr>
		<td align="right">
			<span class="span__16">Thay đổi khung văn bản</span>
			<!--<a href="index.php" class="nut_dong">
				Đóng
			</a>-->
		</td>
	</tr>
	<tr>
		<td>
			<br>
				<div style="margin-left:3px" >Tên khung : <input style="width:300px" name="ten" value="<?php echo $tv_2['ten']; ?>" ></div>

			<br>
		</td>
	</tr>
	<tr>
		<td>
			<center>
				
					<table width="976px" style="margin:6px">
						<tr>
							<td align="center" >
								<script type="text/javascript">
									var oFCKeditor = new FCKeditor('noi_dung') ;
									//oFCKeditor.BasePath	= "fckeditor/" ;
									oFCKeditor.Height	= 400 ;
									oFCKeditor.Width	= 960 ;
									oFCKeditor.Value	= '<?php echo $noi_dung; ?>' ;
									oFCKeditor.Config["EnterMode"]= "br" ;
									oFCKeditor.Create() ;
								</script>
				
							</td>
						</tr>
						<tr>
							<td>
								<input type="hidden" name="bm_kbv" value="bm_kbv" >
								<!--<input type="submit" value="Cập nhật" >-->
								<input type="image" src="../hinhanh_flash/dung_chung/sua_du_lieu.gif" style="border:0px solid red;margin:3px"/>
							</td>
						</tr>
					</table>
				
			</center>
		</td>
	</tr>
</table>
</form>
<script>
	table_css_1("er");
</script>