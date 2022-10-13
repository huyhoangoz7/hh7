<?php 
	chong_pha_hoai();
	//echo "trang quan ly san pham <hr>";
?>
<style>
	a.thua__link_1:link { font-size: 14px; text-decoration: none;  color: #0b55c4; }
	a.thua__link_1:visited { font-size: 14px; color: #0b55c4; text-decoration: none; }
	a.thua__link_1:hover { font-size: 14px; text-decoration: none; color: #084095;  font-style: normal; }
</style>
<?php 
	
	function tinh_chuoi_or()
	{
		$chuoi_or="";
		if($_GET['tu_khoa']=="Từ khóa tìm kiếm")
		{
			$tu_khoa_ccc="";
		}
		else 
		{
			$tu_khoa_ccc=$_GET['tu_khoa'];
		}
		$mang_tk__abc=explode(" ",$tu_khoa_ccc);
		for($f=0;$f<count($mang_tk__abc);$f++)
		{
			$q=$mang_tk__abc[$f];
			if($q!="")
			{
				$chuoi_or=$chuoi_or."ten like '%$q%' or ";
			}
		}
		if($chuoi_or!="")
		{
			$chuoi_or=substr($chuoi_or,0,-3);
			$chuoi_or=" and ( ".$chuoi_or." ) ";
		}
		return $chuoi_or;
	}
	//echo $chuoi_or."<hr>";
?>
<script type="text/javascript">
	function chuyen_link__ooo(id)
	{
		//alert(id);
		window.location="?thamso=quan_ly_san_pham&cap_do="+id;
	}
</script>

<?php 
	
	function tinh_st___rrr($so_gioi_han)
	{
		$tv="select count(*) from menu_ngang where loai='bai_viet_mot_tin'";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);		
		$st=ceil($tv_2[0]/$so_gioi_han);
		return $st;
	}
	
?>
<?php 
	$ssp_td=1;
	$sd=20;
	$so_gioi_han=$ssp_td*$sd;
	if($_GET['trang']=="")
	{
		$vtbd=0;
	}
	else 
	{
		$vtbd=($_GET['trang']-1)*$so_gioi_han;
	}
	//$chuoi_union__ppp=tinh_chuoi_union__ppp();
	//echo $chuoi_union__ppp;echo "<hr>";
	$st=tinh_st___rrr($so_gioi_han);
	//$tv=$chuoi_union__ppp." limit $vtbd,$so_gioi_han ";
	$tv="select * from menu_ngang where loai='bai_viet_mot_tin' order by id limit $vtbd,$so_gioi_han ";
	$tv_1=mysql_query($tv);
?>
<center>

	<table border="1" style="clear:left;margin:6px" id="er" width="990px" >
		<tr>



			<td width="790px"><b>Tên</b></td>

			<td width="100px" align="center"><b>Sửa</b></td>
			<td width="100px" align="center"><b>Xóa</b></td>
		</tr>
		<?php 
			while($tv_2=mysql_fetch_array($tv_1))
			{
				

				$link_sua="?thamso=sua_menu_ngang&id=$tv_2[id]&trang=$_GET[trang]";
				$link_xoa="?thamso=xoa_menu_ngang&id=$tv_2[id]";
				?>
					<tr>


						<td align="left"><?php echo $tv_2['ten']; ?></td>

						<td align="center">
							<a href="<?php echo $link_sua; ?>" class="sua_xoa" >
								Sửa
							</a>
						</td>
						<td align="center">
							<a href="<?php echo $link_xoa; ?>" class="sua_xoa" >
								Xóa
							</a>
						</td>
					</tr>
				<?php
			}
		?>
		<tr>
			<td colspan="3" align="center">
				<?php 

					xuat_link($st);
				?>
			</td>
		</tr>
	</table>
</center>
<script>
	table_css_2("er");
</script>