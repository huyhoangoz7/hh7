<?php 
	chong_pha_hoai();
?>
<?php 
	
	function thong_bao_a1($noi_dung)
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
	function thong_bao_a2($noi_dung)
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
			echo "<div style='margin:70px 50px;' >";
			echo "<span style='font-size:24px' >".$noi_dung."</span><br><br>";
			echo "<span class='abc3' onclick='window.history.back()' >Về trang trước</span>";
			echo "</div>";
		echo "</div>";
		echo "</center>";

	}
	function sua_thong_so($noi_dung,$ma)
	{
		$tv="UPDATE `thong_so` SET `gia_tri` = '$noi_dung' WHERE `ma` ='$ma' ";
		mysql_query($tv);
		//echo $tv."<hr>";
	}
	function ten_khung_san_pham($vi_tri)
	{
		$ma="td_a".$vi_tri;
		$ten=lay_thong_so($ma);
		return $ten;
	}
	function ten_khung_bai_viet($vi_tri)
	{
		$tv="select * from khung_html where vi_tri='$vi_tri' ";	
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);		
		return $tv_2['ten'];
	}
	function sua_csdl_php_3($gia_tri,$vi_tri_dau,$vi_tri,$duong_dan)
	{
		
		$noi_dung_tap_tin=file_get_contents($duong_dan, FILE_USE_INCLUDE_PATH);
		
		$chuoi_phan_tach="$"."csdl['".$vi_tri_dau."']"."['".$vi_tri."']";
		
		
		$m=explode($chuoi_phan_tach,$noi_dung_tap_tin);
		
		$noi_dung_phan_tach_1=$m[0];
		
		$m_2=explode(";",$m[1]);
		
		$noi_dung_phan_tach_3="";
		
		for($i=1;$i<count($m_2);$i++)
		{
			if(trim($m_2[$i])!="")
			{
				if($i!=count($m_2)-1)
				{
					$noi_dung_phan_tach_3=$noi_dung_phan_tach_3.$m_2[$i].";";
				}
				else 
				{
					$noi_dung_phan_tach_3=$noi_dung_phan_tach_3.$m_2[$i];
				}
			}
		}
		
		$noi_dung_phan_tach_2=$chuoi_phan_tach."=".'"'.$gia_tri.'";';
		
		$noi_dung_sua=$noi_dung_phan_tach_1.$noi_dung_phan_tach_2.$noi_dung_phan_tach_3;
		
		file_put_contents($duong_dan,$noi_dung_sua);
	}
	
	function sua_giao_dien_css($noi_dung,$ten_danh_dau)
	{
		$duong_dan_css="../giao_dien/tuy_chinh/chung.css";
		
		$ten_danh_dau="/*".$ten_danh_dau."*/";
		
		$css=doc_tap_tin($duong_dan_css);
		
		$m=explode($ten_danh_dau,$css);
		
		$kq=$m[0].$ten_danh_dau.$noi_dung.$ten_danh_dau.$m[2];
		
		file_put_contents($duong_dan_css,$kq);
	}
	
	function hll_btbl_hb($nd)
	{
		$style="";		
		$ten="";
		
		$l_1="";$l_2="";
		
		$m=explode("|",$nd);
		
		$so=count($m);
		
		$bai_viet_mot_tin="khong";
		
		for($i=0;$i<$so;$i++)
		{
			$m_2=explode("::",trim($m[$i]));
			
			$thanh_phan=trim($m_2[0]);
			$gia_tri=trim($m_2[1]);
			
			if($thanh_phan=="style")
			{
				$style='style="'.$gia_tri.'"';
			}
			
			if($thanh_phan=="ten")
			{
				$ten='name="'.$gia_tri.'"';
			}
			
			if($thanh_phan=="bat_tat")
			{
				
				if($gia_tri==""){$l_2="selected";}
				if($gia_tri=="bat"){$l_1="selected";}
				if($gia_tri=="tat"){$l_2="selected";}
				
			}
			
			if($thanh_phan=="loai")
			{
				if($gia_tri=="bai_viet_mot_tin")
				{
					$bai_viet_mot_tin="co";
				}
			}
			
		}
		
		?>
			<tr>
				<td><b>Bình luận : </b></td>
				<td>
				
					<select <?php echo $style; ?> <?php echo $ten; ?> >
						<option value="bat" <?php echo $l_1; ?> >Bật</option>
						<option value="tat" <?php echo $l_2; ?>>Tắt</option>
					</select>
					
					<?php 
						if($bai_viet_mot_tin=="co")
						{
							echo "<div style='margin:5px' >Phần này chỉ dùng đối với menu có loại là <b>bài viết một tin</b></div>";
						}
					?>
				
				</td>
			</tr>
		<?php 
	}

?>