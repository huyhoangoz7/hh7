<?php 
	if(!isset($bien_bao_mat)){exit();}
	$nd_ckt=$_SERVER['PHP_SELF'];$m_ckt_lllll_l_ll_999=explode("cumchucnang",$nd_ckt);
	$so=count($m_ckt_lllll_l_ll_999);if($so>1){exit();}
	if($bien_bao_mat!="co"){exit();}
?>
<?php 
	class lop_tuy_chinh_binh_luan
	{
		function ham_6729($ten,$bat_tat,$ten_2)
		{
			
			$l_1="";$l_2="";
			
			if($bat_tat=="moi_truoc_cu_sau"){$l_1="selected";}
			if($bat_tat=="cu_truoc_moi_sau"){$l_2="selected";}
			
			xuat_bm($ten);			
			
			xuat_bm("<select name='$ten_2' style='float:right' >");
				xuat_bm("<option value='moi_truoc_cu_sau' $l_1 >Mới trước cũ sau</option>");
				xuat_bm("<option value='cu_truoc_moi_sau' $l_2 >Cũ trước mới sau</option>");
			xuat_bm("</select>");
			
			//xuat_bm("<br><br>");
		}
		function ham_4550($ten,$bat_tat,$ten_2)
		{
			
			$l_1="";$l_2="";
			
			if($bat_tat=="co"){$l_1="selected";}
			if($bat_tat=="khong"){$l_2="selected";}
			
			
			
			xuat_bm($ten);			
			
			xuat_bm("<select name='$ten_2' style='float:right' >");
				xuat_bm("<option value='co' $l_1 >Có</option>");
				xuat_bm("<option value='khong' $l_2 >Không</option>");
			xuat_bm("</select>");
			
			//xuat_bm("<br><br>");
		}
		function ham_9449($chuoi,$gia_tri,$ten)
		{
			xuat_bm($chuoi);
			xuat_bm("<input value='$gia_tri' name='$ten' style='float:right' >");
		}
		function tuy_chinh_binh_luan()
		{


			
			?>
				<form method="post" action="" >
				<table width="990px" id="er" style="margin-top:6px">
				<tr>
					<td align="right">
						<span class="span__16">Tùy chỉnh bình luận</span>
					</td>
				</tr>
				<tr>
					<td>
						<div style="margin:30px 10px;width:600px" >
						<?php 
							//$bat_tat=lay_thong_so('chuc_nang_binh_luan_san_pham');
							//$this->hggn_bt_bl("Bình luận sản phẩm : ",$bat_tat,"l_1");
							
							$so_binh_luan_toi_da=lay_thong_so('so_binh_luan_toi_da');
							$so_binh_luan_toi_da_trong_ngay=lay_thong_so('so_binh_luan_toi_da_trong_ngay');
							$xoa_binh_luan_khi_dat_toi_gioi_han=lay_thong_so('xoa_binh_luan_khi_dat_toi_gioi_han');
							$cach_hien_thi_binh_luan=lay_thong_so('cach_hien_thi_binh_luan');
							
							$this->ham_9449("Số bình luận tối đa : ",$so_binh_luan_toi_da,"ten_1");
							xuat_bm("<br style='clear:left' ><br>");
							$this->ham_9449("Số bình luận tối đa trong ngày : ",$so_binh_luan_toi_da_trong_ngay,"ten_2");
							xuat_bm("<br style='clear:left' ><br>");
							$this->ham_4550("Xóa bình luận khi đạt tới giới hạn bình luận tối đa : ",$xoa_binh_luan_khi_dat_toi_gioi_han,"ten_3");
							xuat_bm("<br style='clear:left' ><br>");
							$this->ham_6729("Sắp xếp bình luận : ",$cach_hien_thi_binh_luan,"ten_4");

						?>
						</div>
						
					</td>
				</tr>
				<tr>
					<td>
						<input type="hidden" name="bieu_mau_tuy_chinh_binh_luan" value="bieu_mau_tuy_chinh_binh_luan" >
						<input type="submit" value="Sửa" style="width:100px;height:40px;font-size:21px;margin:10px;" >
					</td>
				</tr>
			</table>
			</form>
			<script>
				table_css_1("er");
			</script>
			<?php 
		}
		function th_sua_tuy_chinh_binh_luan()
		{		


			$gia_tri=post_bm("ten_1");
			sua_thong_so($gia_tri,"so_binh_luan_toi_da");
			
			$gia_tri=post_bm("ten_2");
			sua_thong_so($gia_tri,"so_binh_luan_toi_da_trong_ngay");
			
			$gia_tri=post_bm("ten_3");
			sua_thong_so($gia_tri,"xoa_binh_luan_khi_dat_toi_gioi_han");
			
			$gia_tri=post_bm("ten_4");
			sua_thong_so($gia_tri,"cach_hien_thi_binh_luan");
			

			trang_truoc_a1();

			
			
			exit();
		}
	}
?>