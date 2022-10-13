<?php 
	session_start();
	$dd_so_tcmg="../../csdl_php/tro_chuyen/so_tcmg.php";
	$dd_tg_tcmg="../../csdl_php/tro_chuyen/tg_tcmg.php";
	include($dd_so_tcmg);
	include($dd_tg_tcmg);
	if($so_tcmg>10)
	{		
		echo "loi-ll1293";
		$nd='<?php $so_tcmg=0; ?>';
		file_put_contents($dd_so_tcmg,$nd);
		exit();
	}
	else 
	{
		$tg=time();
		if($tg_tcmg==$tg)
		{
			$so_tcmg_2=$so_tcmg+1;
			$nd='<?php $so_tcmg='.$so_tcmg_2.'; ?>';
			//echo $so_tcmg_2;
		}
		else 
		{
			$nd='<?php $so_tcmg=0; ?>';
		}
		file_put_contents($dd_so_tcmg,$nd);
	}
	
	$tg_tcmg=time();
	$nd='<?php $tg_tcmg='.$tg_tcmg.'; ?>';
	file_put_contents($dd_tg_tcmg,$nd);
	
	ini_set('display_errors', 0);
	$bien_bao_mat="co";
	include("../../ketnoi.php");
	

	
	function lay_thong_so_ll_ll($ma)
	{
		$tv="select * from thong_so where ma='$ma' ";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		return $tv_2['gia_tri'];
	}

	
?>
<?php 
	$tro_chuyen=lay_thong_so_ll_ll('tro_chuyen');
	if($tro_chuyen=="bat")
	{
		
		include("../../bao_mat/ham.php");	

		include("../../cumchucnang/ham/ham.php");	
		
		$id_tro_chuyen_lon_nhat=lay_session_bm("id_tro_chuyen_lon_nhat");
		
		//$tv="select max(id) from tro_chuyen_lllll ";
		//$tv_1=truy_van_bm($tv);
		//$tv_2=mysql_fetch_array($tv_1);
		
		//$id_tro_chuyen_lon_nhat
		//echo $id_tro_chuyen_lon_nhat." - <hr>";
		
		$time=time();
		
		$thoi_gian_2=$time-1.2;
		
		//$tv="select * from tro_chuyen_lllll where id>$id_tro_chuyen_lon_nhat order by id limit 0,1 ";
		$tv="select * from tro_chuyen_lllll where thoi_gian>$thoi_gian_2 order by id limit 0,1 ";
		//xuat_bm($tv."<hr>");
		$tv_1=truy_van_bm($tv);
		
		$so=mysql_num_rows($tv_1);
		
		
		if($so!=0)
		{
			$tv_2=mysql_fetch_array($tv_1);
			
			$id=$tv_2['id'];
		

			$hien_thi=trim($tv_2['hien_thi']);
		
		

			//xuat_bm($tv_2['noi_dung']."<hr>");

			xuat_bm("<div style='padding:16px 0px;width:200px;border-top:0px solid red;border-left:0px solid red;border-right:0px solid red' class='ndk___456_bc2' >".$tv_2['noi_dung']."</div>");


			//$sua="UPDATE `tro_chuyen_lllll` SET `hien_thi` = 'roi' WHERE `id` ='$id'  ;";	
			//truy_van_bm($sua);

			
			
			tao_session_bm("id_tro_chuyen_lon_nhat",$tv_2['id']);
		}
		
		
		
		
		$thoi_gian=time();
		
		
		
	}


	
?>