<?php 
	//$title_meta="Quần áo";
	function title_meta__tham_so___xuat()
	{
		$tv="select * from menu_ngang where id='$_GET[id]'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		return $tv_2['ten'];
	}
	function title_meta__tham_so___chi_tiet_san_pham()
	{
		$tv="select * from san_pham where id='$_GET[id]'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		return $tv_2['ten'];
	}
	function title_meta__tham_so___chi_tiet_tin_tuc()
	{
		$tv="select * from tin_tuc where id='$_GET[id]'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		return $tv_2['ten'];
	}
	function title_meta__tham_so___xuat_mot_tin()
	{
		$id=get_bm('id');
		$tv="select * from menu_ngang where id='$id'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		return $tv_2['ten'];
	}
	
	function lay_noi_dung_mo_ta_dm()
	{
		$tv="select * from menu_ngang where id='$_GET[id]'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		return trim($tv_2['noi_dung_mo_ta']);
	}
	function lay_noi_dung_ctsp()
	{
		$tv="select * from san_pham where id='$_GET[id]'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		return $tv_2['noi_dung'];
	}
	function lay_noi_dung_cttt()
	{
		$tv="select * from tin_tuc where id='$_GET[id]'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		return $tv_2['noi_dung'];
	}
	function lay_noi_dung_bv1t()
	{
		$id=$_GET['id'];
		$tv="select * from menu_ngang where id='$id'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		return $tv_2['noi_dung'];
	}
	
	switch($_GET['thamso'])
	{
		case "sua_thong_tin_ca_nhan":
			$title_meta="Sữa thông tin cá nhân";
		break;
		case "lay_lai_mat_khau":
			$title_meta="Lấy lại mật khẩu";
		break;
		case "thoat":
			$title_meta="Thoát";
		break;
		case "tim_kiem":
			$title_meta=$_GET['tu_khoa'];
		break;
		case "gio_hang":
			$title_meta="Giỏ hàng";
		break;
		case "chi_tiet_tin_tuc":
			$title_meta=title_meta__tham_so___chi_tiet_tin_tuc();
		break;
		case "lien_he":
			$title_meta="Liên hệ";
		break;
		case "xuat_tt":
			$title_meta=title_meta__tham_so___xuat();
		break;
		case "dang_ky":
			$title_meta="Đăng ký";
		break;
		case "xuat_toan_bo_san_pham":
			$title_meta="Sản phẩm";
		break;
		case "xuat_mot_tin_2":
			$title_meta=title_meta__tham_so___xuat_mot_tin();
		break;
		case "chi_tiet_san_pham":
			$title_meta=title_meta__tham_so___chi_tiet_san_pham();
		break;
		case "xuat_sp":
			$title_meta=title_meta__tham_so___xuat();
		break;
		default:
		
			$title_meta=lay_thong_so('tieu_de_web');
			//$title_meta="Quần áo";
	}
	
	$title_meta=trim($title_meta);
	
	$noi_dung_mo_ta=$title_meta;
	
	switch($_GET['thamso'])
	{
		case "xuat_sp":
			$ndmt=lay_noi_dung_mo_ta_dm();
			if(trim($ndmt)!="")
			{
				$noi_dung_mo_ta=$ndmt;
			}
		break;
		case "chi_tiet_san_pham":
			$nd=lay_noi_dung_ctsp();
			$nd=trim(strip_tags($nd));
			if($nd!="")
			{
				$m=explode(" ",$nd);
				$ndm="";
				for($i=0;$i<=40;$i++)
				{
					$c=trim($m[$i]);
					if($c!="")
					{						
						$ndm=$ndm." ".$c; 
					}
				}
				$noi_dung_mo_ta=trim($ndm);
			}
		break;
		case "xuat_tt":
			$ndmt=lay_noi_dung_mo_ta_dm();
			if(trim($ndmt)!="")
			{
				$noi_dung_mo_ta=$ndmt;
			}
		break;
		case "chi_tiet_tin_tuc":
			$nd=lay_noi_dung_cttt();
			$nd=trim(strip_tags($nd));
			if($nd!="")
			{
				$m=explode(" ",$nd);
				$ndm="";
				for($i=0;$i<=40;$i++)
				{
					$c=trim($m[$i]);
					if($c!="")
					{						
						$ndm=$ndm." ".$c; 
					}
				}
				$noi_dung_mo_ta=trim($ndm);
			}
		break;
		case "xuat_mot_tin_2":
			$nd=lay_noi_dung_bv1t();
			$nd=trim(strip_tags($nd));
			if($nd!="")
			{
				$m=explode(" ",$nd);
				$ndm="";
				for($i=0;$i<=40;$i++)
				{
					$c=trim($m[$i]);
					if($c!="")
					{						
						$ndm=$ndm." ".$c; 
					}
				}
				$noi_dung_mo_ta=trim($ndm);
			}
		break;
		default:
			$noi_dung_mo_ta=lay_thong_so('mo_ta_web');
	}
	
	$noi_dung_mo_ta=trim($noi_dung_mo_ta);
	
	$noi_dung_mo_ta=str_replace("\n","",$noi_dung_mo_ta);
	$noi_dung_mo_ta=str_replace("\r","",$noi_dung_mo_ta);
	$noi_dung_mo_ta=str_replace("\t","",$noi_dung_mo_ta);
	
?>