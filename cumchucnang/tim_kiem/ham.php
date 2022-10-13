<?php 
	chong_pha_hoai();
?>
<?php

	function truy_van_1_tu($mang_tk)
	{
		$tu_1=$mang_tk[0];
		$tv="select * from san_pham where ten like '%$tu_1%' order by id desc ";
		return $tv;
	}
	function truy_van_2_tu($mang_tk)
	{
		$tu_1=$mang_tk[0];
		$tu_2=$mang_tk[1];
		$hai_tu=$tu_1." ".$tu_2;
		$tv="
			( select * from san_pham where ten like '%$hai_tu%' order by id desc  limit 0,100 ) union 
			( select * from san_pham where ten like '%$tu_1%' order by id desc  limit 0,100 ) union 
			( select * from san_pham where ten like '%$tu_2%' order by id desc  limit 0,100 ) 
		
		";
		return $tv;
	}
	function truy_van_3_tu($mang_tk)
	{
		$tu_1=$mang_tk[0];
		$tu_2=$mang_tk[1];
		$tu_3=$mang_tk[2];
		$hai_tu_dau=$tu_1." ".$tu_2;
		$hai_tu_cuoi=$tu_2." ".$tu_3;
		$ba_tu=$tu_1." ".$tu_2." ".$tu_3;
		$tv="
			( select * from san_pham where ten like '%$ba_tu%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$hai_tu_dau%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$hai_tu_cuoi%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$tu_1%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$tu_2%' limit 0,100 ) union
			( select * from san_pham where ten like '%$tu_3%' limit 0,100 ) 
		
		";
		return $tv;
	}
	function truy_van_4_tu($mang_tk)
	{
		$tu_1					=	$mang_tk[0];
		$tu_2					=	$mang_tk[1];
		$tu_3					=	$mang_tk[2];
		$tu_4					=	$mang_tk[3];
		$hai_tu_dau				=	$tu_1." ".$tu_2;
		$hai_tu_giua			=	$tu_2." ".$tu_3;
		$hai_tu_cuoi			=	$tu_3." ".$tu_4;
		$ba_tu_dau				=	$tu_1." ".$tu_2." ".$tu_3;
		$ba_tu_cuoi				=	$tu_2." ".$tu_3." ".$tu_4;
		$bon_tu					=	$tu_1." ".$tu_2." ".$tu_3." ".$tu_4;
		$tv="
			( select * from san_pham where ten like '%$bon_tu%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$ba_tu_dau%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$ba_tu_cuoi%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$hai_tu_dau%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$hai_tu_giua%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$hai_tu_cuoi%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$tu_1%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$tu_2%' limit 0,100 ) union
			( select * from san_pham where ten like '%$tu_3%' limit 0,100 ) union
			( select * from san_pham where ten like '%$tu_4%' limit 0,100 ) 
		
		";
		return $tv;
	}
	
	function truy_van_5_tu($mang_tk)
	{
		$tu_1					=	$mang_tk[0];
		$tu_2					=	$mang_tk[1];
		$tu_3					=	$mang_tk[2];
		$tu_4					=	$mang_tk[3];
		$tu_5					=	$mang_tk[4];
		$hai_tu_dau				=	$tu_1." ".$tu_2;
		$hai_tu_giua			=	$tu_2." ".$tu_3;
		$hai_tu_giua_2			=	$tu_3." ".$tu_4;
		$hai_tu_cuoi			=	$tu_4." ".$tu_5;
		$ba_tu_dau				=	$tu_1." ".$tu_2." ".$tu_3;
		$ba_tu_giua				=	$tu_2." ".$tu_3." ".$tu_4;
		$ba_tu_cuoi				=	$tu_3." ".$tu_4." ".$tu_5;
		$bon_tu					=	$tu_1." ".$tu_2." ".$tu_3." ".$tu_4;
		$nam_tu					=	$tu_1." ".$tu_2." ".$tu_3." ".$tu_4." ".$tu_5;
		$tv="
			( select * from san_pham where ten like '%$nam_tu%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$bon_tu%' limit 0,100 ) union 

			( select * from san_pham where ten like '%$ba_tu_dau%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$ba_tu_giua%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$ba_tu_cuoi%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$hai_tu_dau%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$hai_tu_giua%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$hai_tu_giua_2%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$hai_tu_cuoi%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$tu_1%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$tu_2%' limit 0,100 ) union
			( select * from san_pham where ten like '%$tu_3%' limit 0,100 ) union
			( select * from san_pham where ten like '%$tu_4%' limit 0,100 ) union
			( select * from san_pham where ten like '%$tu_5%' limit 0,100 ) 
		
		";
		return $tv;
	}
	
	function truy_van_6_tu($mang_tk)
	{
		$tu_1					=	$mang_tk[0];
		$tu_2					=	$mang_tk[1];
		$tu_3					=	$mang_tk[2];
		$tu_4					=	$mang_tk[3];
		$tu_5					=	$mang_tk[4];
		$tu_6					=	$mang_tk[5];
		$hai_tu_dau				=	$tu_1." ".$tu_2;
		$hai_tu_giua			=	$tu_2." ".$tu_3;
		$hai_tu_giua_2			=	$tu_3." ".$tu_4;
		$hai_tu_giua_3			=	$tu_4." ".$tu_5;
		$hai_tu_cuoi			=	$tu_5." ".$tu_6;
		$ba_tu_dau				=	$tu_1." ".$tu_2." ".$tu_3;
		$ba_tu_giua				=	$tu_2." ".$tu_3." ".$tu_4;
		$ba_tu_giua_2			=	$tu_3." ".$tu_4." ".$tu_5;
		$ba_tu_cuoi				=	$tu_4." ".$tu_5." ".$tu_6;
		$bon_tu					=	$tu_1." ".$tu_2." ".$tu_3." ".$tu_4;
		$nam_tu					=	$tu_1." ".$tu_2." ".$tu_3." ".$tu_4." ".$tu_5;
		$sau_tu					=	$tu_1." ".$tu_2." ".$tu_3." ".$tu_4." ".$tu_5." ".$tu_6;
		$tv="
			( select * from san_pham where ten like '%$sau_tu%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$nam_tu%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$bon_tu%' limit 0,100 ) union 

			( select * from san_pham where ten like '%$ba_tu_dau%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$ba_tu_giua%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$ba_tu_giua_2%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$ba_tu_cuoi%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$hai_tu_dau%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$hai_tu_giua%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$hai_tu_giua_2%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$hai_tu_cuoi%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$tu_1%' limit 0,100 ) union 
			( select * from san_pham where ten like '%$tu_2%' limit 0,100 ) union
			( select * from san_pham where ten like '%$tu_3%' limit 0,100 ) union
			( select * from san_pham where ten like '%$tu_4%' limit 0,100 ) union
			( select * from san_pham where ten like '%$tu_5%' limit 0,100 ) union
			( select * from san_pham where ten like '%$tu_6%' limit 0,100 ) 
		
		";
		return $tv;
	}
	
?>