<?php 
	chong_pha_hoai();
?>
<tr>
	<td width="170px" valign="top">
		<?php 
			
			include("cumchucnang/menu_trai/menu_trai_2.php");
			echo '<div class="cao_3_px"></div>';
			
			include("cumchucnang/san_pham_moi/san_pham_moi.php");
			echo '<div class="cao_3_px"></div>';
			include("cumchucnang/quang_cao_trai/quang_cao_trai.php");
		?>
	</td>
	<td width="650px" valign="top">
		<?php 
			include("cumchucnang/bien_luan_phan_than/bien_luan_phan_than.php");
		?>
	</td>
	<td width="170px" valign="top">
		<?php 
			
			include("cumchucnang/san_pham_ban_chay/san_pham_ban_chay.php");
			
			echo '<div class="cao_3_px"></div>';
			
			include("cumchucnang/thong_ke/thong_ke.php");
			echo '<div class="cao_3_px"></div>';
			include("cumchucnang/quang_cao_phai/quang_cao_phai.php");
		?>
	</td>
</tr>