<?php 
	if(!isset($bien_bao_mat)){exit();}
	if($bien_bao_mat!="co"){exit();}
?>

<?php 
	function luot_truy_cap($id)
	{
		$tv="select * from luot_truy_cap where id='$id'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		return $tv_2['luot_truy_cap'];
	}
	
	$luot_truy_cap=luot_truy_cap("1");
	
	$ltc_trong_ngay=luot_truy_cap("2");
	
	$ltc_trong_thang=luot_truy_cap("5");

	$ltc_trong_nam=luot_truy_cap("6");

?>
<table width="990px" id="er" style="margin-top:6px">
	<tr>
		<td align="right">
			<span class="span__16">Sửa thống kê</span>
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
							<td width="140px">Toàn bộ truy cập : </td>
							<td><input name="tbtc" value="<?php xuat_bm($luot_truy_cap);?>" style="margin:5px;width:300px;" ></td>
						</tr>
						<tr>
							<td width="140px">Truy cập trong ngày : </td>
							<td><input name="tctn" value="<?php xuat_bm($ltc_trong_ngay);?>" style="margin:5px;width:300px;" ></td>
						</tr>
						<tr>
							<td width="140px">Truy cập trong tháng : </td>
							<td><input name="tctt" value="<?php xuat_bm($ltc_trong_thang);?>" style="margin:5px;width:300px;" ></td>
						</tr>
						<tr>
							<td width="140px">Truy cập trong năm : </td>
							<td><input name="tct_nam" value="<?php xuat_bm($ltc_trong_nam);?>" style="margin:5px;width:300px;" ></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>
								<input type="hidden" name="thay_doi_thong_ke" value="thay_doi_thong_ke" >
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