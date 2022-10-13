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
		$id=get_bm("id");
		$id_bv=get_bm("id_bv");
		$trang=get_bm("trang");
		
		if($trang=="sai"){$trang=1;}
		
		$so_lan_xoa=lay_o("so_lan_xoa",$id,"binh_luan_lllll");
		
		?>
			<center>
			<div style="width:990px;text-align:left" >
			
				<br>
				<h1>Thông báo trước khi xóa bình luận</h1> <br>
				
				- Nếu bạn không phải là người tạo ra bình luận này thì đừng xóa bình luận này <br><br>
				
				- Do web được lập trình chức năng bình luận không cần đăng ký thành viên nên web sẽ không 
				kiểm tra là ai xóa bình luận này <br><br>
				<?php if($so_lan_xoa>1){ ?>
				- Số lần xóa của bình luận là <b><?php xuat_bm($so_lan_xoa); ?></b> <br><br>
				
				
				- Nếu bạn là người tạo ra bình luận này và vẫn muốn xóa bình luận này thì phải xóa <b><?php xuat_bm($so_lan_xoa); ?></b> lần <br><br>
				<?php } ?>
				- Nếu bạn là người tạo ra bình luận này và vẫn muốn xóa bình luận này thì hãy bấm nút <b style="color:blue" >Xóa</b> phía dưới <br><br><br>
				
				<form method="get" >
				
				<input type="hidden" name="thamso" value="xoa_binh_luan_bv_2" >
				<input type="hidden" name="id" value="<?php xuat_bm($id); ?>" >
				<input type="hidden" name="id_bv" value="<?php xuat_bm($id_bv); ?>" >
				<input type="hidden" name="trang" value="<?php xuat_bm($trang); ?>" >
				
				<input type="submit" value="Xóa" style="width:100px;height:40px;font-size:20px" >
				<br><br><br>
					<?php ve_trang_truoc(); ?>
				</form>
			
			</div>
		</center>
		<?php 
		
	}

?>
</body>
</html>
<?php 
	exit();	
?>