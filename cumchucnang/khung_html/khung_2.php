<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="select * from khung_html where vi_tri='2' ";	
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
?>
<div class="tdk___456_bc2">
	<span><?php echo $tv_2['ten'];?></span>
</div>
<div class="ndk___456_bc2" style='font-size:14px' >
	<div style="text-align:left;margin:0px 10px;" >
		<?php 
			echo "<div class='cao_3_px'></div>";
			
			echo $tv_2['noi_dung'];
			echo "<div class='cao_3_px'></div>";
			
		?>
	</div>
	</center>
</div>