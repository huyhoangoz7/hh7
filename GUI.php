<?php 
	ob_start();
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	setcookie("gido","gido", time() +3600);
	session_start();
	ini_set('display_errors', 0);
	
	$bien_bao_mat="co";
	
	if(!isset($_SESSION['so_session_ngau_nhien']))
	{
		
		$so_4=mt_rand(0,1000000000);
		
		$_SESSION['so_session_ngau_nhien']=$so_4;
	}
	
	if(!isset($_GET['thamso'])){$_GET['thamso']="";}
	
	
	include("ketnoi.php");
	
		

	include("bao_mat/ham.php");	
	include("bao_mat/class.php");
	include("cumchucnang/ham/ham.php");	
	
	include("cumchucnang/title_meta/title_meta.php");
	

	
	$bao_mat=new bao_mat;
	
	$chuc_nang_binh_luan_san_pham=lay_thong_so('chuc_nang_binh_luan_san_pham');
	$chuc_nang_binh_luan_danh_sach_bai_viet=lay_thong_so('chuc_nang_binh_luan_danh_sach_bai_viet');
	$chuc_nang_binh_luan_bai_viet_mot_tin=lay_thong_so('chuc_nang_binh_luan_bai_viet_mot_tin');
	

	include("cumchucnang/xu_ly_post_get/xu_ly_post_get.php");


	$kq="";

	
	

	
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title_meta; ?></title>
<meta name="keywords" content="<?php echo $title_meta; ?>" />
<meta name="description" content="<?php echo $noi_dung_mo_ta; ?>" />
<?php 
	$mau_giao_dien=lay_thong_so("mau_giao_dien");
	
	if($mau_giao_dien=="xanh"){$lien_ket_css='<link rel="stylesheet" type="text/css" href="giao_dien/xanh/chung.css" > ';}
	if($mau_giao_dien=="xanh_la_cay"){$lien_ket_css='<link rel="stylesheet" type="text/css" href="giao_dien/xanh_la_cay/chung.css" > ';}
	if($mau_giao_dien=="cam"){$lien_ket_css='<link rel="stylesheet" type="text/css" href="giao_dien/cam/chung.css" > ';}
	if($mau_giao_dien=="hong"){$lien_ket_css='<link rel="stylesheet" type="text/css" href="giao_dien/hong/chung.css" > ';}
	if($mau_giao_dien=="nau"){$lien_ket_css='<link rel="stylesheet" type="text/css" href="giao_dien/nau/chung.css" > ';}
	if($mau_giao_dien=="tim_do"){$lien_ket_css='<link rel="stylesheet" type="text/css" href="giao_dien/tim_do/chung.css" > ';}
	if($mau_giao_dien=="do_nau"){$lien_ket_css='<link rel="stylesheet" type="text/css" href="giao_dien/do_nau/chung.css" > ';}
	if($mau_giao_dien=="tim_2"){$lien_ket_css='<link rel="stylesheet" type="text/css" href="giao_dien/tim_2/chung.css" > ';}
	if($mau_giao_dien=="xanh_2"){$lien_ket_css='<link rel="stylesheet" type="text/css" href="giao_dien/xanh_2/chung.css" > ';}
	if($mau_giao_dien=="do_hoi_dam"){$lien_ket_css='<link rel="stylesheet" type="text/css" href="giao_dien/do_hoi_dam/chung.css" > ';}
	if($mau_giao_dien=="xanh_3"){$lien_ket_css='<link rel="stylesheet" type="text/css" href="giao_dien/xanh_3/chung.css" > ';}
	if($mau_giao_dien=="tim"){$lien_ket_css='<link rel="stylesheet" type="text/css" href="giao_dien/tim/chung.css" > ';}
	if($mau_giao_dien=="nau_2"){$lien_ket_css='<link rel="stylesheet" type="text/css" href="giao_dien/nau_2/chung.css" > ';}
	if($mau_giao_dien=="do_cam"){$lien_ket_css='<link rel="stylesheet" type="text/css" href="giao_dien/do_cam/chung.css" > ';}
	
	
	xuat_bm($lien_ket_css);
	
	//echo '<link rel="stylesheet" type="text/css" href="giao_dien/thu_mau/chung.css" > '
	
	//if($mau_giao_dien=="tuy_chinh"){echo '<link rel="stylesheet" type="text/css" href="giao_dien/tuy_chinh/chung.css" > ';}

		
?>

<script type="text/javascript" src="giao_dien/chung.js"></script>

</head>

<body>

<?php 	
	
	$bo_cuc=lay_thong_so("bo_cuc");
	
	$so_12_lf=3;
	
	if($bo_cuc==2){$so_12_lf=2;}
	if($bo_cuc==3){$so_12_lf=1;}
	
?>
	<div style='position:fixed;top:80%;left:0%;display:none;background:blue;color:white;width:400px;height:100px;overflow-y:auto;font-weight:bold;' id="viet_lll" ></div>
	<center>
		<div style="width:990px;text-align:left" id="khung_lon" >
			<table width="990px" border="0">
				<tr >
					<td colspan="2" >
						<table width="990px" border="0" height="70px"  >
							<tr>
								<td width="250px" >
									<?php 
										include("cumchucnang/banner/banner.php");
									?>
								</td>
								<td align="right" >
									<?php 
										$c="";
										if(isset($_GET['tu_khoa'])){$c=trim($_GET['tu_khoa']);}
									?>
									<form>
									<input type="hidden" name="thamso" value="tim" >
									<input style="width:180px;" name="tu_khoa" value="<?php xuat_tu_khoa_bm($c); ?>" > 
									<input type="submit" value="Tìm kiếm" class="l_40" >
									</form>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				
				<tr>
					<td colspan="2" class="o_menu_ngang" >
						<?php 
							include("cumchucnang/menu_ngang/menu_ngang.php");
						?>
					</td>
				</tr>
				

				<tr>
					<td width="770px" valign="top">
						<?php 
							include("cumchucnang/bien_luan_phan_than/bien_luan_phan_than_bc2.php");
						?>
					</td>
					<td width="220px" valign="top" align="center" >
						<?php 
						
							$sxcp=lay_thong_so("sxcp");
							$m_sxcp=explode("[---]",$sxcp);
							
							$phan_thong_ke="khong";
							$phan_quang_cao="khong";
							
							
							for($i=0;$i<count($m_sxcp);$i++)
							{
								if(trim($m_sxcp[$i])!="")
								{
									if($m_sxcp[$i]=="ksp1")
									{
										include("cumchucnang/khung_san_pham/khung_1.php");
									}
									if($m_sxcp[$i]=="ksp2")
									{
										include("cumchucnang/khung_san_pham/khung_2.php");
									}
									if($m_sxcp[$i]=="ksp3")
									{
										include("cumchucnang/khung_san_pham/khung_3.php");
									}
									if($m_sxcp[$i]=="ksp4")
									{
										include("cumchucnang/khung_san_pham/khung_4.php");
									}
									if($m_sxcp[$i]=="k_html1")
									{
										include("cumchucnang/khung_html/khung_1.php");
									}
									if($m_sxcp[$i]=="k_html2")
									{
										include("cumchucnang/khung_html/khung_2.php");
									}
									if($m_sxcp[$i]=="k_html3")
									{
										include("cumchucnang/khung_html/khung_3.php");
									}
									if($m_sxcp[$i]=="k_html4")
									{
										include("cumchucnang/khung_html/khung_4.php");
									}
									if($m_sxcp[$i]=="thong_ke")
									{
										if($phan_thong_ke=="khong")
										{
											include("cumchucnang/thong_ke/thong_ke_bc2.php");
											$phan_thong_ke="co";
										}		
									}
									if($m_sxcp[$i]=="quang_cao")
									{
										if($phan_quang_cao=="khong")
										{
											include("cumchucnang/quang_cao_phai/quang_cao_phai_bc2.php");
											$phan_quang_cao="co";
										}		
									}
									//if($m_sxcp_sk[$i]=="ksp1"){}
									echo '<div class="v_c1"></div>';
								}
							}
							
						?>
					</td>
				</tr>

				<tr>
					<td colspan="2">
						<?php 
							include("cumchucnang/footer/footer.php");
						?>
					</td>
				</tr>
			</table>
			
		</div>
		
	</center>
	<?php 
		$tro_chuyen=lay_thong_so('tro_chuyen');
		if($tro_chuyen=="bat")
		{
			include("cumchucnang/tro_chuyen/khung.php");
		}
	?>
	
</body>
</html>
<?php 
	$_SESSION['ma_loi_kiem_tra_ky_danh']="";
?>
<?php ob_flush(); ?>

