<?php 
	chong_pha_hoai();
?>
<br>
<form method="post" action="" >
<div style="margin-left:20px;" >
<h1 style='color:blue' >Số sản phẩm trên dòng khi xuất sản phẩm</h1><br>
<?php 

	function hop_chon_giao_dien()
	{

		$ssp=lay_thong_so('so_san_pham_tren_dong');
		
		$a_1="";$a_2="";
		
		if($ssp==3){$a_1="selected";}
		if($ssp==4){$a_2="selected";}

		echo "Số sản phẩm :";
		echo "
		
			<select name='ssp' >
				<option value='3' ".$a_1." >3</option>
				<option value='4' ".$a_2." >4</option>

			</select>
			
		";
		echo "<br><br>";
	}
	hop_chon_giao_dien();


?>
<input type="hidden" name="bm_ss_sp_td" value="bm_ss_sp_td" >
<input type="submit" value="Sửa" style="width:100px;height:40px;font-size:22px;margin-top:20px" >


</form>
