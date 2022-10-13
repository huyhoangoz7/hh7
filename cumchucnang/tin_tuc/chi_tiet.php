<?php 
	chong_pha_hoai();
	//echo "vao day <hr>";
	$tv="select * from tin_tuc where id='$_GET[id]'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	
	$bat_tat_binh_luan_btt=$tv_2['bat_tat_binh_luan'];
	
	$link_hinh="hinhanh_flash/san_pham/".$tv_2['hinh_anh'];
	/*echo "<center>";
		echo "<h1 style='color:red'>";
			echo $tv_2['ten'];
		echo "</h1>";
	echo "</center>";*/
	echo "<center>";
		echo "<div class='tdg___ggg_bc2'>";
			echo "<a href='#'>";
				echo $tv_2['ten'];
			echo "</a>";
		echo "</div>";
		echo "<div class='ndg___ggg_bc2'>";
			echo "<div style='margin:5px;'>";
				echo $tv_2['noi_dung'];
			echo "</div>";
		echo "</div>";
	echo "</center>";
?>
<?php 
	if($chuc_nang_binh_luan_danh_sach_bai_viet=="bat" and $bat_tat_binh_luan_btt=="bat" )
	{
		xuat_bm("<div class='cao_3_px'></div> ");
		include("cumchucnang/binh_luan/danh_sach_bai_viet/khung.php");
	}
?>