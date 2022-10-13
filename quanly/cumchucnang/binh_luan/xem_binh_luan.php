<?php 
	if(!isset($bien_bao_mat)){exit();}
	$nd_ckt=$_SERVER['PHP_SELF'];$m_ckt_lllll_l_ll_999=explode("cumchucnang",$nd_ckt);
	$so=count($m_ckt_lllll_l_ll_999);if($so>1){exit();}
	if($bien_bao_mat!="co"){exit();}
?>
<?php 
	class xem_binh_luan extends xoa_binh_luan
	{
		function xem_bl()
		{
			$bao_mat=new bao_mat;
			$id=get_bm('id');
			$tv="select * from binh_luan_lllll where id='$id' ";
			$tv_1=mysql_query($tv);
			$tv_2=mysql_fetch_array($tv_1);
			
			$dia_chi_so=$tv_2['dia_chi_so'];
			
			$noi_dung_binh_luan=$tv_2['noi_dung'];

			$loai_menu=$tv_2['loai_menu'];
			
			$chuoi_1="Xem bài viết";
			
			if($loai_menu=="san_pham"){$chuoi_1="Xem sản phẩm";}
			
			if($loai_menu=="san_pham"){$lien_ket_xem="../?thamso=chi_tiet_san_pham&id=".$dia_chi_so;}
			if($loai_menu=="danh_sach_bai_viet"){$lien_ket_xem="../?thamso=chi_tiet_tin_tuc&id=".$dia_chi_so;}
			if($loai_menu=="bai_viet_mot_tin"){$lien_ket_xem="../?thamso=xuat_mot_tin_2&id=".$dia_chi_so;}
			
			?>
				<table width="990px" id="er" style="margin-top:6px">
				<tr>
					<td align="right">
						<span class="span__16">Xem bình luận</span>
						<!--<a href="index.php" class="nut_dong">
							Đóng
						</a>-->
					</td>
				</tr>
				<tr>
					<td>
						<div style="margin:10px" >
						<?php xuat_binh_luan_bm($noi_dung_binh_luan); ?>
						<br><br>
						
						<a href="<?php xuat_bm($lien_ket_xem);?>" target="_blank" class="sua_xoa" ><?php xuat_bm($chuoi_1); ?></a>
						
						<br><br>
						</div>
					</td>
				</tr>
			</table>
			<script>
				table_css_1("er");
			</script>
			<?php 
		}
	}
?>