<?php 
	chong_pha_hoai();
	//echo "khung dang nhap";
?>

<center>
	<form action="" method="post" style="margin:0">
		<table style="margin-top:40px" >
			<tr>
				<td align="left" ><b>Ký danh : </b></td>
				<td align="left" ><input name="ky_danh" style="width:150px" /></td>
			</tr>
			<tr>
				<td align="left"><b>Mật khẩu :</b></td>
				<td align="left"><input name="mat_khau" style="width:150px" type="password"/></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td align="left" >
					<input type="hidden" name="dang_nhap_quan_tri" value="dang_nhap_quan_tri" />
					<input type="submit" value="Đăng nhập" />
				</td>
			</tr>
		</table>
	</form>
</center>