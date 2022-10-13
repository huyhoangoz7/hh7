<?php 
	chong_pha_hoai();
?>
<style>
	span.span__1
	{
		font-size:14px;
		color:#4362d3;

	}
	span.span__2
	{
		font-size:14px;
		color:red;

	}
</style>

<?php 
	
	function lay_mtg($id)
	{
		$tv="select * from luot_truy_cap where id='$id'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		return $tv_2['moc_thoi_gian'];
	}
	function cap_nhat_mtn($so,$id)
	{
		$chuoi="UPDATE `luot_truy_cap` SET `luot_truy_cap`='0',`moc_thoi_gian` = '$so' WHERE `id` ='$id' ";
		mysql_query($chuoi);
	}
	function luot_truy_cap($id)
	{
		$tv="select * from luot_truy_cap where id='$id'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		return $tv_2['luot_truy_cap'];
	}
	function tang_truy_cap($id)
	{
		$tg=time();
		$tg_2=lay_thong_so("tg_tc_".$id);
		$so=$tg-$tg_2;
		
		if($so>=10)
		{
			$ltc=luot_truy_cap($id);
			$ltc_1=$ltc+1;
			$chuoi="UPDATE `luot_truy_cap` SET `luot_truy_cap` = '$ltc_1' WHERE `id` ='$id' ";
			mysql_query($chuoi);
			sua_thong_so_l($tg,"tg_tc_".$id);
		}
	}
	tang_truy_cap("1");
	$luot_truy_cap=luot_truy_cap("1");

?>

<?php 
	$ltc=number_format($luot_truy_cap,0,".",".");

?>
<?php 
	$so_giay_trong_ngay=24*60*60;
	$so_giay_trong_3_ngay=24*3*60*60;
	$so_giay_trong_10_ngay=24*10*60*60;
	$so_giay_trong_thang=24*30*60*60;
	//echo $so_giay_trong_ngay;
?>

<?php 
	$ngay_hien_tai=date("j");
	$ngay_csdl=lay_o("thoi_gian","2","luot_truy_cap");
	if($ngay_hien_tai==$ngay_csdl)
	{
		tang_truy_cap("2");
	}
	else 
	{
		sua_o($ngay_hien_tai,"thoi_gian","2","luot_truy_cap");
		sua_o("0","luot_truy_cap","2","luot_truy_cap");
	}
	$ltc_trong_ngay=luot_truy_cap("2");
	if($ltc_trong_ngay==0){$ltc_trong_ngay=1;}
	$ltc_trong_ngay=number_format($ltc_trong_ngay,0,".",".");
?>

<?php 
	$thang_hien_tai=date("n");
	$thang_csdl=lay_o("thoi_gian","5","luot_truy_cap");
	if($thang_hien_tai==$thang_csdl)
	{
		tang_truy_cap("5");
	}
	else 
	{
		sua_o($thang_hien_tai,"thoi_gian","5","luot_truy_cap");
		sua_o("0","luot_truy_cap","5","luot_truy_cap");
	}
	$ltc_trong_thang=luot_truy_cap("5");
	if($ltc_trong_thang==0){$ltc_trong_thang=1;}
	$ltc_trong_thang=number_format($ltc_trong_thang,0,".",".");
?>

<?php 
	$nam_hien_tai=date("Y");
	$nam_csdl=lay_o("thoi_gian","6","luot_truy_cap");
	if($nam_hien_tai==$nam_csdl)
	{
		tang_truy_cap("6");
	}
	else 
	{
		sua_o($nam_hien_tai,"thoi_gian","6","luot_truy_cap");
		sua_o("0","luot_truy_cap","6","luot_truy_cap");
	}
	$ltc_trong_nam=luot_truy_cap("6");
	if($ltc_trong_nam==0){$ltc_trong_nam=1;}
	$ltc_trong_nam=number_format($ltc_trong_nam,0,".",".");
	//echo date(DATE_RFC2822);
?>

<div class="tdk___456_bc2">
	<span>Thống kê</span>
</div>
<div class="ndk___456_bc2" >
	<div style="margin-left:10px;font-size:14px">
		<div class="cao_3_px"></div>
		
		<b class="l_44" >Lượt truy cập :</b> <br>
		<div style="margin-top:10px;line-height:20px" >
		Toàn bộ : <?php echo $ltc; ?> <br>
		Trong ngày : <?php echo $ltc_trong_ngay; ?> <br>
		Tháng <?php echo $thang_hien_tai; ?> : <?php echo $ltc_trong_thang; ?> <br>
		Năm <?php echo $nam_hien_tai; ?> : <?php echo $ltc_trong_nam; ?> <br>
		</div>
		<div class="cao_3_px"></div>
	</div>
</div>