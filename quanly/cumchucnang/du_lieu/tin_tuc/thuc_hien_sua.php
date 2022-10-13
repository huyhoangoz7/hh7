<?php 
	chong_pha_hoai();
?>
<?php 
	$noi_dung=$_POST['noi_dung'];
	$noi_dung=str_replace("'","",$noi_dung);
	$ten_hinh=$_FILES["hinh_anh"]['name'];
	
	$bat_tat_binh_luan=post_bm("bat_tat_binh_luan");
	
	kiem_tra_anh_upload__ddd("hinh_anh");
	if($_POST['ten']!="")
	{
		if($ten_hinh!="")
		{		
			if(trim($_POST['hidden_hinh_anh'])!="")
			{
				$duong_dan_anh_cu="../hinhanh_flash/tin_tuc/".$_POST['hidden_hinh_anh'];
				unlink($duong_dan_anh_cu);
			}
			$duong_dan_upload="../hinhanh_flash/tin_tuc/".$ten_hinh;
			move_uploaded_file($_FILES['hinh_anh']['tmp_name'],$duong_dan_upload);
		}
		if($ten_hinh!="")
		{
			$ten_hinh__ccc=$ten_hinh;
		}
		else 
		{
			$ten_hinh__ccc=$_POST['hidden_hinh_anh'];
		}
		$chuoi="
			UPDATE `tin_tuc` SET `ten` = '$_POST[ten]',
			`hinh_anh` = '$ten_hinh__ccc',
			`noi_dung` = '$noi_dung',
			`bat_tat_binh_luan`	='$bat_tat_binh_luan'
			where id='$_GET[id]'
		";
		mysql_query($chuoi);
		//echo $chuoi."<hr>";exit();
	}
	else 
	{
		thongbao("Không được bỏ trống tên sản phẩm");
	}
?>