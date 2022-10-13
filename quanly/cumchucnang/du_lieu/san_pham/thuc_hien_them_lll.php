<?php 
	chong_pha_hoai();
?>
<?php 
	$ten_hinh=$_FILES['hinh_anh']['name'];
	$m_tv="select max(id) from san_pham";
	$m_tv_1=mysql_query($m_tv);
	$m_tv_2=mysql_fetch_row($m_tv_1);
	$max__id_cong_1=$m_tv_2[0]+1;

	$m_tv="select max(sap_xep_trang_chu) from san_pham";
	$m_tv_1=mysql_query($m_tv);
	$m_tv_2=mysql_fetch_row($m_tv_1);
	$max__sxtt=$m_tv_2[0]+1;
	
	kiem_tra_anh_upload__ddd("hinh_anh");
	
	$khung_san_pham=$_POST['khung_san_pham'];
	if($khung_san_pham!="khong")
	{
		$ten_ksp=",`ksp".$khung_san_pham."`";
		$gt_ksp=",'co'";
	}
	
	$noi_dung=$_POST['noi_dung'];
	$loai_gia=$_POST['loai_gia'];
	$noi_dung_ngan=$_POST['noi_dung_ngan'];
	
	$m=explode("/du_lieu_kst_lll/hinh_anh/",$noi_dung);
	
	$l=0;
	for($i=1;$i<=count($m);$i++)
	{
		$mang_lll=explode('"',$m[$i]);
		$mang_anh[$j]=$mang_lll[0];
		$l++
	}
	
	$chuoi_hapnd="";
	
	$so=count($mang_anh);
	$so_l=$so-1;
	
	for($i=0;$i<count($mang_anh);$i++)
	{
		if($i!=$so_l)
		{
			$chuoi_hapnd=$chuoi_hapnd.$mang_anh[$i]."[|||]";
		}
		else 
		{
			$chuoi_hapnd=$chuoi_hapnd.$mang_anh[$i];
		}
	}
	
	$m=explode("/du_lieu_kst_lll/hinh_anh/",$noi_dung_ngan);
	
	$l=0;
	for($i=1;$i<=count($m);$i++)
	{
		$mang_lll=explode('"',$m[$i]);
		$mang_anh_2[$j]=$mang_lll[0];
		$l++
	}
	
	
	$so=count($mang_anh_2);
	$so_l=$so-1;
	
	for($i=0;$i<count($mang_anh_2);$i++)
	{
		if($i!=$so_l)
		{
			$chuoi_hapnd=$chuoi_hapnd.$mang_anh_2[$i]."[|||]";
		}
		else 
		{
			$chuoi_hapnd=$chuoi_hapnd.$mang_anh_2[$i];
		}
	}
	
	
	
	
	$duong_dan_upload="../hinhanh_flash/san_pham/".$ten_hinh;
	move_uploaded_file($_FILES['hinh_anh']['tmp_name'],$duong_dan_upload);
	
	$chuoi="
		INSERT INTO `san_pham` (
		`id` ,
		`ten` ,
		`hinh_anh` ,
		`gia_ban` ,
		`noi_dung` ,
		`thuoc_menu`,
		`trang_chu`,
		`sap_xep_trang_chu`,
		`loai_gia`,
		`noi_dung_ngan`,
		`loai`,
		`sx_ksp1`,`sx_ksp2`,`sx_ksp3`,`sx_ksp4`,
		`hinh_anh_pnd`
		$ten_ksp
		)
		VALUES (
		NULL , 
		'$_POST[ten]', 
		'$ten_hinh', 
		'$_POST[gia]', 
		'$_POST[noi_dung]', 
		'$_POST[cap_do]',
		'$_POST[trang_chu]',
		'$max__sxtt',
		'$loai_gia',
		'$noi_dung_ngan',
		'menu_ngang',
		'$max__id_cong_1','$max__id_cong_1','$max__id_cong_1','$max__id_cong_1',
		'$chuoi_hapnd'
		$gt_ksp		
		);
	";
	mysql_query($chuoi);
	$_SESSION[$ten_danh_dau__kkk."cap_do___kkk"]=$_POST['cap_do'];
	$_SESSION['loai_gia']=$loai_gia;
	$_SESSION['khung_san_pham']=$khung_san_pham;
	
	
	$tv="select max(id) from san_pham ";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	
	$thuoc_san_pham=$tv_2[0];
	
	
	$l=1;
	
	if(count($mang_anh)>1)
	{
		for($i=0;$i<count($mang_anh);$i++)
		{
			if($l<100)
			{
				$ten_anh=$mang_anh[$i];
				$c="UPDATE `hinh_anh_knl` SET `thuoc_san_pham` = '$thuoc_san_pham' WHERE `ten` ='$ten_anh' ";
				mysql_query($c);
				$l++;
			}
		}
	}
	
	$l=1;
	
	if(count($mang_anh_2)>1)
	{
		for($i=0;$i<count($mang_anh_2);$i++)
		{
			if($l<100)
			{	
				$ten_anh=$mang_anh_2[$i];
				$c="UPDATE `hinh_anh_knl` SET `thuoc_san_pham` = '$thuoc_san_pham' WHERE `ten` ='$ten_anh' ";
				mysql_query($c);
				$l++;
			}
		}
	}
	
	
?>