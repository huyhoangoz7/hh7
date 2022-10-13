<?php 
	chong_pha_hoai();
?>
<?php 
	$tv="select * from san_pham where id='$_GET[id]'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$link_hinh="../hinhanh_flash/san_pham/".$tv_2['hinh_anh'];
	$noi_dung=$tv_2['noi_dung'];
	$noi_dung=str_replace("\n","",$noi_dung);
	$noi_dung=str_replace("\r","",$noi_dung);
	$noi_dung=str_replace("\t","",$noi_dung);
	$noi_dung=str_replace("'","\'",$noi_dung);
	
	$noi_dung_ngan=$tv_2['noi_dung_ngan'];
	$noi_dung_ngan=str_replace("\n","",$noi_dung_ngan);
	$noi_dung_ngan=str_replace("\r","",$noi_dung_ngan);
	$noi_dung_ngan=str_replace("\t","",$noi_dung_ngan);
	$noi_dung_ngan=str_replace("'","\'",$noi_dung_ngan);
?>
<table width="990px" id="er" style="margin-top:6px">
	<tr>
		<td align="right" >
			<span class="span__16">Sửa sản phẩm</span>
			<?php 
				switch($_GET['ts_dong'])
				{
					case "quan_ly_san_pham_trang_chu":
						$link_dong="?thamso=quan_ly_san_pham_trang_chu&trang=$_GET[trang]";
					break;
					default:
						$link_dong="?thamso=quan_ly_san_pham&cap_do=$_GET[cap_do]&tu_khoa=$_GET[tu_khoa]&trang=$_GET[trang]";
				}
			?>
			<!--<a href="<?php //echo $link_dong; ?>" class="nut_dong">
				Đóng
			</a>-->
		</td>
	</tr>
	<tr>
		<td>
			<form action="" method="post" enctype="multipart/form-data">
				<table width="976px" border="0" style="clear:left;margin:6px" id="er_2"  >
					<tr>
						<td>
							<b>Tên :</b>
						</td>
						<td>
							<input size="70" name="ten" value="<?php echo $tv_2['ten']; ?>" style='margin:3px' >
						</td>
					</tr>
					<tr>
						<td>
							<b>Hình ảnh :</b>
						</td>
						<td>
							<img src="<?php echo $link_hinh; ?>" border="0" width="170px" >
							<br>
							<input name="hinh_anh" type="file" style='margin:3px' >
							<input type="hidden" name="hidden_hinh_anh" value="<?php echo $tv_2['hinh_anh']; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<b>Loại giá bán : </b>
						</td>
						<td>
							<?php 
								$e_1="";$e_2="";

									if($tv_2['loai_gia']=="lien_he")	{$e_2="selected";}
								
							?>
							<select name="loai_gia" style="margin:3px" style='margin:3px' >
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
							<input size="70" name="gia" value="<?php echo $tv_2['gia_ban']; ?>" style='margin:3px' >
						</td>
					</tr>
					<tr>
						<td>
							<b>Trang chủ : </b>
						</td>
						<td>
							<?php
								//echo $tv_2['trang_chu'];echo "<hr>"; 
								if($tv_2['trang_chu']=="co")
								{
									$abc="selected";
								}
							?>
							<select name="trang_chu" style='margin:3px' >
								<option value="khong">Không</option>
								<option value="co" <?php echo $abc; ?> >Có</option>
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

								if($tv_2['ksp1']=="co"){$q_2="selected";}
								if($tv_2['ksp2']=="co"){$q_3="selected";}
								if($tv_2['ksp3']=="co"){$q_4="selected";}
								if($tv_2['ksp4']=="co"){$q_5="selected";}
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
						$bt_bl=$tv_2['bat_tat_binh_luan'];
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
									oFCKeditor.Value	= '<?php echo $noi_dung_ngan; ?>' ;
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
									oFCKeditor.Value	= '<?php echo $noi_dung; ?>' ;
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
							<input type="hidden" name="sua_san_pham" value="sua_san_pham">
							<!--<input type="submit" value="Chấp nhận">-->
							<input type="submit" value="Sửa" style="width:150px;height:50px;font-size:24px;margin:3px" >
							<!--<input type="image" src="../hinhanh_flash/dung_chung/sua_du_lieu.gif" style="border:0px solid red">-->
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