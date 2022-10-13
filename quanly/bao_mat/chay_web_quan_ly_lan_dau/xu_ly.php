<?php 
	if(!isset($bien_bao_mat)){exit();}
	if($bien_bao_mat!="co"){exit();}
	//chong_pha_hoai();
?>
<?php 
	$chuoi_ma_hoa_2="q,w,e,r,t,y,u,i,o,p,a,s,d,f,g,h,j,k,l,z,x,c,v,b,n,m,";
	$chuoi_ma_hoa_2=$chuoi_ma_hoa_2."0,1,2,3,4,5,6,7,8,9,";
	$chuoi_ma_hoa_2=$chuoi_ma_hoa_2."Q,W,E,R,T,Y,U,I,O,P,A,S,D,F,G,H,J,K,L,Z,X,C,V,B,N,M,";
	$chuoi_ma_hoa_2=$chuoi_ma_hoa_2."!,@,#,%,^,&,*,(,),=,+,-,_,[,],{,},:,;,?,`,~,1,2,3,4";
	
	$mang_chuoi_ma_hoa_2=explode(",",$chuoi_ma_hoa_2);
	
	$chuoi_ma_hoa_3="";
	
	$so=count($mang_chuoi_ma_hoa_2);
	$so_2=$so-4;
	
	for($i=0;$i<100;$i++)
	{
		$so_ngau_nhien=mt_rand(0,$so_2);
		$ky_tu_ngau_nhien=$mang_chuoi_ma_hoa_2[$so_ngau_nhien];
		$chuoi_ma_hoa_3=$chuoi_ma_hoa_3.$ky_tu_ngau_nhien;
		
		
	}
	
	$chuoi_ma_hoa_3=$chuoi_ma_hoa_3."_";
	
	$noi_dung_sua_tap_tin_chuoi_ma_hoa='
<?php 
	if(!isset($bien_bao_mat)){exit();}
	if($bien_bao_mat!="co"){exit();}
?>
<?php 
	$chuoi_ma_hoa="'.$chuoi_ma_hoa_3.'";
?>
		';
		
		file_put_contents("bao_mat/chuoi_ma_hoa.php",$noi_dung_sua_tap_tin_chuoi_ma_hoa);
		
		$dd_ttql="../csdl_php/thong_tin_quan_ly/thong_tin_quan_ly.php";
		
		$ky_danh_cld=ma_hoa_ttql("quanly");
		$mat_khau_cld=ma_hoa_ttql("quanly");
		
		$thong_tin_quan_ly="
			<?php 
				if(!isset("."$"."bien_bao_mat_csdl)){exit();}
			?>
			<?php 
				"."$"."csdl['ky_danh']='$ky_danh_cld';
				"."$"."csdl['mat_khau']='$mat_khau_cld';
			?>
		";
		file_put_contents($dd_ttql,$thong_tin_quan_ly);
		
		
?>