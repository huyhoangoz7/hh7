<?php 
	if(!isset($bien_bao_mat)){exit();};
	if($bien_bao_mat!="co"){exit();};
?>
<?php 

	$xac_dinh_dang_nhap_2="khong";
	
	include("../csdl_php/thong_tin_quan_ly/thong_tin_quan_ly.php");
	
	
	if(isset($_POST['dang_nhap_quan_tri']))
	{
		if($_POST['dang_nhap_quan_tri']=="dang_nhap_quan_tri")
		{
			if($_POST["ky_danh"]!="" and $_POST["mat_khau"]!="")
			{
				
				$kd=ma_hoa_ttql($_POST["ky_danh"]);
				$mk=ma_hoa_ttql($_POST["mat_khau"]);
				if($kd==$csdl['ky_danh'] and $mk==$csdl['mat_khau'])
				{
					$_SESSION['ky_danh__hhh']=$kd;
					$_SESSION['mat_khau__hhh']=$mk;
					//trang_truoc_a1();
					echo '
						<script type="text/javascript">
							setTimeout(function(){
							window.location="index.php";
							},1000);
						</script>
						</script>
					';
					exit();
				}
				else 
				{
					echo "<br><br><center><b style='color:red;' >Sai ky danh hoac mat khau</b></center>";
				}
			}
			else 
			{
				echo "<br><br><center><b style='color:red;' >Khong duoc bo trong ky danh hoac mat khau</b></center>";
			}


		}
	}
	if(!isset($_SESSION['ky_danh__hhh'])){$_SESSION['ky_danh__hhh']="";}
	if(!isset($_SESSION['mat_khau__hhh'])){$_SESSION['mat_khau__hhh']="";}
	

	$kd_ccc=$_SESSION['ky_danh__hhh'];
	$mk_ccc=$_SESSION['mat_khau__hhh'];

	if($kd_ccc!="" and $mk_ccc!="")
	{

		if($kd_ccc==$csdl['ky_danh'] and $mk_ccc==$csdl['mat_khau'])
		{
			$xac_dinh_dang_nhap_2="co";	
		}
	}
	else 
	{
		$xac_dinh_dang_nhap_2="khong";
	}

?>