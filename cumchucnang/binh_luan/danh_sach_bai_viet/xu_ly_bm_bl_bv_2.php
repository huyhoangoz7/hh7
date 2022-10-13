<?php 
	if(!isset($bien_bao_mat)){exit();}
	$nd_ckt=$_SERVER['PHP_SELF'];$m_ckt_lllll_l_ll_999=explode("cumchucnang",$nd_ckt);
	$so=count($m_ckt_lllll_l_ll_999);if($so>1){exit();}
?>
<html>
<head>
	<meta charset="utf-8" >
	<title>Web</title>
</head>
<body>
<?php 

function dem_so_binh_luan_bai_viet_2()
{
	$id_bv=get_bm("id");
	$r_tv="select count(*) from binh_luan_lllll where loai_menu='danh_sach_bai_viet' and dia_chi_so='$id_bv' ";
	$r_tv_1=mysql_query($r_tv);
	$r_tv_2=mysql_fetch_row($r_tv_1);
	return $r_tv_2[0];
}


$id_bv=get_bm("id");

$tv="select * from tin_tuc where id='$id_bv'";
$tv_1=mysql_query($tv);
$tv_2=mysql_fetch_array($tv_1);

$bat_tat_binh_luan_btt=$tv_2['bat_tat_binh_luan'];

if($chuc_nang_binh_luan_danh_sach_bai_viet=="bat" and $bat_tat_binh_luan_btt=="bat" )
{
	//xuat_bm("1 <hr>");
	$noi_dung_binh_luan=post_bm("noi_dung");
	$id_bv=get_bm("id");
	$trang=get_bm("trang");
	if($trang=="sai"){$trang=1;}
	$so_lan_xoa=post_bm("so_lan_xoa");
	
	$so_lan_xoa=strip_tags($so_lan_xoa);
	
	$so_lan_xoa=$bao_mat->thay_the_noi_dung_binh_luan($so_lan_xoa);
	
	$so_lan_xoa=str_replace("<","",$so_lan_xoa);
	$so_lan_xoa=str_replace(">","",$so_lan_xoa);
	$so_lan_xoa=str_replace("'","",$so_lan_xoa);
	$so_lan_xoa=str_replace('"',"",$so_lan_xoa);
	
	$kiem=$bao_mat->kiem_tra_so_post_get($so_lan_xoa);
	
	if($kiem=="khong_hop_le")
	{
		$so_lan_xoa=1;	
	}
	
	if($so_lan_xoa>216001)
	{
		$so_lan_xoa=1;
	}
	
	$strlen_so_lan_xoa=strlen($so_lan_xoa);
	if($strlen_so_lan_xoa>10)
	{
		$so_lan_xoa=1;
	}
	
	$binh_luan_hop_le=$bao_mat->kiem_tra_binh_luan($noi_dung_binh_luan);
	
	$thoi_gian_them_binh_luan_san_pham=lay_thong_so("thoi_gian_them_binh_luan_san_pham");
	$time=time();
	
	$so=$time-$thoi_gian_them_binh_luan_san_pham;

	if($binh_luan_hop_le=="hop_le")
	{
		
		
		
		if($so>4)
		{
			$tong_so_binh_luan=tong_so_binh_luan();
			$so_binh_luan_toi_da=lay_thong_so('so_binh_luan_toi_da');
			$so_binh_luan_toi_da_trong_ngay=lay_thong_so('so_binh_luan_toi_da_trong_ngay');
			$so_binh_luan_trong_ngay=lay_thong_so('so_binh_luan_trong_ngay');
			
			$ngay_hien_tai=date("j");
			$ngay_binh_luan_moi=lay_thong_so('ngay_binh_luan_moi');
			
			$xoa_binh_luan_khi_dat_toi_gioi_han=lay_thong_so("xoa_binh_luan_khi_dat_toi_gioi_han");
					
			if($xoa_binh_luan_khi_dat_toi_gioi_han=="co")
			{
				if($tong_so_binh_luan>$so_binh_luan_toi_da)
				{
					$tv="select * from binh_luan_lllll order by id desc limit 0,3 ";
					$tv_1=truy_van_bm($tv);
					$i=1;
					while($tv_2=mysql_fetch_array($tv_1))
					{
						$id=$tv_2['id'];
						$xoa="DELETE FROM `binh_luan_lllll` WHERE `id` = '$id' ";
						truy_van_bm($xoa);
						$i++;
						if($i==5)
						{
							break;
						}
					}
				}
			}
			
			if($tong_so_binh_luan<$so_binh_luan_toi_da)
			{
				if($so_binh_luan_trong_ngay<$so_binh_luan_toi_da_trong_ngay)
				{
		
					$noi_dung_binh_luan=strip_tags($noi_dung_binh_luan);
					
					$noi_dung_binh_luan=$bao_mat->thay_the_noi_dung_binh_luan($noi_dung_binh_luan);	
					
					$noi_dung_binh_luan=nl2br($noi_dung_binh_luan);
					
					$tv="
						INSERT INTO `binh_luan_lllll` (`id`, `noi_dung`, `loai_menu`, `dia_chi_so`, `so_lan_xoa`,`ngay_binh_luan`) 
						VALUES (NULL, '$noi_dung_binh_luan', 'danh_sach_bai_viet', '$id_bv', '$so_lan_xoa','$ngay_hien_tai');
					";
					
					truy_van_bm($tv);
					
					$so=dem_so_binh_luan_bai_viet_2();
					
					$st=ceil($so/10);
					
					
					
					sua_thong_so_l($time,"thoi_gian_them_binh_luan_san_pham");
					
					
					
					if($ngay_hien_tai==$ngay_binh_luan_moi)
					{
						$so_l=$so_binh_luan_trong_ngay+1;
						sua_thong_so_2($so_l,'so_binh_luan_trong_ngay');
					}
					else 
					{
						sua_thong_so_2(0,'so_binh_luan_trong_ngay');
					}
					
					sua_thong_so_2($ngay_hien_tai,'ngay_binh_luan_moi');
					
					
					
					$cach_hien_thi_binh_luan=lay_thong_so('cach_hien_thi_binh_luan');
					
					$duong_dan="?thamso=chi_tiet_tin_tuc&id=".$id_bv."&trang=".$st;
					
					if($cach_hien_thi_binh_luan=="moi_truoc_cu_sau")
					{
						$duong_dan="?thamso=chi_tiet_tin_tuc&id=".$id_bv;
					}
					
					chuyen_trang($duong_dan);
				
				}
				else 
				{
					
					$duong_dan="?thamso=chi_tiet_tin_tuc&id=".$id_bv."&trang=".$trang;
			
					thong_bao_a11("<div style='width:660px' >Có lỗi xảy ra . Web được thiết lập để gửi tối đa ".$so_binh_luan_toi_da_trong_ngay." bình luận trong một ngày . Nếu bạn là người quản lý web thì có thể thay đổi số bình luận tối đa trong ngày trong trang quản lý</div>","Về trang chi tiết bài viết",$duong_dan);
			
				}
				
				//trangtruoc();
			}
			else 
			{

				$duong_dan="?thamso=chi_tiet_tin_tuc&id=".$id_bv."&trang=".$trang;
			
				thong_bao_a11("<div style='width:660px' >Có lỗi xảy ra . Web được thiết lập để gửi tối đa ".$so_binh_luan_toi_da." bình luận . Nếu bạn là người quản lý web thì có thể thay đổi số bình luận tối đa trong trang quản lý</div>","Về trang chi tiết bài viết",$duong_dan);
			
			
			}
		
		}
		else 
		{
			$duong_dan="?thamso=chi_tiet_tin_tuc&id=".$id_bv."&trang=".$trang;
			
			thong_bao_a11("<div style='width:660px' >Có lỗi xảy ra . Web được lập trình 4 giây mới thêm được bình luận , có thể ai đó đã thêm bình luận nào đó vào khoảng 4 giây gần đây </div>","Về trang chi tiết bài viết",$duong_dan);
			
		}

	}

	
	
	
}
?>
</body>
</html>
<?php 
	exit();
?>