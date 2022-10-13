<?php 
	if(!isset($bien_bao_mat)){exit();}
	$nd_ckt=$_SERVER['PHP_SELF'];$m_ckt_lllll_l_ll_999=explode("cumchucnang",$nd_ckt);
	$so=count($m_ckt_lllll_l_ll_999);if($so>1){exit();}
	if($bien_bao_mat!="co"){exit();}
?>
<?php 
	class bat_tat_binh_luan extends lop_tuy_chinh_binh_luan
	{
		function hggn_bt_bl($ten,$bat_tat,$ten_2)
		{
			
			$l_1="";$l_2="";
			
			if($bat_tat=="bat"){$l_1="selected";}
			if($bat_tat=="tat"){$l_2="selected";}
			
			xuat_bm($ten);			
			
			xuat_bm("<select name='$ten_2' >");
				xuat_bm("<option value='bat' $l_1 >Bật</option>");
				xuat_bm("<option value='tat' $l_2 >Tắt</option>");
			xuat_bm("</select>");
			
			xuat_bm("<br><br>");
		}
		function ham_362220922()
		{
			
		}
		function bat_tat_bl()
		{


			
			?>
				<form method="post" action="" >
				<table width="990px" id="er" style="margin-top:6px">
				<tr>
					<td align="right">
						<span class="span__16">Bật hoặc tắt bình luận</span>
						<!--<a href="index.php" class="nut_dong">
							Đóng
						</a>-->
					</td>
				</tr>
				<tr>
					<td>
						<div style="margin:30px 10px" >
						<?php 
							$bat_tat=lay_thong_so('chuc_nang_binh_luan_san_pham');
							$this->hggn_bt_bl("Bình luận sản phẩm : ",$bat_tat,"l_1");
							
							$bat_tat=lay_thong_so('chuc_nang_binh_luan_danh_sach_bai_viet');
							$this->hggn_bt_bl("Bình luận danh sách bài viết : ",$bat_tat,"l_2");
							
							$bat_tat=lay_thong_so('chuc_nang_binh_luan_bai_viet_mot_tin');
							$this->hggn_bt_bl("Bình luận một tin : ",$bat_tat,"l_3");
						?>
						</div>
						
					</td>
				</tr>
				<tr>
					<td>
						<input type="hidden" name="bm_bht_binh_luan" value="bm_bht_binh_luan" >
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
		function th_sua_bt_binh_luan()
		{		


			$bat_tat=post_bm("l_1");
			sua_thong_so($bat_tat,"chuc_nang_binh_luan_san_pham");
			
			$bat_tat=post_bm("l_2");
			sua_thong_so($bat_tat,"chuc_nang_binh_luan_danh_sach_bai_viet");
			
			$bat_tat=post_bm("l_3");
			sua_thong_so($bat_tat,"chuc_nang_binh_luan_bai_viet_mot_tin");
			

			trang_truoc_a1();

			
			
			exit();
		}
	}
?>