<?php 
	chong_pha_hoai();
?>
<table width="990px" id="er" style="margin-top:6px">
	<tr>
		<td align="right" >
			<span class="span__16">Thêm bài viết</span>
			<!--<a href="?thamso=bien_luan_them_du_lieu__www" class="nut_dong">
				Đóng
			</a>-->
		</td>
	</tr>
	<tr>
		<td>
			<form action="" method="post" enctype="multipart/form-data">
				<table width="976px" border="0" id="er_2" style="margin:6px" >
					<tr>
						<td width="150px">
							<b>Cấp độ :</b>
						</td>
						<td>
							<?php 
								function xac_dinh_menu_cap_duoi($id_cha)
								{
									$tv="select count(*) from menu_ngang where thuoc_menu='$id_cha'";
									$tv_1=mysql_query($tv);
									$tv_2=mysql_fetch_row($tv_1);
									if($tv_2[0]==0)
									{
										return "khong";
									}
									else 
									{
										return "co";
									}
								}
								function de_quy_menu__fff($id_cha,$ten_danh_dau__kkk,$kt="")
								{
									$kt=$kt."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
									$tv="select * from menu_ngang where thuoc_menu='$id_cha'";
									$tv_1=mysql_query($tv);
									while($tv_2=mysql_fetch_array($tv_1))
									{
										if($_SESSION["cap_do_tin_tuc"]==$tv_2['id'])
										{
											$select="selected";
										}
										else 
										{
											$select="";
										}
										$ten=$tv_2['ten'];
										$gia_tri_tuy_chon=$tv_2['id'];
										if($tv_2['loai']!="tin_tuc"){$ten="---";$gia_tri_tuy_chon="---";}
										echo "<option value='$gia_tri_tuy_chon' $select >";
											echo $kt;	
											echo $ten;												
										echo "</option>";
										$xac_dinh_menu_cap_duoi=xac_dinh_menu_cap_duoi($tv_2['id']);
										if($xac_dinh_menu_cap_duoi=="co")
										{
											de_quy_menu__fff($tv_2['id'],$ten_danh_dau__kkk,$kt);
										}
									}	
								}
							?>
							<?php 
								$d1=0;
								echo "<select name='cap_do' style='margin:3px' >";
									$tv="select * from menu_ngang where thuoc_menu=''";
									$tv_1=mysql_query($tv);
									while($tv_2=mysql_fetch_array($tv_1))
									{
										if($_SESSION["cap_do_tin_tuc"]==$tv_2['id'])
										{
											$select="selected";
										}
										else 
										{
											$select="";
										}
										$gia_tri_tuy_chon=$tv_2['id'];
										$ten=$tv_2['ten'];
										if($tv_2['loai']!="tin_tuc"){$ten="---";$gia_tri_tuy_chon="---";}
										if($tv_2['loai']=="tin_tuc" and $d1==0)
										{
											if(!isset($_SESSION["cap_do_tin_tuc"]))
											{
												$select="selected";
												$d1=1;
											}
										}
										echo "<option value='$gia_tri_tuy_chon' $select >";
											echo $ten;						
										echo "</option>";
										$xac_dinh_menu_cap_duoi=xac_dinh_menu_cap_duoi($tv_2['id']);
										if($xac_dinh_menu_cap_duoi=="co")
										{
											de_quy_menu__fff($tv_2['id'],$ten_danh_dau__kkk);
										}
									}
								echo "</select>";
							?>
						</td>
					</tr>
					<tr>
						<td>
							<b>Tiêu đề :</b>
						</td>
						<td>
							<input size="70" name="ten" style="margin:3px" >
						</td>
					</tr>
					<tr>
						<td>
							<b>Hình ảnh :</b>
						</td>
						<td>
							<input name="hinh_anh" type="file" >
						</td>
					</tr>
					<?php 
						$bt_bl=lay_session_bm("bt_bl_bv");
						hll_btbl_hb("
						
						style :: margin:5px |
						ten :: bat_tat_binh_luan |
						bat_tat :: $bt_bl 
						
						");
					?>
					<tr>
						<td colspan="2">
							<center><b>Nội dung</b></center>
							<br>
							<center>
								<script type="text/javascript">
									var oFCKeditor = new FCKeditor('noi_dung') ;
									//oFCKeditor.BasePath	= "fckeditor/" ;
									oFCKeditor.Height	= 550 ;
									oFCKeditor.Width	= 960 ;
									oFCKeditor.Value	= '' ;
									oFCKeditor.Config["EnterMode"]= "br" ;
									oFCKeditor.Create() ;
								</script>
							</center>
						</td>
					</tr>
					<tr>
						<td>&nbsp;
							
						</td>
						<td>
							<input type="hidden" name="them_tin_tuc" value="them_tin_tuc">
							<!--<input type="submit" value="Chấp nhận">-->
							<input type="image" src="../hinhanh_flash/dung_chung/them_du_lieu.gif" style="border:0px solid red">
						</td>
					</tr>
				</table>
			</form>
		</td>
	</tr>
</table>
<script>
	table_css_1("er");
	table_css("er_2");
</script>