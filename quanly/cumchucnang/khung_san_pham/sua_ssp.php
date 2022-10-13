<?php 
	chong_pha_hoai();
	//echo "thay doi lien he";
?>
<?php 
	$ten_1=lay_thong_so('ssp_ksp1');
	$ten_2=lay_thong_so('ssp_ksp2');
	$ten_3=lay_thong_so('ssp_ksp3');
	$ten_4=lay_thong_so('ssp_ksp4');
?>
<table width="990px" id="er" style="margin-top:6px">
	<tr>
		<td align="right">
			<span class="span__16">Sửa số sản phẩm trong khung</span>
			<!--<a href="index.php" class="nut_dong">
				Đóng
			</a>-->
		</td>
	</tr>
	<tr>
		<td>
		
				<form action="" method="post">
					<table width="976px" style="margin:6px">
						<tr>
							<td align="left" >
								<br>
								Khung 1 : <input style="width:400px" name="k1" value="<?php echo $ten_1;?>" ><br><br>
								Khung 2 : <input style="width:400px" name="k2" value="<?php echo $ten_2;?>" ><br><br>
								Khung 3 : <input style="width:400px" name="k3" value="<?php echo $ten_3;?>" ><br><br>
								Khung 4 : <input style="width:400px" name="k4" value="<?php echo $ten_4;?>" ><br><br>
				
							</td>
						</tr>
						<tr>
			
							<td>
								<input type="hidden" name="bm_s_ssp_tk" value="bm_s_ssp_tk" >
								<!--<input type="submit" value="Cập nhật" >-->
								<input type="submit" value="Sửa" style="width:150px;height:50px;font-size:24px;margin:3px" >
							</td>
						</tr>
					</table>
				</form>

		</td>
	</tr>
</table>
<script>
	table_css_1("er");
</script>