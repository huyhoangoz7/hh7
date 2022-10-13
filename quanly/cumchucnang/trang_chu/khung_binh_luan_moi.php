<?php 
	if(!isset($bien_bao_mat)){exit();}
?>


<?php 
	
	$tv="select * from binh_luan_lllll order by id desc limit 0,10 ";
	//xuat_bm("$tv <hr>");
	$tv_1=truy_van_bm($tv);
	
	xuat_bm("<div class='khung_tieu_de_cot_phai_ban_dau' >");
	xuat_bm("<span>Bình luận mới</span>");
	xuat_bm("</div>");
	xuat_bm("<div class='khung_noi_dung_cot_phai_ban_dau' >");
		
		//include("");
		?>
			<center>
				<br>
				<table border="0" >

					
					<?php 
						while($tv_2=mysql_fetch_array($tv_1))
						{
							$link_sua="?thamso=sua_san_pham&id=".$tv_2['id'];
							//$ten=$tv_2['ten'];
							//xuat_binh_luan_bm($c)
							$noi_dung_binh_luan=strip_tags($tv_2['noi_dung']);
							$binh_luan_hop_le=$bao_mat->kiem_tra_binh_luan($noi_dung_binh_luan);
							if($binh_luan_hop_le!="hop_le")
							{
								$noi_dung_binh_luan="Bình luận không hợp lệ";
							}
							$noi_dung_binh_luan=$bao_mat->thay_the_noi_dung_binh_luan($noi_dung_binh_luan);
							
							$mang_ndbl=explode(" ",$noi_dung_binh_luan);							
							
							$noi_dung_binh_luan_2="";
							
							
							for($i=0;$i<24;$i++)
							{
								$tu=$mang_ndbl[$i];
								$noi_dung_binh_luan_2=$noi_dung_binh_luan_2.$tu." ";
							}
							
							$chuoi_xem="Xem bài viết";
							
							if($tv_2['loai_menu']=="san_pham"){$chuoi_xem="Xem sản phẩm";}
							
							//if($tv_2['loai_menu']=="san_pham"){$lien_ket_xem="../?thamso=chi_tiet_san_pham&id=".$tv_2['dia_chi_so'];}
							//if($tv_2['loai_menu']=="danh_sach_bai_viet"){$lien_ket_xem="../?thamso=chi_tiet_tin_tuc&id=".$tv_2['dia_chi_so'];}
							//if($tv_2['loai_menu']=="bai_viet_mot_tin"){$lien_ket_xem="../?thamso=xuat_mot_tin_2&id=".$tv_2['dia_chi_so'];}
							
							$lien_ket_xem="?thamso=xem_binh_luan&id=".$tv_2['id'];
							
							xuat_bm("<tr class='hang_l_1' >");
								xuat_bm("<td align='left' height='36px' width='230px' >");
									xuat_bm("<div style='margin:5px 0px' >");
										xuat_binh_luan_bm($noi_dung_binh_luan_2);
									xuat_bm("</div>");
			
									xuat_bm("<a href='".$lien_ket_xem."' target='_blank' class='sua_xoa' style='line-height:30px' >Xem</a>");
									//xuat_bm("<a href='#' class='sua_xoa' style='line-height:30px;margin-left:40px' >Xóa</a>");
								xuat_bm("</td>");
								//xuat_bm("<td align='center' ><a href='$link_sua' class='sua_xoa' >Xem</a></td>");
							xuat_bm("</tr>");
						}
					?>
					
				</table>
				<br>
			</center>
			
		<?php 
		
		
	xuat_bm("</div>");

?>