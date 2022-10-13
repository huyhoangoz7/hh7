<?php 
	session_start();
	ini_set('display_errors', 0);
	//print_r($_SESSION);echo "<hr>";
	$bien_bao_mat="co";
	include("../../ketnoi.php");
	//echo "lll ";

	include("../../bao_mat/ham.php");	

	include("../../cumchucnang/ham/ham.php");	
	
	$tro_chuyen=lay_thong_so('tro_chuyen');
	if($tro_chuyen=="bat")
	{
		$trang_thai_khung_tro_chuyen=lay_session_bm("trang_thai_khung_tro_chuyen");
		
		if($trang_thai_khung_tro_chuyen=="1")
		{
			tao_session_bm("trang_thai_khung_tro_chuyen","2");
		}
		else 
		{
			tao_session_bm("trang_thai_khung_tro_chuyen","1");
		}
	}
	
?>
