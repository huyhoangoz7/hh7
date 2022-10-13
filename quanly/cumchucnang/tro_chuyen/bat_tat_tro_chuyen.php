<?php 
	if(!isset($bien_bao_mat)){exit();}
	$nd_ckt=$_SERVER['PHP_SELF'];$m_ckt_lllll_l_ll_999=explode("cumchucnang",$nd_ckt);
	$so=count($m_ckt_lllll_l_ll_999);if($so>1){exit();}
	if($bien_bao_mat!="co"){exit();}
?>
<?php 
	class bat_tat_tro_chuyen extends ql_tro_chuyen
	{
		function hggn_bt_tc($ten,$bat_tat,$ten_2)
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
		function bat_tat_tc()
		{
			
			?>
				<form method="post" action="" >
				<table width="990px" id="er" style="margin-top:6px">
				<tr>
					<td align="right">
						<span class="span__16">Bật hoặc tắt trò chuyện</span>
						<!--<a href="index.php" class="nut_dong">
							Đóng
						</a>-->
					</td>
				</tr>
				<tr>
					<td>
						<div style="margin:30px 10px" >
						<?php 
							$bat_tat=lay_thong_so('tro_chuyen');
							$this->hggn_bt_tc("Trò chuyện : ",$bat_tat,"l_1");							
							
						?>
						</div>
						
					</td>
				</tr>
				<tr>
					<td>
						<input type="hidden" name="bm_bt_tc" value="bm_bt_tc" >
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
		function th_sua_bt_tc()
		{		

			$bat_tat=post_bm("l_1");
			sua_thong_so($bat_tat,"tro_chuyen");			

			trang_truoc_a1();			
			
			exit();
		}
	}
?>