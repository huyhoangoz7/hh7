<?php 
	chong_pha_hoai();
?>
<style type="text/css">
	a.ah { text-decoration: none;  color: #666666; font-weight: bold}
	a.ah:hover { text-decoration: none; color:#a70001; font-weight: bold; font-style: normal; }

</style>
<?php 
	$tv="select * from menu_ngang where id='$_GET[id]'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$ndmt=$tv_2['noi_dung_mo_ta'];
	$lk=$tv_2['link'];
	$loai_menu=$tv_2['loai'];
	$noi_dung=$tv_2['noi_dung'];
	$noi_dung=str_replace("\n","",$noi_dung);
	$noi_dung=str_replace("\r","",$noi_dung);
	$noi_dung=str_replace("\t","",$noi_dung);
	$noi_dung=str_replace("'","\'",$noi_dung);
	
	
	$bt_bl=$tv_2['bat_tat_binh_luan'];
	
?>
<table width="990px" id="er" style="margin-top:6px">
	<tr>
		<td align="right">
			<span class="span__16">Sửa menu ngang</span>
			<!--<a href="?thamso=quan_ly_menu_ngang&trang=<?php //echo $_GET['trang']; ?>" class="nut_dong">
				Đóng
			</a>-->
		</td>
	</tr>
	<tr>
		<td>
			<form action="" method="post" style="margin:0">
				<table width="970px" id="er_2" >
					<tr>
						<td width="120px" ><b>Tên menu : </b></td>
						<td><input style="width:400px;margin:3px" name="ten_menu" value="<?php echo $tv_2['ten']; ?>"></td>
					</tr>
					<tr>
						<td ><b>Cấp độ : </b></td>
						<td>
							<?php 
								function lay_thuoc_menu_abc()
								{
									$id=$_GET['id'];
									$tv="select * from menu_ngang where id='$id' ";
									$tv_1=mysql_query($tv);
									$tv_2=mysql_fetch_array($tv_1);
									$_SESSION['thuoc_menu_abc']=$tv_2['thuoc_menu'];
								}
								lay_thuoc_menu_abc();
								function xac_dinh_menu_cap_duoi___123($id_cha)
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
										if($_SESSION['thuoc_menu_abc']==$tv_2['id'])
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
										$xac_dinh_menu_cap_duoi___123=xac_dinh_menu_cap_duoi___123($tv_2['id']);
										if($xac_dinh_menu_cap_duoi___123=="co")
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
										if($_SESSION['thuoc_menu_abc']==$tv_2['id'])
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
										$xac_dinh_menu_cap_duoi___123=xac_dinh_menu_cap_duoi___123($tv_2['id']);
										if($xac_dinh_menu_cap_duoi___123=="co")
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
							<div style="margin:3px" >
							<?php 
							

								

									if($loai_menu=="san_pham")					{echo "Sản phẩm";}
									if($loai_menu=="tin_tuc")					{echo "Danh sách bài viết";}
									if($loai_menu=="")							{echo "Liên kết";}
									if($loai_menu=="bai_viet_mot_tin")			{echo "Bài viết một tin";}
								
								
							?>
							</div>
						</td>
					</tr>
					<tr>
						<td><b>Liên kết : </b></td>
						<td><input style="width:400px;margin:3px" name="lien_ket" value="<?php echo $lk; ?>" ></td>
					</tr>
					<?php 
						
						//echo $bt_bl."<hr>";
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
									oFCKeditor.Value	= '<?php echo $noi_dung; ?>' ;
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
								- Nội dung này chỉ dùng được cho menu loại <b>sản phẩm</b> và menu loại <b>danh sách bài viết</b>
								</div>
							<textarea style="width:600px;height:70px;margin:3px" name="noi_dung_mo_ta" ><?php echo $ndmt; ?></textarea>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>
							<input type="hidden" name="sua_menu_ngang" value="sua_menu_ngang" >
							<input type="submit" value="Sửa" style="margin:3px" >
							<!--<input type="image" src="../hinhanh_flash/dung_chung/sua.gif" style="border:0px solid red;margin:3px">-->
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