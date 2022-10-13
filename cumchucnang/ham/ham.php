<?php 
	function chong_pha_hoai()
	{
	}
	function thong_bao_html($noi_dung)
	{
		 
		echo "<html>";
		echo "<head>";
		echo "<meta charset='utf-8' >";
		echo "<title>";
		echo "Thông báo";
		echo "</title>";
		
		
		
		echo "</head>";
		echo "<body>";
		?>
			<style type='text/css' >
				span.abc3 {cursor:pointer;color:blue;font-size:28px}
				span.abc3:hover {color:red;}
			</style>
		<?php
		echo "<center>";
		echo "<div style='width:990px;text-align:left' >";
			echo "<div style='margin:70px 50px;' >";
			echo "<span style='font-size:24px' >".$noi_dung."</span><br><br>";
			echo "<span class='abc3' onclick='window.history.back()' >Về trang trước</span>";
			echo "</div>";
		echo "</div>";
		echo "</center>";
		echo "</body>";
		echo "</html>";

		exit();
	}
	function thongbao($c)
	{
		?>
			<script type="text/javascript">
				alert("<?php echo $c; ?>");
			</script>
		<?php
	}
	function chuyen_trang($duong_dan)
	{
		?>
			<script type="text/javascript">
				setTimeout(function(){
				window.location="<?php echo $duong_dan; ?>";
				},1000);
			</script>
		<?php
	}
	function thong_bao_a10($noi_dung)
	{

		?>
			<style type='text/css' >
				span.abc3 {cursor:pointer;color:blue;font-size:28px}
				span.abc3:hover {color:red;}
			</style>
		<?php
		echo "<center>";
		echo "<br>";
		echo "<div style='width:990px;text-align:left' >";
			echo "<div style='margin:50px; 30px' >";
			echo "<span style='font-size:18px' >".$noi_dung."</span><br><br>";
			echo "<span class='abc3' onclick='window.history.back()' >Về trang trước</span>";
			echo "</div>";
		echo "</div>";
		echo "</center>";

	}
	function thong_bao_a11($noi_dung,$ten,$lien_ket)
	{

		?>
			<style type='text/css' >
				span.abc3 {cursor:pointer;color:blue;font-size:28px}
				span.abc3:hover {color:red;}
			</style>
		<?php
		echo "<center>";
		echo "<br>";
		echo "<div style='width:990px;text-align:left' >";
			echo "<div style='margin:50px; 30px' >";
			echo "<span style='font-size:18px' >".$noi_dung."</span><br><br>";
			//echo "<span class='abc3' onclick='window.reload()' >".$ten."</span>";
			?>
				<span class='abc3' onclick="window.location='<?php echo $lien_ket; ?>'" ><?php echo $ten; ?></span>
			<?php 
			echo "</div>";
		echo "</div>";
		echo "</center>";

	}
	function ve_trang_truoc()
	{
		?>
		<style type='text/css' >
			span.abc3 {cursor:pointer;color:blue;font-size:28px}
			span.abc3:hover {color:red;}
		</style>
		<span class='abc3' onclick="window.history.back()" >Về trang trước</span>
		<?php 
	}
	function trangtruoc()
	{
		?>
			<script type="text/javascript">
				setTimeout(function(){
				window.history.back();
				},1000);
			</script>	
		<?php
		//exit();
	}
	function sua_thong_so_l($noi_dung,$ma)
	{
		$tv="UPDATE `thong_so` SET `gia_tri` = '$noi_dung' WHERE `ma` ='$ma' ";
		mysql_query($tv);
		//echo $tv."<hr>";
	}
	function trang_truoc_a1()
	{
		?>
			<html>
			<head>
			<title>Trang truoc</title>
			</head>
			<body>
			<script type="text/javascript">
				setTimeout(function(){
				window.history.back();
				},1000);
			</script>	
			</body></html>
		<?php
		exit();

	}
	function lay_o($ten_truong,$id,$bang)
	{
		$tv="select $ten_truong from $bang where id='$id' ";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		return $tv_2[$ten_truong];
	}
	function sua_o($noi_dung,$ten_truong,$id,$bang)
	{
		$chuoi="UPDATE `$bang` SET `$ten_truong`='$noi_dung' WHERE `id` ='$id' ";
		mysql_query($chuoi);
	}
	function chuyentrang($link)
	{
		?>
			<script type="text/javascript">
				window.location="<?php echo $link; ?>";
			</script>
		<?php
		exit(); 	
	}
	function get($ten)
	{
		$gia_tri="";
		if(isset($_GET[$ten])){$gia_tri=$_GET[$ten];}
		return $gia_tri;
	}
	function lay($ten)
	{
		$gia_tri="";
		if(isset($_GET[$ten])){$gia_tri=$_GET[$ten];}
		return $gia_tri;
	}
	function post($ten)
	{
		$gia_tri="";
		if(isset($_POST[$ten])){$gia_tri=$_POST[$ten];}
		return $gia_tri;
	}
	function lay_2($ten)
	{
		$gia_tri="";
		if(isset($_POST[$ten])){$gia_tri=$_POST[$ten];}
		return $gia_tri;
	}
	
	
	function kiem_tra_anh_upload__ddd($ten_hinh__input)
	{
		$ten_hinh=$_FILES[$ten_hinh__input]['name'];
		$ten_hinh=strtolower($ten_hinh);
		if($ten_hinh!="")
		{
			if(ereg(".php",$ten_hinh))
			{
				thongbao("Không được up hình có ký tự '.php'");
				trangtruoc();
				exit();
			}
			if(ereg(".phtml",$ten_hinh))
			{
				thongbao("Không được up hình có ký tự '.phtml'");
				trangtruoc();
				exit();
			}
			if(ereg("#",$ten_hinh))
			{
				thongbao("Không được up hình có ký tự '#'");
				trangtruoc();
				exit();
			}
			$mang_l=explode("?",$ten_hinh);
			if(count($mang_l)>1)
			{
				thongbao("Không được up hình có ký tự '?'");
				trangtruoc();
				exit();
			}	
			/*if(ereg("?",$ten_hinh))
			{
				thongbao("Không được up hình có ký tự '?'");
				trangtruoc();
				exit();
			}*/
			$m=explode(".",$ten_hinh);
			$duoi_hinh=$m[count($m)-1];
			$hinh_hop_le="khong";
			$chuoi_hinh_hop_le="jpg_jpeg_gif_bmp_png";
			$mang_hinh_hop_le=explode("_",$chuoi_hinh_hop_le);
			for($i=0;$i<count($mang_hinh_hop_le);$i++)
			{
				if($mang_hinh_hop_le[$i]==$duoi_hinh)
				{
					$hinh_hop_le="co";
				}
			}
			$show_chuoi="";
			for($i=0;$i<count($mang_hinh_hop_le);$i++)
			{
				$y=$mang_hinh_hop_le[$i];
				$show_chuoi=$show_chuoi.$y.",";
			}
			$show_chuoi=substr($show_chuoi,0,-1);
			if($hinh_hop_le=="khong")
			{
				thongbao("Đuôi hình không hợp lệ , đuôi hình hợp lệ là '$show_chuoi' ");
				trangtruoc();
				exit();	
			}
		}
	}
	
	function kiem_tra_anh_flash_upload__ddd($ten_hinh__input)
	{
		$ten_hinh=$_FILES[$ten_hinh__input]['name'];
		$ten_hinh=strtolower($ten_hinh);
		if($ten_hinh!="")
		{
			if(ereg(".php",$ten_hinh))
			{
				thongbao("Không được up tập tin có ký tự '.php'");
				trangtruoc();
				exit();
			}
			if(ereg(".phtml",$ten_hinh))
			{
				thongbao("Không được up tập tin có ký tự '.phtml'");
				trangtruoc();
				exit();
			}
			if(ereg("#",$ten_hinh))
			{
				thongbao("Không được up tập tin có ký tự '#'");
				trangtruoc();
				exit();
			}
			$mang_l=explode("?",$ten_hinh);
			if(count($mang_l)>1)
			{
				thongbao("Không được up tập tin có ký tự '?'");
				trangtruoc();
				exit();
			}	
			/*if(ereg("?",$ten_hinh))
			{
				thongbao("Không được up hình có ký tự '?'");
				trangtruoc();
				exit();
			}*/
			$m=explode(".",$ten_hinh);
			$duoi_hinh=$m[count($m)-1];
			$hinh_hop_le="khong";
			$chuoi_hinh_hop_le="jpg_jpeg_gif_bmp_png_swf";
			$mang_hinh_hop_le=explode("_",$chuoi_hinh_hop_le);
			for($i=0;$i<count($mang_hinh_hop_le);$i++)
			{
				if($mang_hinh_hop_le[$i]==$duoi_hinh)
				{
					$hinh_hop_le="co";
				}
			}
			$show_chuoi="";
			for($i=0;$i<count($mang_hinh_hop_le);$i++)
			{
				$y=$mang_hinh_hop_le[$i];
				$show_chuoi=$show_chuoi.$y.",";
			}
			$show_chuoi=substr($show_chuoi,0,-1);
			if($hinh_hop_le=="khong")
			{
				thongbao("Đuôi hình không hợp lệ , đuôi hình hợp lệ là '$show_chuoi' ");
				trangtruoc();
				exit();	
			}
		}
	}
	function thay_the_fckeditor($nd)
	{
		$chuoi_1="é è ẻ ẽ ẹ ý ỳ ỷ ỹ ỵ ú ù ủ ũ ụ ư ứ ừ ử ữ ự í ì ỉ ĩ ị ó ò ỏ õ ọ ô ố ồ ổ ỗ ộ á à ả ã ạ â ấ ầ ẩ ẫ ậ ă ắ ằ ẳ ẵ ặ ê ế ể ễ ệ ơ ớ ờ ở ỡ ợ";
		$chuoi_2="&eacute; &egrave; ẻ ẽ ẹ &yacute; ỳ ỷ ỹ ỵ &uacute; &ugrave; ủ ũ ụ ư ứ ừ ử ữ ự &iacute; &igrave; ỉ ĩ ị &oacute; &ograve; ỏ &otilde; ọ &ocirc; ố ồ ổ ỗ ộ &aacute; &agrave; ả &atilde; ạ &acirc; ấ ầ ẩ ẫ ậ ă ắ ằ ẳ ẵ ặ &ecirc; ế ể ễ ệ ơ ớ ờ ở ỡ ợ";
		$mang_1=explode(" ",$chuoi_1);
		$mang_2=explode(" ",$chuoi_2);
		for($i=0;$i<count($mang_2);$i++)
		{
			$nd=str_replace($mang_2[$i],$mang_1[$i],$nd);
		}
		$chuoi_3="É È Ẻ Ẽ Ẹ Ê Ế Ề Ể Ễ Ệ Ý Ỳ Ỷ Ỹ Ỵ Ú Ù Ủ Ũ Ụ Ư Ứ Ừ Ử Ữ Ự Í Ì Ỉ Ĩ Ị Ó Ò Ỏ Õ Ọ Ô Ố Ồ Ổ Ỗ Ộ Ơ Ớ Ờ Ở Ỡ Ợ Á À Ả Ã Ạ Â Ấ Ầ Ẩ Ẫ Ậ Ă Ắ Ằ Ẳ Ẵ Ặ";
		$chuoi_4="&Eacute; &Egrave; Ẻ Ẽ Ẹ &Ecirc; Ế Ề Ể Ễ Ệ &Yacute; Ỳ Ỷ Ỹ Ỵ &Uacute; &Ugrave; Ủ Ũ Ụ Ư Ứ Ừ Ử Ữ Ự &Iacute; &Igrave; Ỉ Ĩ Ị &Oacute; &Ograve; Ỏ &Otilde; Ọ &Ocirc; Ố Ồ Ổ Ỗ Ộ Ơ Ớ Ờ Ở Ỡ Ợ &Aacute; &Agrave; Ả &Atilde; Ạ &Acirc; Ấ Ầ Ẩ Ẫ Ậ Ă Ắ Ằ Ẳ Ẵ Ặ";
		$mang_3=explode(" ",$chuoi_3);
		$mang_4=explode(" ",$chuoi_4);
		for($i=0;$i<count($mang_3);$i++)
		{
			$nd=str_replace($mang_4[$i],$mang_3[$i],$nd);
		}
		return $nd;
	}
	function cat_chuoi_789($str,$ky_tu_dau,$ky_tu_cuoi)
	{
		$str=strip_tags($str);
		$str=thay_the_fckeditor($str);
		$split=1;
	    $array = array();
	    for ( $i=0; $i < strlen( $str ); ){
	        $value = ord($str[$i]);
	        if($value > 127){
	            if($value >= 192 && $value <= 223)
	                $split=2;
	            elseif($value >= 224 && $value <= 239)
	                $split=3;
	            elseif($value >= 240 && $value <= 247)
	                $split=4;
	        }else{
	            $split=1;
	        }
	            $key = NULL;
	        for ( $j = 0; $j < $split; $j++, $i++ ) {
	            $key .= $str[$i];
	        }
	        array_push( $array, $key );
	    }
	    $mang=$array;
		//print_r($mang);echo "<hr>";
		$chuoi_1="";
		for($i=$ky_tu_dau;$i<$ky_tu_cuoi;$i++)
		{
			$chuoi_1.=$mang[$i];
		}
		return $chuoi_1;
	}
	
	function lay_thong_so($ma)
	{
		$tv="select * from thong_so where ma='$ma' ";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		return $tv_2['gia_tri'];
	}
	function sua_thong_so_2($noi_dung,$ma)
	{
		$tv="UPDATE `thong_so` SET `gia_tri` = '$noi_dung' WHERE `ma` ='$ma' ";
		mysql_query($tv);
		//echo $tv."<hr>";
	}
	
	function dem_do_dai_chuoi_tieng_viet($str)
	{
		$str=strip_tags($str);
		$str=thay_the_fckeditor($str);
		$split=1;
	    $array = array();
	    for ( $i=0; $i < strlen( $str ); ){
	        $value = ord($str[$i]);
	        if($value > 127){
	            if($value >= 192 && $value <= 223)
	                $split=2;
	            elseif($value >= 224 && $value <= 239)
	                $split=3;
	            elseif($value >= 240 && $value <= 247)
	                $split=4;
	        }else{
	            $split=1;
	        }
	            $key = NULL;
	        for ( $j = 0; $j < $split; $j++, $i++ ) {
	            $key .= $str[$i];
	        }
	        array_push( $array, $key );
	    }
	    $mang=$array;
		return count($mang);
	}
	
	function flash($tep,$rong,$cao)
	{
		?>
			<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="<?php echo $rong; ?>" height="<?php echo $cao; ?>">
				  <param name="wmode" value="transparent" />
				  <param name="movie" value="<?php echo $tep; ?>" />
	
				  <param name="quality" value="high" />
				  <embed wmode="opaque" src="<?php echo $tep; ?>" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="<?php echo $rong; ?>" height="<?php echo $cao; ?>"></embed>
			</object>
		<?php
	}
	function xuat_link($st)
	{
		//if($_GET['trang']==""){$_GET['trang']=1;}
		?>
			<style>
				a.pt3
				{
					color:black;
					text-decoration: none;
					
					font-size:20px;
					margin:0px 5px
				}
				a.pt3:hover
				{
					color:red;
					text-decoration: none;
					
				}
			</style>
		<?php
		echo "<center><div style='margin:8px 0px' >";
		if($_GET['trang']!="")
		{
			if(ereg("&trang=",$_SERVER['REQUEST_URI']))
			{
				$_SERVER['REQUEST_URI']=str_replace("&trang=","",$_SERVER['REQUEST_URI']);
				$_SERVER['REQUEST_URI']=substr($_SERVER['REQUEST_URI'],0,-strlen($_GET['trang']));
				$lpt=$_SERVER['REQUEST_URI']."&trang=";
			}
			else
			{
				$lpt=$_SERVER['REQUEST_URI']."&trang=";
			}
		}
		else
		{
			$_SERVER['REQUEST_URI']=str_replace("&trang=","",$_SERVER['REQUEST_URI']);
			$lpt=$_SERVER['REQUEST_URI']."&trang=";
		}
		if($_GET['trang']!="" and $_GET['trang']!="1")
		{
			if($_GET['trang']=="" or $_GET['trang']==1)
			{
				$k=1;
			}
			else
			{
				$k=$_GET['trang']-1;
			}
			$link_t=$lpt.$k;
			$link_d=$lpt."1";
			echo '<a href="'.$link_d.'" style="margin-right:10px" class="pt3">Đầu</a>';
			echo '<a href="'.$link_t.'" style="margin-right:10px" class="pt3">Trước</a>';
		}
		if($_GET['trang']==""){$a=1;}else{$a=$_GET['trang'];}
		$b_1=$_GET['trang']-5;$n_1=$b_1;
		if($b_1<1){$b_1=1;}
		$b_2=$_GET['trang']+5;
		if($b_2>=$st){$n_2=$b_2;$b_2=$st;}
		//echo $b_1."<hr>";
		if($n_1<0){$v=(-1)*$n_1;$b_2=$b_2+$v;}
		if($n_2>=$st){$v_2=$n_2-$st;$b_1=$b_1-$v_2;}
		if($b_1>1){echo ' ... ';}
		for($i=$b_1;$i<=$b_2;$i++)
		{
			$lpt_1=$lpt.$i;
			if($i>0 && $i<=$st)
			{
				if($i!=$a)
				{
					?>
						<a href="<?php echo $lpt_1; ?>" class="pt3"><?php echo $i;?> </a>
					<?php
				}
				else
				{
					echo "<span style=\"color:red;font-size:20px\">$i</span>";
				}
			}
		}
		if($b_2<$st){echo ' ... ';}
		if($_GET['trang']!=$st && $st!=1)
		{
			if($_GET['trang']==$st)
			{
				$k=$st;
			}
			else
			{
				$k=$_GET['trang']+1;
				if($_GET['trang']==""){$k=2;}
			}
			$link_s=$lpt.$k;
			$link_cuoi=$lpt.$st;
			echo '<a href="'.$link_s.'" style="margin-left:10px" class="pt3">Sau</a>';
			echo '<a href="'.$link_cuoi.'" style="margin-left:10px" class="pt3">Cuối</a>';
		}
		echo "</div></center>";
	}
	
	function tong_so_binh_luan()
	{
		$tv="select count(*) from binh_luan_lllll";
		$tv_1=truy_van_bm($tv);
		$tv_2=mysql_fetch_array($tv_1);
		return $tv_2[0];
	}
	
	function cap_nhat_sbl_tn_sau_khi_xoa()
	{
		$id=get_bm('id');
		$tv="select * from binh_luan_lllll where id='$id' ";
		$tv_1=truy_van_bm($tv);
		$tv_2=mysql_fetch_array($tv_1);
		
		$ngay_binh_luan=$tv_2['ngay_binh_luan'];
		$ngay_hien_tai=date("j");
		
		if($ngay_binh_luan==$ngay_hien_tai)
		{
			$so_binh_luan_trong_ngay=lay_thong_so('so_binh_luan_trong_ngay');
			$so_binh_luan_trong_ngay_2=$so_binh_luan_trong_ngay-1;
			sua_thong_so_2($so_binh_luan_trong_ngay_2,'so_binh_luan_trong_ngay');
		}
		
	}
	
?>