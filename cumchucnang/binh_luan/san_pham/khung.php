<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id_sp=get_bm("id");
	$trang=get_bm("trang");
	if($trang=="sai"){$trang=1;}
	if($chuc_nang_binh_luan_san_pham=="bat")
	{

?>
		<script type="text/javascript" >
			var so_bam_vk_bl=1;
			function bam_vk_bl(dt)
			{
				if(so_bam_vk_bl==1)
				{
					dt.value="";
					so_bam_vk_bl=2;
				}
			}

		</script>
		<center>
			<form method="post" action="" >
				<div class='tdg___ggg_bc2'><a href='#'>Bình luận</a></div>
				<div class='ndg___ggg_bc2' >
				<div style='margin:10px 0px;margin-left:20px'>
					<br>
					<textarea style="width:680px;height:80px" onclick="bam_vk_bl(this)" name="noi_dung"  >Nội dung bình luận</textarea>
					<br><br>
					<input type="hidden" name="id_sp" value="<?php xuat_bm($id_sp); ?>" >
					<input type="hidden" name="trang" value="<?php xuat_bm($trang); ?>" >
					<input type="hidden" name="bm_bl_sp" value="bm_bl_sp" >
					<input type="submit" value="Gửi bình luận" class="l_40" >
					<br><br>
					<span style="font-size:14px" >- Phần bình luận này không cần đăng ký thành viên để gửi bình luận</span><br>
					<span style="font-size:14px;line-height:24px" >- Bạn có thể xóa bình luận của mình sau khi gửi mà không cần đăng ký thành viên</span>
					<br><br>
					
					<?php 
						include("cumchucnang/binh_luan/san_pham/xuat_binh_luan.php");
					?>
				</div>
				</div>
			</form>
			
		<center>
<?php 
	}
?>