<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 

	function dem_so_binh_luan_san_pham()
	{
		$id_sp=get_bm("id");
		$r_tv="select count(*) from binh_luan_lllll where loai_menu='san_pham' and dia_chi_so='$id_sp' ";
		$r_tv_1=mysql_query($r_tv);
		$r_tv_2=mysql_fetch_row($r_tv_1);
		return $r_tv_2[0];
	}
	
	function tinh_so_trang_blsp($so_gioi_han)
	{
		$so=dem_so_binh_luan_san_pham();
		$st=ceil($so/$so_gioi_han);
		return $st;
	}
	
?>
<?php 
	$id_sp=get_bm("id");
	$trang=get_bm("trang");
	if($trang=="sai"){$trang=1;}
	
	
	
	$so_binh_luan=dem_so_binh_luan_san_pham();
	
	$so_gioi_han=10;
	if($_GET['trang']=="")
	{
		$vtbd=0;
	}
	else 
	{
		$vtbd=($_GET['trang']-1)*$so_gioi_han;
	}
	
	$st=tinh_so_trang_blsp($so_gioi_han);
	
	if($chuc_nang_binh_luan_san_pham=="bat")
	{
		if($so_binh_luan!=0)
		{
			
			$cach_hien_thi_binh_luan=lay_thong_so('cach_hien_thi_binh_luan');
			
			$sx_l="";
			
			if($cach_hien_thi_binh_luan=="moi_truoc_cu_sau")
			{
				$sx_l=" desc ";
			}
			
			$tv="select * from binh_luan_lllll where loai_menu='san_pham' and dia_chi_so='$id_sp' order by id $sx_l limit $vtbd,$so_gioi_han ";
			
			//xuat_bm($tv);xuat_bm("<hr>");
			
			$tv_1=truy_van_bm($tv);
			

			
			xuat_bm("<br>");
			xuat_bm("<div style='width:730px;text-align:left;font-size:15px;margin-top:4px' >");
			

			
			while($tv_2=mysql_fetch_array($tv_1))
			{
				$lien_ket_xoa_bl_sp="?thamso=xoa_binh_luan_sp&id=".$tv_2['id']."&id_sp=".$id_sp."&trang=".$trang;
				

				
				xuat_bm("<div class='khung_ll_30' >");
				xuat_binh_luan_bm($tv_2['noi_dung']);
				xuat_bm("<br><br>");
				xuat_bm("<a href='$lien_ket_xoa_bl_sp' class='xoa_binh_luan'  >Xóa</a>");
				xuat_bm("<br style='clear:both;' ><br>");
				xuat_bm("</div>");
				//xuat_bm("<hr>");
				//xuat_bm("<br><br>");

			}
			
			xuat_bm("</div>");
			xuat_link($st);
			xuat_bm("<br>");
		}

	}
?>