<?php 
	chong_pha_hoai();
?>
<br>
<form method="post" action="" >
<div style="margin-left:20px;" >
<h1 style='color:blue' >Giao diện web</h1><br>
<?php 

	function hop_chon_giao_dien()
	{
		$c=lay_thong_so("mau_giao_dien");	
		
		$a_0="";$a_1="";$a_2="";$a_3="";$a_4="";
		
		if($c=="tuy_chinh"){$a_0="selected";}
		if($c=="xanh"){$a_1="selected";}
		if($c=="xanh_la_cay"){$a_2="selected";}
		if($c=="cam"){$a_3="selected";}
		if($c=="hong"){$a_4="selected";}
		if($c=="nau"){$a_5="selected";}
		if($c=="tim_do"){$a_6="selected";}
		if($c=="do_nau"){$a_7="selected";}
		if($c=="tim_2"){$a_8="selected";}
		if($c=="xanh_2"){$a_9="selected";}
		if($c=="do_hoi_dam"){$a_10="selected";}
		if($c=="xanh_3"){$a_11="selected";}
		if($c=="tim"){$a_12="selected";}
		if($c=="nau_2"){$a_13="selected";}
		if($c=="do_cam"){$a_14="selected";}


		echo "Giao diện :";
		echo "
		
			<select name='giao_dien' style='width:133px' >
				<option value='xanh' ".$a_1." >Xanh</option>
				<option value='xanh_la_cay' ".$a_2." >Xanh lá cây</option>
				<option value='cam' ".$a_3." >Cam</option>
				<option value='hong' ".$a_4." >Hồng</option>
				
				<option value='xanh_3' ".$a_11." >Xanh 3</option>
				
				<option value='xanh_2' ".$a_9." >Xanh 2</option>
				
				
				<option value='do_hoi_dam' ".$a_10." >Đỏ hơi đậm</option>
				<option value='do_nau' ".$a_7." >Đỏ nâu</option>
				<option value='do_cam' ".$a_14." >Đỏ cam</option>
				<option value='tim' ".$a_12." >Tím</option>
				<option value='tim_2' ".$a_8." >Tím 2</option>
				<option value='tim_do' ".$a_6." >Tím đỏ</option>
				
				<option value='nau_2' ".$a_13." >Nâu 2</option>
				<option value='nau' ".$a_5." >Nâu</option>
			</select>
			
		";
		/*echo "
		
			<select name='giao_dien' style='width:133px' >
				<option value='tuy_chinh' ".$a_0." >Tùy chỉnh</option>
				<option value='xanh' ".$a_1." >Xanh</option>
				<option value='xanh_la_cay' ".$a_2." >Xanh lá cây</option>
				<option value='cam' ".$a_3." >Cam</option>
				<option value='hong' ".$a_4." >Hồng</option>
			</select>
			
		";*/
		echo "<br><br>";
	}
	hop_chon_giao_dien();


?>
<input type="hidden" name="bm_sua_giao_dien" value="bm_sua_giao_dien" >
<input type="submit" value="Sửa" style="width:100px;height:40px;font-size:22px;margin-top:20px" >


</form>
<!--
- Nếu chọn kiểu giao diện là <b>Tùy chỉnh</b> thì có thể tùy chỉnh lại giao diện ở phần phía dưới
<br><br>
<input type="hidden" name="bm_sua_giao_dien" value="bm_sua_giao_dien" >

<input type="submit" value="Sửa" style="width:100px;height:40px;font-size:22px;margin-top:20px" >


</form>
<br><br><br>
<h1 style='color:blue' >Tùy chỉnh giao diện web</h1><br>

- Phần tùy chỉnh giao diện chỉ sử dụng được khi kiểu giao diện là kiểu <b>Tùy chỉnh</b> <br>
- Kiểu giao diện có thể thay đổi ở phần phía trên <br><br><br>

<a href="?thamso=dgd_tc&ma=doi_giao_dien_menu" class="lienket_phanthan">Đổi giao diện menu</a><br>
<a href="?thamso=dgd_tc&ma=" class="lienket_phanthan">Đổi giao diện cột trái</a><br>
<a href="?thamso=dgd_tc&ma=" class="lienket_phanthan">Đổi giao diện cột phải</a><br>
<a href="?thamso=dgd_tc&ma=" class="lienket_phanthan">Đổi giao diện vùng tìm kiếm</a><br>
<a href="?thamso=dgd_tc&ma=" class="lienket_phanthan">Đổi màu nền hoặc hình nền web</a><br>

<br><br>
</div>
-->