<?php 
	if(!isset($bien_bao_mat)){exit();}
	$nd_ckt=$_SERVER['PHP_SELF'];$m_ckt_lllll_l_ll_999=explode("cumchucnang",$nd_ckt);
	$so=count($m_ckt_lllll_l_ll_999);if($so>1){exit();}
	if($bien_bao_mat!="co"){exit();}
?>
<?php 
	class lop_sua_tro_chuyen extends lop_sua_so_tn_lt
	{
		function sua_tn_tc()
		{
			$id=get_bm('id');
			$tv="select * from tro_chuyen_lllll where id='$id' ";
			$tv_1=mysql_query($tv);
			$tv_2=mysql_fetch_array($tv_1);

			
			$nd=$tv_2['noi_dung'];
			$m=explode("</span>",$nd);
			$ten=$m[0];
			$phan_cu=$ten."</span>";
			$nd=str_replace($phan_cu,"",$nd);
			$nd=substr($nd,0,300);
			$nd=trim($nd);
			
			?>
				<form method="post" action="" >
				<table width="990px" id="er" style="margin-top:6px">
				<tr>
					<td align="right">
						<span class="span__16">Sửa</span>
					</td>
				</tr>
				<tr>
					<td>
						<div style="margin:10px" >
						

						<script type="text/javascript">									
							var oFCKeditor = new FCKeditor('noi_dung') ;
							oFCKeditor.ToolbarSet	= 'noi_dung_ngan' ;
							//oFCKeditor.BasePath	= "fckeditor/" ;
							oFCKeditor.Height	= 150 ;
							oFCKeditor.Width	= 900 ;
							oFCKeditor.Value	= '<?php echo $nd; ?>' ;
							oFCKeditor.Config["EnterMode"]= "br" ;
							oFCKeditor.Create() ;
						</script>
						<br><br>
						Tên : 
						<?php 
						
							$ten=strip_tags($ten);
											
							$ten=str_replace(":","",$ten);
							
							$ten=trim($ten);
							
							xuat_bm($ten);
						?>
						<br><br>
						<input type="hidden" name="phan_cu" value='<?php echo $phan_cu; ?>' >

						</div>
					</td>
				</tr>
				<tr>
					<td>
						<input type="hidden" name="bm_sua_tn_tc" value="bm_sua_tn_tc" >
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
		function th_sua_tn_tc()
		{

			$id=get_bm('id');
			
			$noi_dung=post_bm("noi_dung");
			
			$noi_dung=trim($noi_dung);
			
			$phan_cu=post_bm("phan_cu");			
			
			$noi_dung=$phan_cu." ".$noi_dung; 			
			
			?>
				<html>
				<head>
					<meta charset="utf8" >
					<title>Web</title>
				</head>
				<body>

			<?php 
			
			$tv="UPDATE `tro_chuyen_lllll` SET `noi_dung` = '$noi_dung' 
			
			WHERE `id` ='$id' ";
			
			truy_van_bm($tv);
			trangtruoc();

			?>
				</body>
				</html>
			<?php
			
			
			exit();
		}
	}
?>