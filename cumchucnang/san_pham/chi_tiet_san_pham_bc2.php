<?php 
	chong_pha_hoai();
	//echo "vao day <hr>";
?>
<?php 
	//$gui_bl_sp_lan_1=lay_session_bm("xu_ly_bm_bl_sp_lan_1");
	//$bm_bl_sp=post_bm('bm_bl_sp');
	
?>
<?php
	$tv="select * from san_pham where id='$_GET[id]'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$link_hinh="hinhanh_flash/san_pham/".$tv_2['hinh_anh'];
	
	$bat_tat_binh_luan=$tv_2['bat_tat_binh_luan'];
	
	$thuoc_menu=$tv_2['thuoc_menu'];
	$id=$_GET['id'];
	echo "<center>";
		echo "<div class='tdg___ggg_bc2'>";
			echo "<a href='#'>";
				echo $tv_2['ten'];
			echo "</a>";
		echo "</div>";
		echo "<div class='ndg___ggg_bc2'>";
			echo "<table style='font-size:14px' >";
				echo "<tr>";
					echo "<td valign='top' width='216px' align='center'>";
						echo "<div class='cao_3_px'></div>";
						echo "<a href='#'>";
							echo "<img border='0' src='$link_hinh' width='170px' >";
						echo "</a>";
						echo "<div class='cao_3_px'></div>";
					echo "</td>";
					echo "<td width='422px' valign='top'>";
						echo "<div class='cao_3_px'></div>";
						echo "<a href='#' class='link_3'>";
							echo $tv_2['ten'];
						echo "</a>";
						echo "<br><br>";
						//echo "Giá bán : ".$tv_2['gia_ban'];
						
						$dinh_dang_gia=number_format($tv_2['gia_ban'],0,".",".");
						$dinh_dang_gia=$dinh_dang_gia." VNĐ";
						
						if($tv_2['loai_gia']=="lien_he"){$dinh_dang_gia="Liên hệ";}
						if($tv_2['loai_gia']=="van_ban"){$dinh_dang_gia=$tv_2['gb_vb'];}
									
						
						echo "<span style='font-size:16px'>Giá bán : </span>";
						echo "<span class='gia_ban' style='font-size:16px' >";
							echo $dinh_dang_gia; 
						echo "</span>";
						echo "<br>";
						echo "<br>";
						echo $tv_2['noi_dung_ngan'];
						echo "<div class='cao_3_px'></div>";
						echo "<div class='cao_3_px'></div>";

					echo "</td>";
				echo "</tr>";
			echo "</table>";
			echo "<div class='nd_ctsp' >";
				echo "<div style='margin-left:5px'>";
					echo "<div class='cao_3_px'></div> ";
					echo $tv_2['noi_dung'];
					echo "<div class='cao_3_px'></div> ";
				echo "</div>";
			echo "</div>";			
		echo "</div>";
	echo "</center>";
?>
<?php
	
	if($chuc_nang_binh_luan_san_pham=="bat" and $bat_tat_binh_luan=="bat" )
	{
		xuat_bm("<div class='cao_3_px'></div> ");
		include("cumchucnang/binh_luan/san_pham/khung.php");
	}
	
	xuat_bm("<div class='cao_3_px'></div> ");
	include("cumchucnang/san_pham/san_pham_lien_quan.php");
	
	
	
?>
