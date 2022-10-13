<?php 
	session_start();
	ini_set('display_errors', 0);
	$bien_bao_mat="co";
	include("../../ketnoi.php");
	

	
	function lay_thong_so_ll_ll($ma)
	{
		$tv="select * from thong_so where ma='$ma' ";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		return $tv_2['gia_tri'];
	}
	
	$tro_chuyen=lay_thong_so_ll_ll('tro_chuyen');
	if($tro_chuyen=="bat")
	{
		echo $_SESSION['trang_tro_chuyen_hien_tai'];
	}
	
	
	
?>
