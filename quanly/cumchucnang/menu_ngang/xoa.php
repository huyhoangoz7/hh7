<?php 
	chong_pha_hoai();
	$id=$_GET['id'];
?>
<?php 
	$z_tv="select count(*) from menu_ngang where thuoc_menu='$id'";
	$z_tv_1=mysql_query($z_tv);
	$z_tv_2=mysql_fetch_row($z_tv_1);
?>
<?php 
	//thongbao();
	if($z_tv_2[0]==0)
	{
		$l_tv="select count(*) from tin_tuc where thuoc_menu='$id'";
		$l_tv_1=mysql_query($l_tv);
		$l_tv_2=mysql_fetch_row($l_tv_1);
		$so=$l_tv_2[0];
		
		$r_tv="select count(*) from san_pham where thuoc_menu='$id'";
		$r_tv_1=mysql_query($r_tv);
		$r_tv_2=mysql_fetch_row($r_tv_1);
		if($r_tv_2[0]==0 and $so==0 )
		{
			$tv_xoa="DELETE FROM `menu_ngang` WHERE `id` = '$id'";
			mysql_query($tv_xoa);
		}
		else 
		{
			thong_bao_a1("Không thể xóa menu này vì còn chứa dữ liệu <br>Nếu muốn xóa menu này hãy xóa các dữ liệu nằm trong menu này");
		}
	}
	else 
	{
		thong_bao_a1("Không thể xóa menu này vì vẫn còn các menu khác trong menu này<br>Nếu bạn muốn xóa hãy xóa các menu khác trong menu này trước");
	}
?>