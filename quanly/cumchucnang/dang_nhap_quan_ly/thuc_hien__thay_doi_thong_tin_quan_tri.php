<?php 
	chong_pha_hoai();
	//thongbao("vao day");
?>
<?php 

	$mat_khau=post_bm('mat_khau');
	
	$mat_khau=trim($mat_khau);
	
	$do_dai_mat_khau=strlen($mat_khau);

	
	if($do_dai_mat_khau>5)
	{
		if($_POST['mat_khau']==$_POST['nl_mk'])
		{
			$dd_ttql="../csdl_php/thong_tin_quan_ly/thong_tin_quan_ly.php";
			include($dd_ttql);

			$ky_danh_cu=$csdl['ky_danh'];
			$mat_khau_cu=$csdl['mat_khau'];
			if($_POST['ky_danh']=="khong_thay_doi")
			{
				$ky_danh_thay_doi=$ky_danh_cu;
			}
			else 
			{
				$ky_danh_thay_doi=ma_hoa_ttql($_POST['ky_danh']);
			}
			if($_POST['mat_khau']=="khong_thay_doi")
			{
				$mat_khau_thay_doi=$mat_khau_cu;
			}
			else 
			{
				$mat_khau_thay_doi=ma_hoa_ttql($_POST['mat_khau']);
			}

			$c="
				<?php 
					if(!isset($"."bien_bao_mat_csdl)){exit();}
				?>
				<?php 
					"."$"."csdl['ky_danh']='$ky_danh_thay_doi';
					"."$"."csdl['mat_khau']='$mat_khau_thay_doi';
				?>
			";
			file_put_contents($dd_ttql,$c);
			trangtruoc();
			$_SESSION['ky_danh__hhh']=$ky_danh_thay_doi;
			$_SESSION['mat_khau__hhh']=$mat_khau_thay_doi;
		}
		else 
		{
			thong_bao_a2("Phần mật khẩu và phần nhập lại mật khẩu không đúng");
		}
	}
	else 
	{
		thong_bao_a2("Mật khẩu phải lớn hơn 5 ký tự");
	}
?>