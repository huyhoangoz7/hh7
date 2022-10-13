<?php 
	chong_pha_hoai();
	//echo "sssssssssssss";
	switch($_GET['thamso'])
	{
		case "sua_thong_tin_ca_nhan":
			include("cumchucnang/dang_ky_dang_nhap/sua_thong_tin_ca_nhan.php");
		break;
		case "lay_lai_mat_khau":
			include("cumchucnang/dang_ky_dang_nhap/lay_lai_mat_khau.php");
		break;
		case "tim_kiem":
			include("cumchucnang/tim_kiem/xuat.php");
		break;
		case "tim":
			include("cumchucnang/tim_kiem/xuat_2_bc2.php");
		break;
		case "dang_ky":
			include("cumchucnang/dang_ky_dang_nhap/dang_ky.php");
		break;
		case "gio_hang":
			include("cumchucnang/gio_hang/gio_hang.php");
		break;
		case "xuat":
			//echo $_GET['id'];echo "<hr>";
			include("cumchucnang/san_pham/xuat_bc2.php");
		break;
		case "chi_tiet_san_pham":
			include("cumchucnang/san_pham/chi_tiet_san_pham_bc2.php");
		break;
		case "xuat_mot_tin":
			include("cumchucnang/xuat_mot_tin/xuat_mot_tin_bc2.php");
		break;
		case "tin_tuc":
			include("cumchucnang/tin_tuc/xuat_bc2.php");
		break;
		case "chi_tiet_tin_tuc":
			include("cumchucnang/tin_tuc/chi_tiet.php");
		break;
		case "xuat_toan_bo_san_pham":
			include("cumchucnang/san_pham/xuat_toan_bo_san_pham_bc2.php");
		break;
		case "lien_he":
			include("cumchucnang/lien_he/lien_he.php");
		break;
		default:
			//echo "trang chu";
			include("cumchucnang/trang_chu/trang_chu_bc3.php");
	}
?>