<?php 
	if(!isset($bien_bao_mat)){exit();}
	$nd_ckt=$_SERVER['PHP_SELF'];$m_ckt_lllll_l_ll_999=explode("cumchucnang",$nd_ckt);
	$so=count($m_ckt_lllll_l_ll_999);if($so>1){exit();}
	if($bien_bao_mat!="co"){exit();}
?>
<?php 
	class ql_tro_chuyen extends lop_xoa_tn_tc
	{
		function tinh_st_qltc($so_gioi_han)
		{
			$tv="select count(*) from tro_chuyen_lllll ";
			$tv_1=truy_van_bm($tv);
			$tv_2=mysql_fetch_array($tv_1);		
			$st=ceil($tv_2[0]/$so_gioi_han);
			return $st;
		}
		function xuat_qltc()
		{
			$bao_mat=new bao_mat;
			
			
			$ten_l="Bài viết";
			
			if($loai_quan_ly=="san_pham"){$ten_l="Sản phẩm";}
			
			$ssp_td=1;
			$sd=30;
			$so_gioi_han=$ssp_td*$sd;
			if($_GET['trang']=="")
			{
				$vtbd=0;
			}
			else 
			{
				$vtbd=($_GET['trang']-1)*$so_gioi_han;
			}	
			
			$st=$this->tinh_st_qltc($so_gioi_han);
			
			$tv="select * from tro_chuyen_lllll order by id desc limit $vtbd,$so_gioi_han ";
			$tv_1=truy_van_bm($tv);
			?>
			
			<center>

				<input type="hidden" name="cn_sx_menu" value="cn_sx_menu" >
				<table width="990px" style="clear:left;margin-top:6px" id="er" >
					<tr>
						<td width="100px" ><b style='margin-left:10px' >Tên</b></td>
						<td width="590px" height="40px" align="left" ><b style="margin-left:10px" >Tên và nội dung</b></td>
						<td width="150px" align="center" ><b>Sửa</b></td>
						<td width="150px" align="center" ><b>Xóa</b></td>
					</tr>
					<?php 
						$l=1;
						while($tv_2=mysql_fetch_array($tv_1))
						{
							$id=$tv_2['id'];
							
							$lk_sua="?thamso=sua_tn_tc&id=".$id;
							$link_xoa="?thamso=xoa_tn_tc&id=".$id;
							
							$nd=$tv_2['noi_dung'];
							
							$m=explode("</span>",$nd);
							
							$ten=$m[0];
							
							/*$nd=strip_tags($tv_2['noi_dung']);
							
							$nd=str_replace("<","",$nd);
							$nd=str_replace(">","",$nd);
							$nd=str_replace("'","",$nd);
							$nd=str_replace('"',"",$nd);*/
							
							$tt=$ten."</span>";
							
							$nd=str_replace($tt,"",$nd);
							
							$nd=substr($nd,0,300);
							
							$nd=trim($nd);
							
							?>
								<tr>
									<td align="left" >
									
										<?php 
											
											$ten=strip_tags($ten);
											
											$ten=str_replace(":","",$ten);
											
											$ten=trim($ten);
											
											xuat_bm("<div style='margin-left:10px' >".$ten."</div>");
											
										?>
										
									</td>
									<td align="left" >
										
										<div style="margin:10px" >
										<?php xuat_bm("<div style='width:680px;overflow:hidden' >".$nd."</div>"); ?>
										</div>
									</td>
									<td align="center" ><a href="<?php xuat_bm($lk_sua); ?>" class="sua_xoa">Sửa</a></td>
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
			<script type="text/javascript" >
				bien_b_css="khac";
				dc_dd_b_css="table__abc___tr_td_hover_2";
				table_css_2("er");
			</script>
			<?php 
		}
	}
?>