<?php 
	session_start();
	ini_set('display_errors', 0);
	
	$bien_bao_mat="co";
	$bien_bao_mat_csdl="co";
	
	include("../ketnoi.php");
	
	function ma_hoa_ttql($c)
	{
		$bien_bao_mat="co";
		include("bao_mat/chuoi_ma_hoa.php");
		$c=trim($c);
		$c_2="lll_74123_36987_wzmpl7_";
		
		
		for($i=0;$i<40;$i++)
		{
			$c_2=$c_2."@mot_ha!i _ba_ch?i{n_ chi]n_hai_ ba_(mot_ 012345 6789!@_ ";
		}
		
		
		
		$c_2=$c_2.$chuoi_ma_hoa."_";
		
		$c=$c_2.$c;
		
		//echo $c."<hr>";
		
		$kq=md5(md5(sha1(md5($c))));
		return $kq;
	}
	
	$tap_tin_chay_quan_ly_lan_dau="bao_mat/chay_web_quan_ly_lan_dau/tap_tin_chay_web_quan_ly_lan_dau.php";
	
	if(is_readable($tap_tin_chay_quan_ly_lan_dau))
	{
		$tap_tin_xu_ly="bao_mat/chay_web_quan_ly_lan_dau/xu_ly.php";
		include($tap_tin_xu_ly);
		
		unlink($tap_tin_chay_quan_ly_lan_dau);
		unlink($tap_tin_xu_ly);
		
	}
	
	$xac_dinh_dang_nhap_2="khong";
	
	include("cumchucnang/dang_nhap_quan_ly/xac_dinh_dang_nhap_2.php");
	
	if($xac_dinh_dang_nhap_2!="co")
	{
		include("cumchucnang/dang_nhap_quan_ly/khung_dang_nhap_2.php");
		exit();
	}
	
	if(!isset($_GET['thamso'])){$_GET['thamso']="";}
	

	
	
	
	
	$ccn="cumchucnang/";
	$tm_tro_chuyen="tro_chuyen/";
	
	
	include("../cumchucnang/ham/ham.php");
	include("../ham/ham.php");
	include("cumchucnang/ham/ham.php");
	include("bao_mat/ham.php");
	include("bao_mat/class.php");
	
	
	include("bao_mat/thu_muc_bao_mat.php");
	
	
	
	
	$bao_mat=new bao_mat;
	
	include("cumchucnang/binh_luan/class.php");
	
	$binh_luan_2=new binh_luan_2;
	
	$dd=$ccn.$tm_tro_chuyen."class.php";
	include($dd);
	$tro_chuyen=new tro_chuyen();
	
	
	include("cumchucnang/dang_nhap_quan_ly/xacdinh_dangnhap.php");
	include("cumchucnang/xu_ly_post_get/xu_ly_post_get_2.php");
	//echo ma_hoa_ttql("admin");
	
	if(!isset($_SESSION['so_session_ngau_nhien_2']))
	{
	
		$so_4=mt_rand(0,1000000000);
		
		$_SESSION['so_session_ngau_nhien_2']=$so_4;
	}
	
	//echo ma_hoa_ttql("lll");echo "<hr>";
	
?>
<html>
<head>
<meta charset="utf-8" >
<title>Quản lý</title>
<link rel="stylesheet" type="text/css" href="giao_dien/chung.css" />
<script type="text/javascript" src="giao_dien/chung.js"></script>
<?php 

	$duong_dan_l=$thu_muc_bao_mat."fckeditor/js_ll.php";
	
	include($duong_dan_l);

	$duong_dan_fckeditor_js=$thu_muc_bao_mat."fckeditor/fckeditor.js";
	
	echo "<script type='text/javascript' src='";
	echo $duong_dan_fckeditor_js;
	echo "' ></script>";
?>
<!--<script type="text/javascript" src="fckeditor/fckeditor.js"></script>-->

</head>

<body>
	<?php 
	
		include("cumchucnang/xu_ly_post_get/xu_ly_post_get.php");
		include("cumchucnang/dang_nhap_quan_ly/thoat.php");
		
	?>	
	<?php 
		if(isset($_GET['thamso']))
		{
			sua_thong_so($_GET['thamso'],"thamso_l");
		}
		else 
		{
			sua_thong_so("trang_chu","thamso_l");
		}
	?>

	<?php 
		
		$ten_ksp_1=ten_khung_san_pham("1");
		$ten_ksp_2=ten_khung_san_pham("2");
		$ten_ksp_3=ten_khung_san_pham("3");
		$ten_ksp_4=ten_khung_san_pham("4");
		
		$ten_kbv_1=ten_khung_bai_viet("1");
		$ten_kbv_2=ten_khung_bai_viet("2");
		$ten_kbv_3=ten_khung_bai_viet("3");
		$ten_kbv_4=ten_khung_bai_viet("4");
		
		
	?>
	<?php 
		$kiem="da_kiem_tra";
		if(isset($_POST))
		{
			if(count($_POST)!=0)
			{
				$kiem="khong";
			}
		}
		if($_GET['thamso']=="xoa_san_pham"){$kiem="khong";}
		if($_GET['thamso']=="xoa_tin_tuc"){$kiem="khong";}
		if($_GET['thamso']=="xoa_quang_cao_phai"){$kiem="khong";}
		if($kiem=="da_kiem_tra")
		{
	?>
	<center>
		<div style="text-align:left; width:990px">
			<?php				
				if($xacdinh_dangnhap=="khong")
				{
					include("cumchucnang/dang_nhap_quan_ly/khung_dang_nhap.php");
				}
				else 
				{

					echo "<center><h1 style='font-size:36px;color:blue' >Quản lý web</h1></center>";
					include("cumchucnang/thanh_menu_2/thanh_menu_2.php");
					echo "<br style='clear:left' >";
					include("cumchucnang/bien_luan_phan_than/bien_luan_phan_than.php");
					echo "<br>";
					include("cumchucnang/footer_quan_ly/footer_quan_ly.php");
					
					//$so_ngau_nhien=mt_rand(0,10000);
					//xuat_bm($so_ngau_nhien);
					
				}
			?>
		</div>
	</center>
	<?php 
		}
	?>
	
	
</body>
</html>
