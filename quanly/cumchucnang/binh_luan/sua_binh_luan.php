<?php 
	if(!isset($bien_bao_mat)){exit();}
	$nd_ckt=$_SERVER['PHP_SELF'];$m_ckt_lllll_l_ll_999=explode("cumchucnang",$nd_ckt);
	$so=count($m_ckt_lllll_l_ll_999);if($so>1){exit();}
	if($bien_bao_mat!="co"){exit();}
?>
<?php 
	class sua_binh_luan extends bat_tat_binh_luan
	{
		function sua_bl()
		{
			$bao_mat=new bao_mat;
			$id=get_bm('id');
			$tv="select * from binh_luan_lllll where id='$id' ";
			$tv_1=mysql_query($tv);
			$tv_2=mysql_fetch_array($tv_1);
			
			$noi_dung_binh_luan=$tv_2['noi_dung'];

			$noi_dung_binh_luan=str_replace("<br />","",$noi_dung_binh_luan);
			$noi_dung_binh_luan=str_replace("<br>","",$noi_dung_binh_luan);
			$noi_dung_binh_luan=str_replace("<br/>","",$noi_dung_binh_luan);
			//$noi_dung_binh_luan=str_replace("<br>","\n",$noi_dung_binh_luan);
			//$noi_dung_binh_luan=str_replace("<br/>","\n",$noi_dung_binh_luan);
			
			$so_lan_xoa=$tv_2['so_lan_xoa'];
			
			$so_lan_xoa=strip_tags($so_lan_xoa);
			
			$so_lan_xoa=str_replace("<","",$so_lan_xoa);
			$so_lan_xoa=str_replace(">","",$so_lan_xoa);
			$so_lan_xoa=str_replace("'","",$so_lan_xoa);
			$so_lan_xoa=str_replace('"',"",$so_lan_xoa);
			
			$so_lan_xoa=$bao_mat->thay_the_noi_dung_binh_luan($so_lan_xoa);
			
			?>
				<form method="post" action="" >
				<table width="990px" id="er" style="margin-top:6px">
				<tr>
					<td align="right">
						<span class="span__16">Sửa bình luận</span>
						<!--<a href="index.php" class="nut_dong">
							Đóng
						</a>-->
					</td>
				</tr>
				<tr>
					<td>
						<div style="margin:10px" >
						<textarea style="width:900px;height:200px;" name="noi_dung" ><?php xuat_binh_luan_bm($noi_dung_binh_luan); ?></textarea>
						<br><br>
						
						Số lần xóa bình luận : <input name="so_lan_xoa" style="width:100px" value="<?php xuat_bm($so_lan_xoa); ?>" >
						
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<input type="hidden" name="bm_sua_binh_luan" value="bm_sua_binh_luan" >
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
		function thuc_hien_sua_binh_luan()
		{
			$bao_mat=new bao_mat;
			$id=get_bm('id');
			
			$noi_dung=post_bm("noi_dung");
			
			$noi_dung=strip_tags($noi_dung);
			
			$binh_luan_hop_le=$bao_mat->kiem_tra_binh_luan($noi_dung);
			
			$noi_dung=$bao_mat->thay_the_noi_dung_binh_luan($noi_dung);	
			
			$noi_dung=nl2br($noi_dung);
			
			
			
			$so_lan_xoa=post_bm("so_lan_xoa");	

				

			
			
			?>
				<html>
				<head>
					<meta charset="utf8" >
					<title>Web</title>
				</head>
				<body>

			<?php 
			
			if($binh_luan_hop_le=="hop_le")
			{
			
			$tv="UPDATE `binh_luan_lllll` SET `noi_dung` = '$noi_dung' , `so_lan_xoa`='$so_lan_xoa'
			
			WHERE `id` ='$id' ";
			
			truy_van_bm($tv);
			trangtruoc();
			}
			else 
			{
				$noi_dung='
		
		- <b>Bình luận không hợp lệ . Bình luận không hợp lệ có thể do các nguyên nhân sau :</b> <br><br><br>
		
		+ Có ký tự không hợp lệ. Ký tự không hợp lệ có thể bao gồm các ký tự bên dưới : <br><br><hr><br>~ , ` , # , $ , % , ^ , & , * , ( , ) , = , | , \ , { , } , [ , ], ; , " ,'." ' ".' < , > , / <br><br><hr><br>
		+ Nội dung bình luận dài quá 1200 ký tự hoặc nhỏ hơn 26 ký tự <br><br>
		+ Nội dung bình luận xuống dòng quá 20 lần <br><br>
		+ Độ dài của từng từ bình luận không được quá 20 ký tự <br><br>
		
		';
		
		thong_bao_a10($noi_dung);	

			}
			?>
				</body>
				</html>
			<?php
			
			
			exit();
		}
	}
?>