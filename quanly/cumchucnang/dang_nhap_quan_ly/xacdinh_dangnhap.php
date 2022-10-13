<?php 
	chong_pha_hoai();
?>
<?php 
	include("../csdl_php/thong_tin_quan_ly/thong_tin_quan_ly.php");
	$xacdinh_dangnhap="khong";
	if(!isset($_SESSION['ky_danh__hhh'])){$_SESSION['ky_danh__hhh']="";}
	if(!isset($_SESSION['mat_khau__hhh'])){$_SESSION['mat_khau__hhh']="";}
	
	if(isset($_POST['dang_nhap_quan_tri']))
	{

		if($_POST['dang_nhap_quan_tri']=="dang_nhap_quan_tri")
		{
			if($_POST["ky_danh"]!="" and $_POST["mat_khau"]!="")
			{
				
				$kd=ma_hoa_ttql($_POST["ky_danh"]);
				$mk=ma_hoa_ttql($_POST["mat_khau"]);
				//$tv="select count(*) from thongtin_quantri where ky_danh='$kd' and mat_khau='$mk'";
				//$tv_1=mysql_query($tv);
				//$tv_2=mysql_fetch_row($tv_1);
				//if($tv_2[0]!=0)
				if($kd==$csdl['ky_danh'] and $mk==$csdl['mat_khau'])
				{
					$_SESSION['ky_danh__hhh']=$kd;
					$_SESSION['mat_khau__hhh']=$mk;
					trang_truoc_a1();
				}
				else 
				{
					thong_bao_a1("Sai ký danh hoặc mật khẩu");
				}
			}
			else 
			{
				thong_bao_a1("Không được bỏ trống ký danh hoặc mật khẩu");
			}

			//trangtruoc();
			//exit();
		}
	}
	$kd_ccc=$_SESSION['ky_danh__hhh'];
	$mk_ccc=$_SESSION['mat_khau__hhh'];
	//echo $kd_ccc;echo " - <hr>";
	if($kd_ccc!="" and $mk_ccc!="")
	{
		
		/*$tv="select count(*) from thongtin_quantri where ky_danh='$kd_ccc' and mat_khau='$mk_ccc'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_row($tv_1);
		if($tv_2!=0)*/
		if($kd_ccc==$csdl['ky_danh'] and $mk_ccc==$csdl['mat_khau'])
		{
			//echo $kd_ccc;echo " --- <hr>";
			$xacdinh_dangnhap="co";	
		}
	}
	else 
	{
		$xacdinh_dangnhap="khong";
	}
	//echo $xacdinh_dangnhap;echo "<hr>";
?>