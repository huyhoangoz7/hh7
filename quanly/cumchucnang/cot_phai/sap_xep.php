<?php 
	chong_pha_hoai();
?>
<form method="post" >
<div style="margin-left:20px" >
<h1 style='color:blue' >Sắp sếp / bật tắt các khung cột phải</h1><br>
<?php 
	$c=lay_thong_so("sxcp");
	$m=explode("[---]",$c);
	function vt_ee1($vt,$gt_a1)
	{
		$ten_ksp_1=ten_khung_san_pham("1");
		$ten_ksp_2=ten_khung_san_pham("2");
		$ten_ksp_3=ten_khung_san_pham("3");
		$ten_ksp_4=ten_khung_san_pham("4");
		
		$ten_kbv_1=ten_khung_bai_viet("1");
		$ten_kbv_2=ten_khung_bai_viet("2");
		$ten_kbv_3=ten_khung_bai_viet("3");
		$ten_kbv_4=ten_khung_bai_viet("4");
		
		if($gt_a1==""){$a_1="selected";}
		if($gt_a1=="ksp1"){$a_2="selected";}
		if($gt_a1=="ksp2"){$a_3="selected";}
		if($gt_a1=="ksp3"){$a_4="selected";}
		if($gt_a1=="ksp4"){$a_5="selected";}
		if($gt_a1=="k_html1"){$a_6="selected";}
		if($gt_a1=="k_html2"){$a_7="selected";}
		if($gt_a1=="k_html3"){$a_8="selected";}
		if($gt_a1=="k_html4"){$a_9="selected";}
		if($gt_a1=="thong_ke"){$a_10="selected";}
		if($gt_a1=="quang_cao"){$a_11="selected";}
		$ten="hop_chon_".$vt;	
		echo "Vị trí ".$vt." :";
		echo "
		
			<select name='$ten' style='width:133px' >
				<option value='' ".$a_1." >Không chọn</option>
				<option value='ksp1' ".$a_2." >Khung sản phẩm 1 ( Khung '".$ten_ksp_1."' )</option>
				<option value='ksp2' ".$a_3." >Khung sản phẩm 2 ( Khung '".$ten_ksp_2."' )</option>
				<option value='ksp3' ".$a_4." >Khung sản phẩm 3 ( Khung '".$ten_ksp_3."' )</option>
				<option value='ksp4' ".$a_5." >Khung sản phẩm 4 ( Khung '".$ten_ksp_4."' )</option>
				<option value='k_html1' ".$a_6." >Khung văn bản 1 &nbsp;&nbsp; ( Khung '".$ten_kbv_1."' )</option>
				<option value='k_html2' ".$a_7." >Khung văn bản 2 &nbsp;&nbsp; ( Khung '".$ten_kbv_2."' )</option>
				<option value='k_html3' ".$a_8." >Khung văn bản 3 &nbsp;&nbsp; ( Khung '".$ten_kbv_3."' )</option>
				<option value='k_html4' ".$a_9." >Khung văn bản 4 &nbsp;&nbsp; ( Khung '".$ten_kbv_4."' )</option>
				<option value='thong_ke' ".$a_10." >Thống kê</option>
				<option value='quang_cao' ".$a_11." >Quảng cáo</option>
			</select>
			
		";
		echo "<br><br>";
	}
	vt_ee1("1",$m[0]);
	vt_ee1("2",$m[1]);
	vt_ee1("3",$m[2]);
	vt_ee1("4",$m[3]);
	vt_ee1("5",$m[4]);
	vt_ee1("6",$m[5]);
	vt_ee1("7",$m[6]);
	vt_ee1("8",$m[7]);
	vt_ee1("9",$m[8]);
	vt_ee1("10",$m[9]);

?>

<input type="hidden" name="bm_sxcp" value="bm_sxcp" >

<input type="submit" value="Sửa" style="width:100px;height:40px;font-size:22px;margin-top:20px" >

</div>
</form>
