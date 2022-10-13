<?php 
	chong_pha_hoai();
	//echo "chao <hr>";
?>
<table width="990px" id="er" style="margin-top:6px">
	<tr>
		<td align="right" >
			<span class="span__16">Thay đổi thông tin quản trị</span>
			<!--<a href="index.php" class="nut_dong">
				Đóng
			</a>-->
		</td>
	</tr>
	<tr>
		<td>
			<form action="" method="post">
				<table width="700" border="0" style="margin:6px" id="er_2">
				  <tr>
					<td width="170"><strong>K&yacute; danh : </strong></td>
					<td width="520"><input name="ky_danh" type="text" value="khong_thay_doi" size="40" style="margin:5px" /></td>
				  </tr>
				  <tr>
					<td><strong>M&#7853;t kh&#7849;u : </strong></td>
					<td>
					<input name="mat_khau" type="password" value="khong_thay_doi" size="40" style="margin:5px" />
					<br>
					<span style='font-size:14px;line-height:28px;margin-left:5px' >- Mật khẩu phải lớn hơn 5 ký tự</span>
					
					</td>
				  </tr>
				  <tr>
				  <tr>
					<td><strong>Nhập lại mật khẩu : </strong></td>
					<td><input name="nl_mk" type="password" value="khong_thay_doi" size="40" style="margin:5px" /></td>
				  </tr>
					<td>&nbsp;</td>
					<td>
						<input type="hidden" name="thay_doi_thong_tin_quan_tri" value="thay_doi_thong_tin_quan_tri"  />
						<input type="submit" value="Sửa" style="margin:5px" />
						<!--<input type="image" src="../hinhanh_flash/dung_chung/sua.gif" style="border:0px solid red"/>-->
					</td>
				  </tr>
				</table>
			</form>
		</td>
	</tr>
</table>
<script>
	table_css_1("er");
	table_css("er_2");
</script>