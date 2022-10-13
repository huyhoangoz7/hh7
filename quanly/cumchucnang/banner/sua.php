<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="select * from banner order by id";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$noi_dung=$tv_2['html'];
	$noi_dung=str_replace("\r","",$noi_dung);
	$noi_dung=str_replace("\n","",$noi_dung);
	$noi_dung=str_replace("\t","",$noi_dung);
	$noi_dung=str_replace("'","\'",$noi_dung);
?>
<table width="990px" id="er" style="margin-top:6px">
	<tr>
		<td align="right">
			<span class="span__16">Thay đổi banner</span>
			<!--<a href="index.php" class="nut_dong">
				Đóng
			</a>-->
		</td>
	</tr>
	<tr>
		<td>
			<center>
				<form action="" method="post">
					<table width="976px" style="margin:6px">
						<tr>
							<td align="center" colspan="2">
								<script type="text/javascript">
									var oFCKeditor = new FCKeditor('noi_dung') ;
									//oFCKeditor.BasePath	= "fckeditor/" ;
									oFCKeditor.Height	= 300 ;
									oFCKeditor.Width	= 960 ;
									oFCKeditor.Value	= '<?php echo $noi_dung; ?>' ;
									oFCKeditor.Config["EnterMode"]= "br" ;
									oFCKeditor.Create() ;
								</script>
				
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>
								<input type="hidden" name="thay_doi_banner" value="thay_doi_banner" >
								<input type="submit" value="Sửa" style="width:150px;height:50px;font-size:24px" >
								<!--<input type="image" src="../hinhanh_flash/dung_chung/sua_du_lieu.gif" style="border:0px solid red"/>-->
							</td>
						</tr>
					</table>
				</form>
			</center>
		</td>
	</tr>
</table>
<script>
	table_css_1("er");
</script>