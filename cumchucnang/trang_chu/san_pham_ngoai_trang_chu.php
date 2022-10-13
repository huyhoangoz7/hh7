<?php 
	chong_pha_hoai();
	//echo "chao <hr>";
?>
<?php 
	$ssp_td=3;
	echo "<center>";
		echo "<div class='tdg___ggg'>";
			echo "<a href='#'>";
				echo "Sản phẩm";
			echo "</a>";
		echo "</div>";
		echo "<div class='ndg___ggg' id='fix_height_div__js' >";
			echo "<table border='0' width='638px' style='font-size:14px'>";
				$tv="select * from san_pham where trang_chu='co' order by sap_xep_trang_chu limit 0,21";
				$tv_1=mysql_query($tv);
				while($tv_2=mysql_fetch_array($tv_1))
				{			
					for($i=1;$i<=$ssp_td;$i++)
					{
						if($i!=1){$tv_2=mysql_fetch_array($tv_1);}
						if($i==1){echo "<tr>";}
						if($tv_2['ten']!="")
						{
							$link_chi_tiet="?thamso=chi_tiet_san_pham&id=$tv_2[id]";
							echo "<td width='212px' align='center' valign='top'>";
								$link_hinh="hinhanh_flash/san_pham/".$tv_2['hinh_anh'];
								echo "<div class='khung_bao_ngoai___j89'>";
									echo "<div class='cao_3_px'></div>";
									echo "<a href='$link_chi_tiet'>";
										echo "<img border='0' src='$link_hinh' width='150px' >";
									echo "</a>";
									echo "<br>";
									echo "<a href='$link_chi_tiet' class='ten_san_pham' >";
										echo $tv_2['ten'];
									echo "</a>";
									echo "<br>";
									$dinh_dang_gia=number_format($tv_2['gia_ban'],0,".",".");
									echo "<span class='gia_ban'>";
										echo $dinh_dang_gia; echo " VNĐ";
									echo "</span>";
									echo "<br>";
									/*echo "<form action=''>";
										echo "Số lượng : ";
										echo "<input style='width:50px' value='1' name='so_luong__nnn'>";
										echo "<br>";
										echo "<div style='overflow:hidden;width:5px;height:3px'></div>";
										echo "<input type='hidden' name='id_sp__nnn' value='$tv_2[id]'>";
										echo "<input type='hidden' name='them_vao_gio__nnn' value='them_vao_gio__nnn'>";
										//echo "<input type='submit' value='Thêm vào giỏ' >";
										echo "<input type='image' src='hinhanh_flash/dung_chung/them_vao_gio.gif' style='border:0px solid red'>";
									echo "</form>";*/
									echo "<div class='cao_3_px'></div>";
									echo "<div class='cao_3_px'></div>";
								echo "</div>";
							echo "</td>";
						}
						if($i==$ssp_td){echo "</tr>";}
					}
						
					
				}
			echo "</table>";
		echo "</div>";
	echo "</center>";
?>
<script>
	fix_height_div__js("fix_height_div__js","khung_bao_ngoai___j89");
</script>