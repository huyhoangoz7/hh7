<?php 
	if(!isset($bien_bao_mat)){exit();}
	$nd_ckt=$_SERVER['PHP_SELF'];$m_ckt_lllll_l_ll_999=explode("cumchucnang",$nd_ckt);
	$so=count($m_ckt_lllll_l_ll_999);if($so>1){exit();}
?>
<html>
<head>
	<meta charset="utf-8" >
	<title>Web</title>
</head>
<body>
<?php 

if($chuc_nang_binh_luan_danh_sach_bai_viet=="bat")
{
	//xuat_bm("1 <hr>");
	$noi_dung_binh_luan=post_bm("noi_dung");
	$id_bv=post_bm("id");
	$trang=post_bm("trang");
	if($trang=="sai"){$trang=1;}
	
	
	$binh_luan_hop_le=$bao_mat->kiem_tra_binh_luan($noi_dung_binh_luan);
	
	//xuat_bm($binh_luan_hop_le);
	
	if($binh_luan_hop_le=="khong_hop_le")
	{

		$noi_dung='
		
		- <b>Bình luận không hợp lệ . Bình luận không hợp lệ có thể do các nguyên nhân sau :</b> <br><br><br>
		
		+ Có ký tự không hợp lệ. Ký tự không hợp lệ có thể bao gồm các ký tự bên dưới : <br><br><hr><br>~ , ` , # , $ , % , ^ , & , * , ( , ) , = , | , \ , { , } , [ , ], ; , " ,'." ' ".' < , > , / <br><br><hr><br>
		+ Nội dung bình luận dài quá 1200 ký tự hoặc nhỏ hơn 26 ký tự <br><br>
		+ Nội dung bình luận xuống dòng quá 20 lần <br><br>
		+ Độ dài của từng từ bình luận không được quá 20 ký tự <br><br>
		
		';
		
		thong_bao_a10($noi_dung);
		
	}
	
	if($binh_luan_hop_le=="hop_le")
	{
		
		$noi_dung_binh_luan=$bao_mat->thay_the_noi_dung_binh_luan($noi_dung_binh_luan);
		
		?>
		<center>
			<div style="width:990px;text-align:left" >
			
				<br>
				<h1>Số lần xóa của bình luận</h1> <br>
				
				<?php 
				/*
				<!--- Bình luận của bạn có thể bị xóa bởi 1 người khác . Nguyên nhân là do web được lập trình chức năng bình luận mà không cần đăng ký thành viên <br><br>
				
				- Bạn có thể tránh việc bình luận của mình bị xóa nhanh bằng cách đặt số lần bị xóa của bình luận bằng 1 
				con số mà bạn cho là phù hợp <br><br>
				
				- Lưu ý là kể cả khi bạn đặt số lần bị xóa của bình luận bằng 1 con số phù hợp thì bình luận đó vẫn có thể bị xóa bởi người khác <br><br>
				
				- Ví dụ nếu có 1 người nào đó đặt số lần bị xóa của bình luận là 75 thì bình luận đó nếu muốn xóa được thì phải xóa 75 
				lần ( ngoại trừ việc bình luận của người đó bị xóa trực tiếp từ người quản trị web )<br><br>
				
				- Web được lập trình cứ 4 giây mới xóa được 1 bình luận <br><br>
				
				- Mặc định thì số lần bị xóa của bình luận là 1 <br><br>
				-->
				*/ ?>
				<form action="" method="post" >
					- Số lần bị xóa của bình luận : <input type="text" name="so_lan_xoa" value="1" style="width:100px" > ( giá trị lớn nhất có thể điền là 216000 ) <br><br>
					- Ví dụ nếu có 1 người nào đó đặt số lần bị xóa của bình luận là 75 thì  nếu người đó muốn xóa bình luận đó thì phải xóa 75 
				lần ( ngoại trừ việc bình luận của người đó bị xóa trực tiếp từ người quản trị web )<br><br>
					
					- Nếu số lần xóa của bình luận điền vào không hợp lệ thì số lần xóa của bình luận sẽ là 1
				
					<br><br>
					<textarea style="display:none" name="noi_dung"  ><?php xuat_bm($noi_dung_binh_luan); ?></textarea>
					- Nếu vẫn muốn gửi bình luận thì hãy nhấn nút <b>Gửi bình luận</b> phía dưới <br> 
					<br>
					<br>
					
					<input type="hidden" name="bm_bl_bv_2" value="bm_bl_bv_2" >
					
					<input type="submit" value="Gửi bình luận" style="width:150px;height:40px;font-size:18px" >
					
					<br><br><br>
					<?php ve_trang_truoc(); ?>
					
				</form>
			
			</div>
		</center>
		<?php 
		
		//tao_session_bm("xu_ly_bm_bl_sp_lan_1","hop_le");
		
		//trangtruoc();
	}
	
	
	
}
?>
</body>
</html>
<?php 
	exit();
?>