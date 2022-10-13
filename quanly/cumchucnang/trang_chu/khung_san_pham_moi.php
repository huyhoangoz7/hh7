<?php 
	if(!isset($bien_bao_mat)){exit();}
?>


<?php 
	
	$tv="select id,ten from san_pham order by id desc limit 0,10 ";
	$tv_1=truy_van_bm($tv);
	
	xuat_bm("<div class='khung_tieu_de_cot_phai_ban_dau' >");
	xuat_bm("<span>Sản phẩm mới</span>");
	xuat_bm("</div>");
	xuat_bm("<div class='khung_noi_dung_cot_phai_ban_dau' >");
		
		//include("");
		?>
			<center>
				<br>
				<table border="0" >
					<tr style="">
						<td width="180px" align="left" height="36px" ><b style='color:blue;margin-left:10px' >Tên</b></td>
						<td width="50px" align="center" ><b style='color:blue;' >Sửa</b></td>
					</tr>
					
					<?php 
						while($tv_2=mysql_fetch_array($tv_1))
						{
							$link_sua="?thamso=sua_san_pham&id=".$tv_2['id'];
							$ten=$tv_2['ten'];
							xuat_bm("<tr class='hang_l_1' >");
								xuat_bm("<td align='left' height='36px' >");
									xuat_bm("<a href='$link_sua' class='ten_sp_l' >");
										xuat_bm($ten);
									xuat_bm("</a>");
								xuat_bm("</td>");
								xuat_bm("<td align='center' ><a href='$link_sua' class='sua_xoa' >Sửa</a></td>");
							xuat_bm("</tr>");
						}
					?>
					
				</table>
				<br>
			</center>
			
		<?php 
		
		
	xuat_bm("</div>");

?>