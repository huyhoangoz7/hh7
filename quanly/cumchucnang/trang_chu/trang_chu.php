<?php 
	chong_pha_hoai();
?>

<table width="990px" border="0" >
<tr>
<td valign="top" width="670px" >
<?php 

	xuat_bm("<div class='khung_tieu_de_phan_than_ban_dau' style='margin-top:5px' >");
		xuat_bm("<span>Menu</span>");
	xuat_bm("</div>");
	xuat_bm("<div class='khung_noi_dung_phan_than_ban_dau' >");
		echo "<br>";
		echo '<a href="?thamso=them_menu_ngang" >Thêm menu</a>';
		echo "<br>";
		echo '<a href="?thamso=quan_ly_menu_ngang" >Quản lý menu</a><br>';
		echo '<a href="?thamso=quan_ly_du_lieu_mot_tin_2" >Quản lý bài viết một tin của menu</a><br>';
		echo "<br>";echo "<br>";
	xuat_bm("</div>");
	

	xuat_bm("<div class='khung_tieu_de_phan_than_ban_dau' >");
		xuat_bm("<span>Sản phẩm</span>");
	xuat_bm("</div>");
	xuat_bm("<div class='khung_noi_dung_phan_than_ban_dau' >");
		echo "<br>";
		echo '<a href="?thamso=them_san_pham" >Thêm sản phẩm</a><br>';
		echo '<a href="?thamso=quan_ly_san_pham" >Quản lý sản phẩm</a><br>';
		echo '<a href="?thamso=quan_ly_san_pham_trang_chu" >Sản phẩm trang chủ</a><br>';
		echo '<a href="?thamso=ksp_a1" >Khung sản phẩm</a><br>';
		echo '<a href="?thamso=ssp_td_k_xsp" >Số sản phẩm trên dòng khi xuất sản phẩm</a><br>';
		echo "<br>";
	xuat_bm("</div>");
	

	xuat_bm("<div class='khung_tieu_de_phan_than_ban_dau' >");
		xuat_bm("<span>Bài viết</span>");
	xuat_bm("</div>");
	xuat_bm("<div class='khung_noi_dung_phan_than_ban_dau' >");
		echo "<br>";
		echo '<a href="?thamso=them_tin_tuc" >Thêm bài viết</a><br>';
		echo '<a href="?thamso=quan_ly_tin_tuc" >Quản lý bài viết</a><br>';
		//echo '<a href="?thamso=quan_ly_du_lieu_mot_tin" class="lienket_phanthan">Quản lý bài viết 1 tin</a><br>';
		echo '<a href="?thamso=quan_ly_du_lieu_mot_tin_2" >Quản lý bài viết 1 tin</a><br>';
		echo '<a href="?thamso=kvb_a1" >Khung văn bản</a><br><br>';
	xuat_bm("</div>");
	

	xuat_bm("<div class='khung_tieu_de_phan_than_ban_dau' >");
		xuat_bm("<span>Bình luận</span>");
	xuat_bm("</div>");
	xuat_bm("<div class='khung_noi_dung_phan_than_ban_dau' >");

		xuat_bm("<br>");
				xuat_bm("<a href='?thamso=quan_ly_binh_luan_san_pham' > Quản lý bình luận sản phẩm </a><br>");
				xuat_bm("<a href='?thamso=quan_ly_binh_luan_bai_viet' >Quản lý bình luận bài viết</a><br>");
				xuat_bm("<a href='?thamso=quan_ly_binh_luan_bai_viet_mot_tin' >Quản lý bình luận bài viết một tin</a><br>");
				xuat_bm("<a href='?thamso=bat_hoac_tat_binh_luan' >Bật / tắt bình luận</a><br>");
				xuat_bm("<a href='?thamso=tuy_chinh_binh_luan' >Tùy chỉnh bình luận</a><br><br>");
				
	xuat_bm("</div>");
	
	
	xuat_bm("<div class='khung_tieu_de_phan_than_ban_dau' >");
		xuat_bm("<span>Trò chuyện</span>");
	xuat_bm("</div>");
	xuat_bm("<div class='khung_noi_dung_phan_than_ban_dau' >");

		xuat_bm("<br>");
				xuat_bm("<a href='?thamso=bat_tat_tro_chuyen' >Bật / tắt trò chuyện</a><br>");
				xuat_bm("<a href='?thamso=ql_tro_chuyen' >Quản lý trò chuyện</a><br>");
				xuat_bm("<a href='?thamso=so_tin_nhan_luu_tru' >Số tin nhắn lưu trữ</a><br><br>");
				//xuat_bm("<a href='?thamso=slltntmg' >Số lần lấy tin nhắn trong 1 giây</a><br><br>");
				
	xuat_bm("</div>");
	
	

	xuat_bm("<div class='khung_tieu_de_phan_than_ban_dau' >");
		xuat_bm("<span>Cụm chức năng</span>");
	xuat_bm("</div>");
	xuat_bm("<div class='khung_noi_dung_phan_than_ban_dau' >");

		xuat_bm("<br>");
				//echo '<a href="?thamso=bien_luan_link_menu__httt" class="lienket_phanthan" >Hỗ trợ trực tuyến</a>';
				//echo "<br>";
					echo '<a href="?thamso=thay_doi_banner" >Thay đổi banner</a>';
					echo "<br>";
					echo '<a href="?thamso=bien_luan_link_menu__qcp" c>Quảng cáo</a>';
					echo "<br>";
					
					echo '<a href="?thamso=thay_doi_footer" >Thay đổi footer</a><br>';
					echo '<a href="?thamso=doi_giao_dien" >Đổi giao diện</a><br>';
					echo '<a href="?thamso=hinh_anh_knl" >Hình ảnh khung nhập liệu</a><br>';
					echo '<a href="?thamso=sua_thong_ke" >Sửa thống kê</a><br>';
					//echo '<a href="?thamso=quan_ly_san_pham_trang_chu" class="lienket_phanthan">Sản phẩm trang chủ</a><br>';
					echo '<a href="?thamso=sxcp"  >Bật tắt / sắp xếp các khung cột phải</a><br>';
					echo '<a href="?thamso=doi_ten_web"  >Đổi tên web</a><br>';
					//echo "<br>";
					echo '<a href="?thamso=thay_doi_thong_tin_quan_tri" >Thay đổi thông tin quản trị</a> <br><br>';
				
	xuat_bm("</div>");
				
	
	
	
?>

</td>
<td valign="top" align="center" width="320px" >
	<center>
	<?php 
		include("cumchucnang/thong_ke/khung.php");
		
		include("cumchucnang/trang_chu/khung_san_pham_moi.php");
		
		include("cumchucnang/trang_chu/khung_binh_luan_moi.php");
		
	?>
	</center>
</td>
</tr>
</table>