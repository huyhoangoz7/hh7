<?php 
	session_start();

	$hop_le="khong";
	$bien_bao_mat_csdl="co";
	require("../../../../../../../csdl_php/thong_tin_quan_ly/thong_tin_quan_ly.php");
	
	//echo "ll";
	
	$kt_session_ky_danh=isset($_SESSION['ky_danh__hhh']);
	
	$kt_session_mat_khau=isset($_SESSION['mat_khau__hhh']);
	
	if($kt_session_ky_danh==true)
	{
		if($kt_session_mat_khau==true)
		{
			$kd=$_SESSION['ky_danh__hhh'];
			$mk=$_SESSION['mat_khau__hhh'];
			
			if($kd==$csdl['ky_danh'])
			{
				if($mk==$csdl['mat_khau'])
				{
					$hop_le="co";
				}
			}
			
			
		}
	}
	
	//echo $hop_le;
	
	if($hop_le!="co")
	{
		exit();
	}
	
	//echo $hop_le;
	//echo "<hr>";
	
	
?>