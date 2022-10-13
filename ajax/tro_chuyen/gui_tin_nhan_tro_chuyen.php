<?php 
	session_start();
	ini_set('display_errors', 0);
	$bien_bao_mat="co";
	include("../../ketnoi.php");
	
	function lay_thong_so_ll_l($ma)
	{
		$tv="select * from thong_so where ma='$ma' ";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		return $tv_2['gia_tri'];
	}
	
	
		
	
	$tro_chuyen=lay_thong_so_ll_l('tro_chuyen');
	if($tro_chuyen=="bat")
	{
		include("../../bao_mat/ham.php");	
		include("../../cumchucnang/ham/ham.php");
		
		$session_nguoi_tro_chuyen=lay_session_bm("nguoi_tro_chuyen");
		$nguoi_tro_chuyen="nlw ".$session_nguoi_tro_chuyen;
	?>
	<?php 
		$nd=$_GET['nd'];
		
		$nd=trim($nd);
		
		$dd_nd=strlen($nd);
		
		$nd=strip_tags($nd);
		
		$nd=str_replace('\n',"",$nd);
		$nd=str_replace('\r',"",$nd);
		$nd=str_replace('\t',"",$nd);
		
		$nd=trim($nd);
		
		$nd=str_replace("thanh_vien_lllll","",$nd);
		
		$nd=str_replace("'","",$nd);
		$nd=str_replace('"',"",$nd);
		$nd=str_replace("<","",$nd);
		$nd=str_replace(">","",$nd);
		$nd=str_replace('\\',"",$nd);
		$nd=str_replace('loi-ll1293',"",$nd);
		
		$chuoi_khong_hop_le="~,`,#,$,%,^,&,*,(,),=,|,\,{,[,],},;,',".'"'.",<,>,/,*,/";

	
		$mang_phan_tu_khong_hop_le=explode(",",$chuoi_khong_hop_le);
		
		$so=count($mang_phan_tu_khong_hop_le);
		
		for($i=0;$i<$so;$i++)
		{
			$ky_tu=trim($mang_phan_tu_khong_hop_le[$i]);
			$nd=str_replace($ky_tu,"",$nd);
		}
		
		$tg=time();
		
		if(trim($nd)!="")
		{
			if($dd_nd<201)
			{
				$thoi_diem_nhan_tin_gan_day=lay_thong_so('thoi_diem_nhan_tin_gan_day');
		
				$thoi_gian=time();
				
				$thoi_gian_2=$thoi_gian-2; // 2 giay truoc do
				
				if($thoi_diem_nhan_tin_gan_day<$thoi_gian_2)
				{
					
				
				
					$nd='<span class="l_31" >'.$nguoi_tro_chuyen." : </span>".$nd; 
					
					$tv="
						INSERT INTO `tro_chuyen_lllll` (
						`id` ,
						`noi_dung` ,
						`nguoi_tro_chuyen`,
						`thoi_gian`
						)
						VALUES (
						NULL , '$nd', '','$tg'
						);
					";
					//echo $tv."<hr>"; llll
					truy_van_bm($tv);
					
					sua_thong_so_2($thoi_gian,'thoi_diem_nhan_tin_gan_day');
					
				}
			}
		}
		
		$so_tin_nhan_toi_da=lay_thong_so('so_tin_nhan_toi_da');
		
		$tv="select count(*) from tro_chuyen_lllll ";
		$tv_1=truy_van_bm($tv);
		$tv_2=mysql_fetch_array($tv_1);
		
		if($tv_2[0]>$so_tin_nhan_toi_da)
		{
			$truy_van="select id from tro_chuyen_lllll order by id limit 0,3 ";
			$truy_van_1=truy_van_bm($truy_van);
			$i=1;
			while($truy_van_2=mysql_fetch_array($truy_van_1))
			{
				
				$id=$truy_van_2['id'];
				
				$xoa="DELETE FROM `tro_chuyen_lllll` WHERE `id` = '$id' ";
				
				truy_van_bm($xoa);
				
				$i++;
				if($i>5){break;}
				
			}
		}
		
		
		
	
	}
	
?>