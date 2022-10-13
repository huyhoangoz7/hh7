<?php 
	chong_pha_hoai();
?>
<?php 
	$ten_hinh=$_FILES['hinh_anh']['name'];
	$noi_dung=$_POST['noi_dung'];
	$noi_dung=str_replace("'","",$noi_dung);
	$ten_hinh=$_FILES["hinh_anh"]['name'];
	kiem_tra_anh_upload__ddd("hinh_anh");
	
	$loai_gia=$_POST['loai_gia'];
	$noi_dung_ngan=$_POST['noi_dung_ngan'];
	
	$khung_san_pham=$_POST['khung_san_pham'];
	if($khung_san_pham!="khong")
	{
		if($khung_san_pham==1){$c2=",`ksp1`='co',`ksp2`='',`ksp3`='',`ksp4`=''";}
		if($khung_san_pham==2){$c2=",`ksp1`='',`ksp2`='co',`ksp3`='',`ksp4`=''";}
		if($khung_san_pham==3){$c2=",`ksp1`='',`ksp2`='',`ksp3`='co',`ksp4`=''";}
		if($khung_san_pham==4){$c2=",`ksp1`='',`ksp2`='',`ksp3`='',`ksp4`='co'";}

	}
	else 
	{
		$c2=",`ksp1`='',`ksp2`='',`ksp3`='',`ksp4`=''";
	}

		if($ten_hinh!="")
		{		
			if(trim($_POST['hidden_hinh_anh'])!="")
			{
				$duong_dan_anh_cu="../hinhanh_flash/san_pham/".$_POST['hidden_hinh_anh'];
				unlink($duong_dan_anh_cu);
			}
			$duong_dan_upload="../hinhanh_flash/san_pham/".$ten_hinh;
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
		
		$bat_tat_binh_luan=post_bm("bat_tat_binh_luan");
		
		$chuoi="
			UPDATE `san_pham` SET `ten` = '$_POST[ten]',
			`hinh_anh` = '$ten_hinh__ccc',
			`gia_ban` = '$_POST[gia]',
			`noi_dung` = '$noi_dung',
			`trang_chu`='$_POST[trang_chu]',
			`loai_gia`='$loai_gia',
			`noi_dung_ngan`='$noi_dung_ngan',
			`bat_tat_binh_luan`='$bat_tat_binh_luan'			
			$c2 	
			where id='$_GET[id]'
		";
		mysql_query($chuoi);
		//echo $chuoi."<hr>";exit();

?>