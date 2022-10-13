<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="select * from menu_ngang where id='$_GET[id]'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	
	$bat_tat_binh_luan_bvmt_ct=$tv_2['bat_tat_binh_luan'];
	
	echo "<center>";
		echo "<div class='tdg___ggg_bc2'>";
			echo "<a href='#'>";
				echo $tv_2['ten'];
			echo "</a>";
		echo "</div>";
		echo "<div class='ndg___ggg_bc2'>";
			echo "<div style='margin:5px;padding-top:0px'>";
				echo $tv_2['noi_dung'];
				
			echo "</div>";
		echo "</div>";
	echo "</center>";
?>
<?php 
	if($chuc_nang_binh_luan_bai_viet_mot_tin=="bat" and $bat_tat_binh_luan_bvmt_ct=="bat" )
	{
		xuat_bm("<div class='cao_3_px'></div> ");
		include("cumchucnang/binh_luan/bai_viet_mot_tin/khung.php");
	}
?>