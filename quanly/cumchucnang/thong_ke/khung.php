<?php 
	if(!isset($bien_bao_mat)){exit();}
?>

<?php 
	function luot_truy_cap($id)
	{
		$tv="select * from luot_truy_cap where id='$id'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		return $tv_2['luot_truy_cap'];
	}
	
	$luot_truy_cap=luot_truy_cap("1");
	if($luot_truy_cap==0){$luot_truy_cap=1;}
	$ltc=number_format($luot_truy_cap,0,".",".");
	
	$ltc_trong_ngay=luot_truy_cap("2");
	if($ltc_trong_ngay==0){$ltc_trong_ngay=1;}
	$ltc_trong_ngay=number_format($ltc_trong_ngay,0,".",".");
	
	$ltc_trong_thang=luot_truy_cap("5");
	if($ltc_trong_thang==0){$ltc_trong_thang=1;}
	$ltc_trong_thang=number_format($ltc_trong_thang,0,".",".");
	
	$ltc_trong_nam=luot_truy_cap("6");
	if($ltc_trong_nam==0){$ltc_trong_nam=1;}
	$ltc_trong_nam=number_format($ltc_trong_nam,0,".",".");
?>

<?php 

	xuat_bm("<div class='khung_tieu_de_cot_phai_ban_dau' style='margin-top:5px' >");
	xuat_bm("<span>Thống kê</span>");
	xuat_bm("</div>");
	xuat_bm("<div class='khung_noi_dung_cot_phai_ban_dau' >");
		
		//include("");
		?>
			<div style="margin:20px 15px;margin-bottom:24px" >
			<span >Lượt truy cập : </span> <br>
			<div style="margin-top:10px;line-height:20px" >
			+ Toàn bộ : <?php echo $ltc; ?> <br>
			+ Trong ngày : <?php echo $ltc_trong_ngay; ?> <br>
			+ Tháng <?php echo $thang_hien_tai; ?> : <?php echo $ltc_trong_thang; ?> <br>
			+ Năm <?php echo $nam_hien_tai; ?> : <?php echo $ltc_trong_nam; ?> <br><br>
			<a href="?thamso=sua_thong_ke" class="sua_xoa" >Sửa thống kê</a>
			</div>
			</div>
		<?php 
		
		
	xuat_bm("</div>");

?>