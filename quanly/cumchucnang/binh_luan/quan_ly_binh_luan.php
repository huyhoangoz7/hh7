<?php 
	if(!isset($bien_bao_mat)){exit();}
	$nd_ckt=$_SERVER['PHP_SELF'];$m_ckt_lllll_l_ll_999=explode("cumchucnang",$nd_ckt);
	$so=count($m_ckt_lllll_l_ll_999);if($so>1){exit();}
	if($bien_bao_mat!="co"){exit();}
?>
<?php 
	class quan_ly_binh_luan extends xem_binh_luan
	{
		function tinh_st_qlbl($so_gioi_han,$loai_quan_ly)
		{
			$tv="select count(*) from binh_luan_lllll where loai_menu='$loai_quan_ly' ";
			$tv_1=truy_van_bm($tv);
			$tv_2=mysql_fetch_array($tv_1);		
			$st=ceil($tv_2[0]/$so_gioi_han);
			return $st;
		}
		function xuat_qlbl($loai_quan_ly)
		{
			$bao_mat=new bao_mat;
			
			
			$ten_l="Bài viết";
			
			if($loai_quan_ly=="san_pham"){$ten_l="Sản phẩm";}
			
			$ssp_td=1;
			$sd=15;
			$so_gioi_han=$ssp_td*$sd;
			if($_GET['trang']=="")
			{
				$vtbd=0;
			}
			else 
			{
				$vtbd=($_GET['trang']-1)*$so_gioi_han;
			}	
			
			$st=$this->tinh_st_qlbl($so_gioi_han,$loai_quan_ly);
			
			$tv="select * from binh_luan_lllll where loai_menu='$loai_quan_ly' order by id desc limit $vtbd,$so_gioi_han ";
			$tv_1=truy_van_bm($tv);
			?>
			
			<center>

				<input type="hidden" name="cn_sx_menu" value="cn_sx_menu" >
				<table width="990px" style="clear:left;margin-top:6px" id="er" >
					<tr>
						<td width="590px" height="40px" align="left" ><b style="margin-left:10px" >Nội dung bình luận</b></td>
						<td width="100px" align="center" ><b><?php xuat_bm($ten_l); ?></b></td>
						<td width="100px" align="center" ><b>Xem</b></td>
						<td width="100px" align="center" ><b>Sửa</b></td>
						<td width="100px" align="center" ><b>Xóa</b></td>
					</tr>
					<?php 
						$l=1;
						while($tv_2=mysql_fetch_array($tv_1))
						{
							$id=$tv_2['id'];
							
							$link_sua="?thamso=sua_binh_luan&id=".$id;
							$link_xoa="?thamso=xoa_binh_luan&id=".$id;

							$id=$tv_2['id'];

							
							$noi_dung_binh_luan=strip_tags($tv_2['noi_dung']);
							$binh_luan_hop_le=$bao_mat->kiem_tra_binh_luan($noi_dung_binh_luan);
							if($binh_luan_hop_le!="hop_le")
							{
								$noi_dung_binh_luan="Bình luận không hợp lệ";
							}
							$noi_dung_binh_luan=$bao_mat->thay_the_noi_dung_binh_luan($noi_dung_binh_luan);
							
							$mang_ndbl=explode(" ",$noi_dung_binh_luan);							
							
							$noi_dung_binh_luan_2="";
							
							
							for($i=0;$i<90;$i++)
							{
								$tu=$mang_ndbl[$i];
								$noi_dung_binh_luan_2=$noi_dung_binh_luan_2.$tu." ";
							}
							
							$chuoi_xem="Xem bài viết";
							
							if($tv_2['loai_menu']=="san_pham"){$chuoi_xem="Xem sản phẩm";}
							
							if($tv_2['loai_menu']=="san_pham"){$lien_ket_xem_2="../?thamso=chi_tiet_san_pham&id=".$tv_2['dia_chi_so'];}
							if($tv_2['loai_menu']=="danh_sach_bai_viet"){$lien_ket_xem_2="../?thamso=chi_tiet_tin_tuc&id=".$tv_2['dia_chi_so'];}
							if($tv_2['loai_menu']=="bai_viet_mot_tin"){$lien_ket_xem_2="../?thamso=xuat_mot_tin_2&id=".$tv_2['dia_chi_so'];}
							
							$lien_ket_xem="?thamso=xem_binh_luan&id=".$id;
							
							?>
								<tr>
									<td align="left" >
										
										<div style="margin:10px" >
										<?php xuat_binh_luan_bm($noi_dung_binh_luan_2); ?>
										</div>
									</td>

									<td align="center" ><a href="<?php xuat_bm($lien_ket_xem_2); ?>" target="_blank" class="sua_xoa">Xem</a></td>
									<td align="center" ><a href="<?php xuat_bm($lien_ket_xem); ?>" target="_blank" class="sua_xoa">Xem</a></td>
									<td align="center" ><a href="<?php xuat_bm($link_sua); ?>" class="sua_xoa">Sửa</a></td>
									<td align="center" ><a href="<?php xuat_bm($link_xoa); ?>" class="sua_xoa">Xóa</a></td>
								</tr>
							<?php
							$l++;
						}	
					?>

					<tr>
						<td colspan="5" align="center">
							<?php 
								xuat_link($st);
							?>
						</td>
					</tr>
				</table>
				</form>
			</center>
			<script>
				table_css_2("er");
			</script>
			<?php 
		}
	}
?>