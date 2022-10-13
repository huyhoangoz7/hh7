<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	function post_bm($ten)
	{
		$c=$_POST[$ten];
		
		if(!isset($_POST[$ten]))
		{
			return "sai";
		}
		
		$c=str_replace("thanh_vien_lllll","[ tv_l ]",$c);
		//$c=str_replace("thanh_vien_lllll","",$c);
		$c=trim($c);
		//$c=$c."\n";
		return $c;
	}
	function get_bm($ten)
	{
		$c=$_GET[$ten];
		
		if(!isset($_GET[$ten]))
		{
			return "sai";
		}
		
		$c=str_replace("thanh_vien_lllll","[ tv_l ]",$c);
		//$c=str_replace("\n","",$c);
		//$c=str_replace("\r","",$c);
		//$c=str_replace("\t","",$c);
		//$c=str_replace("thanh_vien_lllll","",$c);
		$c=trim($c);
		//$c=$c."\n";
		return $c;
	}


	function xuat_bm($c)	
	{
		echo $c;
		//echo "\n";
	}
	
	
	function truy_van_bm($c)
	{
		return mysql_query($c);
	}
	
	function thong_bao_html_bm($c)
	{
		$c_2='
			<html>
			<head>
				<meta charset="utf8" >
				<title>Thông báo</title>
			</head>
			<body>
			'.$c.'
			</body>
			</html>
		
		';
		xuat_bm($c_2);;
		exit();
	}
	
	function xuat_binh_luan_bm($c)	
	{
		$c=str_replace("<br />",",,,...xuong_dong_lllllllll...,,,",$c);
		$c=str_replace("<br/>",",,,...xuong_dong_lllllllll...,,,",$c);
		$c=str_replace("<br>",",,,...xuong_dong_lllllllll...,,,",$c);
		$bao_mat=new bao_mat;
		$c=strip_tags($c);		
		$c=$bao_mat->thay_the_noi_dung_binh_luan($c);
		
		$c=str_replace("<","",$c);
		$c=str_replace(">","",$c);
		$c=str_replace("'","",$c);
		$c=str_replace('"',"",$c);
		
		$c=str_replace(",,,...xuong_dong_lllllllll...,,,","<br />",$c);
		
		xuat_bm($c);
		//echo "\n";
	}
	
	function yeu_to_session_bm()
	{
		$c=$_SERVER['HTTP_HOST'];
		$c=strtolower($c);
		//xuat_bm($c);xuat_bm(" 1 -<hr>");
		$c=str_replace("http://","",$c);
		$c=str_replace("https://","",$c);
		$c=str_replace("www.","",$c);
		$c=str_replace("www","",$c);
		$c=str_replace(".","_",$c);
		$c=str_replace('"',"",$c);
		$c=str_replace(',',"",$c);
		$c=str_replace(" ","",$c);
		
		//xuat_bm($c);xuat_bm(" 2 -<hr>");
		
		$chuoi_thay_the="`,~,!,@,#,$,%,^,&,*,(,),_,-,=,+,\,|,[,{,],},;,:,',<,>,.,/,?,/,*,+,-,/,/";
		$mang_thay_the=explode(",",$chuoi_thay_the);
		
		for($i=0;$i<count($mang_thay_the);$i++)
		{
			$ky_tu=$mang_thay_the[$i];
			$c=str_replace($ky_tu,"",$c);
		}
		
		$c=trim($c);
		
		
		$c=substr($c,0,30);
		
		$c="l_".$_SESSION['so_session_ngau_nhien_2']."_".$c."_lll_ll_";
		
		
		
		return $c;
		
	}
	
	function tao_session_bm($ten,$gia_tri)
	{
		
		$c=yeu_to_session_bm();
		
		$ten_moi=$c.$ten;
		
		//xuat_bm($ten_moi);
		
		$_SESSION[$ten_moi]=$gia_tri;
		
	}
	function lay_session_bm($ten)
	{
		
		$c=yeu_to_session_bm();
		
		$ten_moi=$c.$ten;
		
		if(isset($_SESSION[$ten_moi]))
		{
			$kq=$_SESSION[$ten_moi];
		}
		else 
		{
			$kq="sai";
		}
		
		return $kq;
		
	}
	function xoa_session_bm($ten)
	{
		
		$c=yeu_to_session_bm();
		
		$ten_moi=$c.$ten;
		
		if(isset($_SESSION[$ten_moi]))
		{
			unset($_SESSION[$ten_moi]);
		}
		
	}

?>