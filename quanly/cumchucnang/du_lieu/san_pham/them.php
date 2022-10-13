<?php 
	chong_pha_hoai();
?>
<table width="990px" id="er" style="margin-top:6px">
	<tr>
		<td align="right">
			<span class="span__16">Thêm sản phẩm</span>
			<!--<a href="index.php" class="nut_dong">
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
										if($_SESSION[$ten_danh_dau__kkk."cap_do___kkk"]==$tv_2['id'])
										{
											$select="selected";
										}
										else 
										{
											$select="";
										}
										$ten=$tv_2['ten'];
										$gia_tri_tuy_chon=$tv_2['id'];
										if($tv_2['loai']!="san_pham"){$ten="---";$gia_tri_tuy_chon="---";}
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
										if($_SESSION[$ten_danh_dau__kkk."cap_do___kkk"]==$tv_2['id'])
										{
											$select="selected";
										}
										else 
										{
											$select="";
										}
										$gia_tri_tuy_chon=$tv_2['id'];
										$ten=$tv_2['ten'];
										if($tv_2['loai']!="san_pham"){$ten="---";$gia_tri_tuy_chon="---";}
										if($tv_2['loai']=="san_pham" and $d1==0)
										{
											if(!isset($_SESSION[$ten_danh_dau__kkk."cap_do___kkk"]))
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
							<b>Tên :</b>
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
							<input name="hinh_anh" type="file" style="margin:3px" >
						</td>
					</tr>
					<tr>
						<td>
							<b>Loại giá bán : </b>
						</td>
						<td>
							<?php 
								$e_1="";$e_2="";
								if(isset($_SESSION['loai_gia']))
								{
									if($_SESSION['loai_gia']=="lien_he")	{$e_2="selected";}
								}
							?>
							<select name="loai_gia" style="margin:3px" >
								<option value="" <?php echo $e_1; ?> >Số</option>
								<option value="lien_he" <?php echo $e_2; ?> >Liên hệ</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<b>Giá bán : </b>
						</td>
						<td>
							<input size="70" name="gia" style="margin:3px" >
						</td>
					</tr>
					<tr>
						<td>
							<b>Trang chủ : </b>
						</td>
						<td>
							<select name="trang_chu" style="margin:3px" >
								<option value="khong">Không</option>
								<option value="co">Có</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<b>Khung sản phẩm : </b>
						</td>
						<td>
							<?php 
								$q_1="";$q_2="";$q_3="";$q_4="";$q_5="";
								if(isset($_SESSION['khung_san_pham']))
								{
									if($_SESSION['khung_san_pham']=="khong")	{$q_1="selected";}
									if($_SESSION['khung_san_pham']=="1")	{$q_2="selected";}
									if($_SESSION['khung_san_pham']=="2")	{$q_3="selected";}
									if($_SESSION['khung_san_pham']=="3")	{$q_4="selected";}
									if($_SESSION['khung_san_pham']=="4")	{$q_5="selected";}
								}
							?>
							<select name="khung_san_pham" style="margin:3px" >
								<option value="khong" <?php echo $q_1; ?>>Không</option>
								<option value="1" <?php echo $q_2; ?> >Khung 1</option>
								<option value="2"<?php echo $q_3; ?> >Khung 2</option>
								<option value="3" <?php echo $q_4; ?> >Khung 3</option>
								<option value="4" <?php echo $q_5; ?> >Khung 4</option>
							</select>
						</td>
					</tr>
					<?php 
						$bt_bl=lay_session_bm("bt_bl_sp");
						hll_btbl_hb("
						
						style :: margin:5px |
						ten :: bat_tat_binh_luan |
						bat_tat :: $bt_bl 
						
						");
					?>
					<tr>
						<td>
							<b>Nội dung ngắn : </b>
						</td>
						<td>
							<div style="margin:3px" >	
								<script type="text/javascript">									
									var oFCKeditor = new FCKeditor('noi_dung_ngan') ;
									oFCKeditor.ToolbarSet	= 'noi_dung_ngan' ;
									//oFCKeditor.BasePath	= "fckeditor/" ;
									oFCKeditor.Height	= 170 ;
									oFCKeditor.Width	= 700 ;
									oFCKeditor.Value	= '' ;
									oFCKeditor.Config["EnterMode"]= "br" ;
									oFCKeditor.Create() ;
								</script>
							</div>
						</td>
					</tr>
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
							<input type="hidden" name="them_san_pham" value="them_san_pham">
							<input type="image" src="../hinhanh_flash/dung_chung/them_du_lieu.gif" style="border:0px solid red;margin:3px">
			
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