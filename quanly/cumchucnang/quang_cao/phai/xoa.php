<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="select * from quang_cao_phai where id='$_GET[id]'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$link_hinh="../hinhanh_flash/quang_cao/".$tv_2['file'];
	if(is_file($link_hinh))
	{
		unlink($link_hinh);
	}
?>
<?php 
	$tv_xoa="DELETE FROM `quang_cao_phai` WHERE `id` = '$_GET[id]'";
	mysql_query($tv_xoa);
?>