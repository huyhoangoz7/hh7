<?php 
	if(!isset($bien_bao_mat)){exit();}
	$nd_ckt=$_SERVER['PHP_SELF'];$m_ckt_lllll_l_ll_999=explode("cumchucnang",$nd_ckt);
	$so=count($m_ckt_lllll_l_ll_999);if($so>1){exit();}
	if($bien_bao_mat!="co"){exit();}
?>
<?php 
	class lop_sua_so_tn_lt
	{
		function sua_so_tn_lt()
		{
			$so_tnlt=lay_thong_so("so_tin_nhan_toi_da");
			?>
			<table width="990px" id="er" style="margin-top:6px">
				<tr>
					<td align="right">
						<span class="span__16">Sửa số tin nhắn lưu trữ</span>
					</td>
				</tr>
				<tr>
					<td>
						<center>
							<form action="" method="post">
								<table width="976px" style="margin:6px" id="l_l" >
									<tr>
										<td width="140px">Số tin nhắn lưu trữ : </td>
										<td>
											<input name="stnlt" value="<?php xuat_bm($so_tnlt);?>" style="margin:5px;width:300px;" >
											
											<div style='font-size:14px;margin:5px' >- Khi lượng tin nhắn trò chuyện vượt quá số tin nhắn lưu trữ thì web sẽ xóa tin nhắn cũ	</div>
										</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
										<td>
											<input type="hidden" name="bm_sua_stnlt" value="bm_sua_stnlt" >
											<input type="submit" value="Sửa" style="width:100px;height:30px;margin:5px" >
										</td>
									</tr>
								</table>
							</form>
						</center>
					</td>
				</tr>
			</table>
			<script type="text/javascript" >
				table_css_1("er");
				table_css("l_l");
			</script>
			<?php 
		}
		
		function th_sua_stnlt()
		{			
			?>
				<html>
				<head>

				<meta charset="utf8" >

				<title>Web</title>

				</head>

				<body>
				<?php 
					$stnlt=post_bm("stnlt");

					sua_thong_so($stnlt,"so_tin_nhan_toi_da");

					trangtruoc();
				?>
				</body>
				</html>
				<?php 
					exit();

		}
		
	}
?>