<?php 
	chong_pha_hoai();
?>
<?php 
	$id=$_GET['id'];
?>
<?php 
	$tv="select * from hinh_anh_knl where id='$id'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$lien_ket_hinh="/du_lieu_kst_lll/hinh_anh/".$tv_2['ten'];
	$duong_dan_hinh=$_SERVER['DOCUMENT_ROOT'].$lien_ket_hinh;
	if(is_readable($duong_dan_hinh))
	{
		unlink($duong_dan_hinh);
	}
?>
<?php 
	$tv_xoa="DELETE FROM `hinh_anh_knl` WHERE `id` = '$id'";
	mysql_query($tv_xoa);
?>