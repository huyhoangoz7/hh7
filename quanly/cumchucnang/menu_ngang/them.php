<?php 
	chong_pha_hoai();
	//echo "chao <hr>";
?>
<style type="text/css">
	a.ah { text-decoration: none;  color: #666666; font-weight: bold}
	a.ah:hover { text-decoration: none; color:#a70001; font-weight: bold; font-style: normal; }

</style>

<table width="990px" id="er" style="margin-top:6px">
	<tr>
		<td align="right" >
			<span class="span__16">Thêm menu</span>
			<!--<a href="index.php" class="nut_dong">
				Đóng
			</a>-->
		</td>
	</tr>
	<tr>
		<td>
			<form action="" method="post" style="margin:0">
				<table width="970px" id="er_2" style="margin:6px" >
					<tr>
						<td width="120px"><b>Tên menu : </b></td>
						<td><input style="width:400px;margin:3px" name="ten_menu" ></td>
					</tr>
					<tr>
						<td ><b>Cấp độ : </b></td>
						<td>
							<?php 
								function xac_dinh_menu_con__123($id_cha)
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
									$tv="select * from menu_ngang where thuoc_menu='$id_cha' order by id";
									$tv_1=mysql_query($tv);
									while($tv_2=mysql_fetch_array($tv_1))
									{
										if($_SESSION['cap_do']==$tv_2['id'])
										{
											$select="selected";
										}
										else 
										{
											$select="";
										}
										echo "<option value='$tv_2[id]' $select >";
											echo $kt;	
											echo $tv_2['ten'];												
										echo "</option>";
										$xac_dinh_menu_con__123=xac_dinh_menu_con__123($tv_2['id']);
										if($xac_dinh_menu_con__123=="co")
										{
											de_quy_menu__fff($tv_2['id'],$ten_danh_dau__kkk,$kt);
										}
									}	
								}
							?>
							<?php 
								echo "<select name='cap_do' style='margin:3px' > ";
									echo "<option value=''>";
										echo "Cấp đầu";
									echo "</option>";
									$tv="select * from menu_ngang where thuoc_menu='' order by id";
									$tv_1=mysql_query($tv);
									while($tv_2=mysql_fetch_array($tv_1))
									{
										if($_SESSION['cap_do']==$tv_2['id'])
										{
											$select="selected";
										}
										else 
										{
											$select="";
										}
										echo "<option value='$tv_2[id]' $select >";
											echo $tv_2['ten'];						
										echo "</option>";
										$xac_dinh_menu_con__123=xac_dinh_menu_con__123($tv_2['id']);
										if($xac_dinh_menu_con__123=="co")
										{
											de_quy_menu__fff($tv_2['id'],$ten_danh_dau__kkk);
										}
									}
								echo "</select>";
							?>
						</td>
					</tr>
					<tr>
						<td><b>Loại : </b></td>
						<td>
							<script type="text/javascript" >
								function ham_a19(gt)
								{
									var id=document.getElementById("nd");
									
									if(gt!="bai_viet_mot_tin")
									{
										id.style.display="none";
									}
									else 
									{
										id.style.display="block";
									}
								}
							</script>
							<?php 
								
					
							
								$a_1="";$a_2="";$a_3="";$a_4="";
								
								if(isset($_SESSION['loai_menu']))
								{
								
									if($_SESSION['loai_menu']=="san_pham")					{$a_1="selected";$a_2="";$a_3="";$a_4="";}
									if($_SESSION['loai_menu']=="tin_tuc")					{$a_1="";$a_2="selected";$a_3="";$a_4="";}
									if($_SESSION['loai_menu']=="")							{$a_1="";$a_2="";$a_3="selected";$a_4="";}
									if($_SESSION['loai_menu']=="bai_viet_mot_tin")			{$a_1="";$a_2="";$a_3="";$a_4="selected";}
									
								}
							?>
							<select style='margin:3px' name="loai_menu" >
								<option value="san_pham" <?php echo $a_1;?> >Sản phẩm</option>
								<option value="tin_tuc" <?php echo $a_2;?> >Danh sách bài viết</option>
								<option value="bai_viet_mot_tin" <?php echo $a_4;?> >Bài viết một tin</option>
								<option value="" <?php echo $a_3;?> >Liên kết</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><b>Liên kết : </b></td>
						<td><input style="width:400px;margin:3px" name="lien_ket" ></td>
					</tr>
					<?php 
						$c_a1="";
						$c_a2="";
						if(!isset($_SESSION['loai_menu']))
						{
						
							
							$c_a1="style='display:none'";
							
						}
						else 
						{
							if($_SESSION['loai_menu']!="bai_viet_mot_tin")
							{
								$c_a1="style='display:none'";
							}								
							if($_SESSION['loai_menu']=="bai_viet_mot_tin")
							{
								$c_a2="style='display:none'";
							}
						}
					?>
					<?php 
						$bt_bl=lay_session_bm("bt_bl_bv_mt");
						hll_btbl_hb("
						
						style :: margin:5px |
						ten :: bat_tat_binh_luan |
						bat_tat :: $bt_bl |
						loai :: bai_viet_mot_tin
						
						");
					?>
					<tr >
						<td valign="top" ><b>Nội dung : </b></td>
						<td>
							<div style="margin:3px"  >
							<div <?php echo $c_a2; ?> >
							- Phần nội dung này chỉ được sử dụng đối với menu có loại là <b>Bài viết một tin</b> 
							
							</div>
						
							<div id="nd"  >
							<br>
							<center>
								<script type="text/javascript">
									var oFCKeditor = new FCKeditor('noi_dung') ;
									//oFCKeditor.BasePath	= "fckeditor/" ;
									oFCKeditor.Height	= 550 ;
									oFCKeditor.Width	= 820 ;
									oFCKeditor.Value	= '' ;
									oFCKeditor.Config["EnterMode"]= "br" ;
									oFCKeditor.Create() ;
								</script>
							</center>
							</div>
							</div>
						</td>
					</tr>
					<tr>
						<td><b>Nội dung mô tả : </b><br></td>
						<td>
							<div style='margin:3px;' >
								- Nội dung này nằm trong thẻ meta có <b>name</b> là <b>description</b>
								<br>
								- Nội dung này chỉ được sử dụng đối với menu có loại là <b>Sản phẩm</b> và menu loại <b>Danh sách bài viết</b>
								</div>
							<textarea style="width:600px;height:70px;margin:3px" name="noi_dung_mo_ta" ></textarea>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>
							<input type="hidden" name="them_menu_ngang" value="them_menu_ngang"  >
							<!--<input type="submit" value="Thêm">-->
							<input type="image" src="../hinhanh_flash/dung_chung/them.gif" style="border:0px solid red;_margin-bottom:-4px;margin:3px" >
						</td>
					</tr>
				</table>
			</form>
			<!--<br>
			<b style="color:black;margin-left:5px">Xem thêm</b> : 
			<a href="?thamso=mot_so_menu_ngang_duoc_ho_tro" target="_blank" class="ah" >Một số liên kết menu ngang được hỗ trợ</a>
			<br /><br />-->
		</td>
	</tr>
</table>
<script>
	table_css_1("er");
	table_css("er_2");
</script>