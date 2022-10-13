<?php 
	chong_pha_hoai();
?>
<?php 
	$tieu_de_web=lay_thong_so("tieu_de_web");
	$mo_ta_web=lay_thong_so("mo_ta_web");
?>
<table width="990px" id="er" style="margin-top:6px">
	<tr>
		<td align="right">
			<span class="span__16">Đổi tên web</span>
			<!--<a href="index.php" class="nut_dong">
				Đóng
			</a>-->
		</td>
	</tr>
	<tr>
		<td>
			<center>
				<form action="" method="post">
					<table width="976px" style="margin:6px" id="l_l" >
						<tr>
							<td width="140px">Tên web : </td>
							<td><input name="ten_web" value="<?php xuat_bm($tieu_de_web);?>" style="margin:5px;width:300px;" ></td>
						</tr>
						<tr>
							<td width="140px">Mô tả web : </td>
							<td><textarea name="mo_ta_web" style="margin:5px;width:600px;height:90px" ><?php xuat_bm($mo_ta_web);?></textarea></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>
								<input type="hidden" name="thay_doi_thong_tin_web" value="thay_doi_thong_tin_web" >
								<input type="submit" value="Sửa" style="width:100px;height:30px;margin:5px" >
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
	table_css("l_l");
</script>