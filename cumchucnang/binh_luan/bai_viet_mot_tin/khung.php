<?php 
	if(!isset($bien_bao_mat)){exit();}
	$nd_ckt=$_SERVER['PHP_SELF'];$m_ckt_lllll_l_ll_999=explode("cumchucnang",$nd_ckt);
	$so=count($m_ckt_lllll_l_ll_999);if($so>1){exit();}
?>
<?php 
	$id_bv=get_bm("id");
	$trang=get_bm("trang");
	if($trang=="sai"){$trang=1;}
	if($chuc_nang_binh_luan_bai_viet_mot_tin=="bat")
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
					<input type="hidden" name="id_bv" value="<?php xuat_bm($id_bv); ?>" >
					<input type="hidden" name="trang" value="<?php xuat_bm($trang); ?>" >
					<input type="hidden" name="bm_bl_bv_mt" value="bm_bl_bv_mt" >
					<input type="submit" value="Gửi bình luận" class="l_40" >
					<br><br>
					<span style="font-size:14px" >- Phần bình luận này không cần đăng ký thành viên để gửi bình luận</span><br>
					<span style="font-size:14px;line-height:24px" >- Bạn có thể xóa bình luận của mình sau khi gửi mà không cần đăng ký thành viên</span>
					<br><br>
					
					<?php 
						include("cumchucnang/binh_luan/bai_viet_mot_tin/xuat_binh_luan.php");
					?>
				</div>
				</div>
			</form>
			
		<center>
<?php 
	}
?>