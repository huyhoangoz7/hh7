<?php 
	chong_pha_hoai();
?>
<?php 
	$so=lay_thong_so("ssp_ksp4");
	$td=lay_thong_so("td_a4");
	$tv="select * from san_pham where ksp4='co' order by sx_ksp4 limit 0,$so ";
	$tv_1=mysql_query($tv);
?>
<div class="tdk___456_bc2">
	<span><?php echo $td; ?></span>
</div>
<div class="ndk___456_bc2" style='font-size:14px' >
	<center>
		<?php 

			echo "<div class='cao_3_px'></div>";
			while($tv_2=mysql_fetch_array($tv_1))
			{
				echo '<div class="khung_bao_ngoai___j90">';
					$link_hinh="hinhanh_flash/san_pham/".$tv_2['hinh_anh'];
					$link_chi_tiet="?thamso=chi_tiet_san_pham&id=$tv_2[id]";
					echo "<div>";
						echo "<center>";
							echo "<a href='$link_chi_tiet'  >";					
								echo "<img src='$link_hinh' border='0' width='90px' >";
							echo "</a>";
							echo "<br>";
							echo "<a href='$link_chi_tiet' class='link_8' >";
								echo $tv_2['ten'];
							echo "</a>";
							echo "<br>";
							//echo $tv_2['gia_ban']; echo " VNĐ";
							$dinh_dang_gia=number_format($tv_2['gia_ban'],0,".",".");
							$dinh_dang_gia=$dinh_dang_gia." VNĐ";
							
							if($tv_2['loai_gia']=="lien_he"){$dinh_dang_gia="Giá : Liên hệ";}
							if($tv_2['loai_gia']=="van_ban"){$dinh_dang_gia=$tv_2['gb_vb'];}

							echo "<span class='gia_ban'>";
								echo $dinh_dang_gia;
							echo "</span>";
						echo "</center>";
					echo "</div>";
				echo "</div>";
				echo "<div class='cao_3_px'></div>";
			}
		?>
	</center>
</div>