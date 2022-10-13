<?php 
	chong_pha_hoai();
?>
<style type="text/css" >
	ul.menu_ngang
	{
		margin:0;
		padding:0;
		width:990px;
		background:#0099ff;
		height:41px
	}
	ul.menu_ngang a
	{
		text-decoration:none;
	}
	ul.menu_ngang li
	{
		float:left;
		list-style:none;
		background:#0099ff;

	}
	ul.menu_ngang li a
	{
		font-weight:bold;
		display:inline-block;
		border-right:0px solid #0000ff;
		padding:10px 13px;
		color:white
	}
	ul.menu_ngang li a:hover
	{
		background:#0044ff;
		color:white
	}
	ul.menu_ngang ul a 
	{
		padding:8px
	}
	ul.menu_ngang ul 
	{
		position:absolute;
		z-index:10;
		padding:0px;
		margin-top:0px;
		display:none;
		width:170px;
		border:1px solid #0099ff;
		background:white
		
	}
	ul.menu_ngang ul li 
	{
		float:none;
		color:black;
		background:white
	}
	ul.menu_ngang ul li a 
	{
	
		color:black;
		font-weight:normal;
	}
	ul.menu_ngang ul li a:hover 
	{
		color:red;
		background:white
	}
	ul.menu_ngang ul ul
	{
		display:none;margin-left:170px;margin-top:-36px;
		position:absolute;z-index:10;padding:0px;border:1px solid #0099ff
	}
</style>

<ul class="menu_ngang" id="menu_ngang_nt_l1" >
	<li><a href='index.php' >Trang chủ</a> <span style="color:white" >|</span>&nbsp;</li>
		<li><a href='#' >Menu</a> <span style="color:white" >|</span>&nbsp;
			<ul>
				<li><a href='?thamso=them_menu_ngang' >Thêm menu</a></li>
				<li><a href='?thamso=quan_ly_menu_ngang' >Quản lý menu</a></li>
			</ul>
		</li>
		<li><a href='#' >Sản phẩm</a> <span style="color:white" >|</span>&nbsp;
			<ul>
				<li><a href='?thamso=them_san_pham' >Thêm sản phẩm</a></li>
				<li><a href='?thamso=quan_ly_san_pham' >Quản lý sản phẩm</a></li>
				<li><a href='?thamso=quan_ly_san_pham_trang_chu' >Sản phẩm trang chủ</a></li>
				<li><a href='?thamso=ksp_a1' >Khung sản phẩm</a>
					<ul style="width:350px" >
						<li><a href='?thamso=ksp&vt=1' >Khung 1 ( Khung "<?php echo $ten_ksp_1; ?>" )</a></li>
						<li><a href='?thamso=ksp&vt=2' >Khung 2 ( Khung "<?php echo $ten_ksp_2; ?>" )</a></li>
						<li><a href='?thamso=ksp&vt=3' >Khung 3 ( Khung "<?php echo $ten_ksp_3; ?>" )</a></li>
						<li><a href='?thamso=ksp&vt=4' >Khung 4 ( Khung "<?php echo $ten_ksp_4; ?>" )</a></li>
						<li><a href='?thamso=sua_ten_khung_san_pham' >Sửa tên khung sản phẩm </a></li>
						<li><a href='?thamso=sua_ssp_trong_khung' >Sửa số sản phẩm trong khung</a></li>
						<li><a href='?thamso=bt_sx_ksp' >Bật tắt / sắp xếp khung sản phẩm</a></li>
					</ul>
				</li>
				<li><a href="?thamso=hinh_anh_knl" >Hình ảnh khung nhập liệu</a></li>
				<li><a href="?thamso=ssp_td_k_xsp" >Số sản phẩm trên dòng khi xuất sản phẩm</a></li>
			</ul>
		</li>
		<li><a href='#' >Bài viết</a> <span style="color:white" >|</span>&nbsp;
			<ul>
				<li><a href='?thamso=them_tin_tuc' >Thêm bài viết</a></li>
				<li><a href='?thamso=quan_ly_tin_tuc' >Quản lý bài viết</a></li>
				<!--<li><a href='?thamso=quan_ly_du_lieu_mot_tin' >Quản lý bài viết 1 tin</a></li>-->
				<li><a href='?thamso=quan_ly_du_lieu_mot_tin_2' >Quản lý bài viết 1 tin</a></li>
				<li><a href='?thamso=kvb_a1' >Khung văn bản</a>
					<ul style="width:350px" >
						<li><a href='?thamso=kvb&vt=1' >Khung 1 ( Khung "<?php echo $ten_kbv_1; ?>" )</a></li>
						<li><a href='?thamso=kvb&vt=2' >Khung 2 ( Khung "<?php echo $ten_kbv_2; ?>" )</a></li>
						<li><a href='?thamso=kvb&vt=3' >Khung 3 ( Khung "<?php echo $ten_kbv_3; ?>" )</a></li>
						<li><a href='?thamso=kvb&vt=4' >Khung 4 ( Khung "<?php echo $ten_kbv_4; ?>" )</a></li>
						<li><a href='?thamso=bt_sx_kvb' >Bật tắt / sắp xếp khung văn bản</a></li>
					</ul>
				</li>
				<li><a href="?thamso=hinh_anh_knl" >Hình ảnh khung nhập liệu</a></li>
				
			</ul>
		</li>
		<li><a href='#' >Bình luận</a> <span style="color:white" > | </span>
			<ul style="width:250px" >
				<li><a href='?thamso=quan_ly_binh_luan_san_pham' > Quản lý bình luận sản phẩm </a></li>
				<li><a href='?thamso=quan_ly_binh_luan_bai_viet' >Quản lý bình luận bài viết</a></li>
				<li><a href='?thamso=quan_ly_binh_luan_bai_viet_mot_tin' >Quản lý bình luận bài viết một tin</a></li>
				<li><a href='?thamso=bat_hoac_tat_binh_luan' >Bật / tắt bình luận</a></li>
				<li><a href='?thamso=tuy_chinh_binh_luan' >Tùy chỉnh bình luận</a></li>
			</ul>
		</li>
		<li><a href='#' >Trò chuyện</a> <span style="color:white" > | </span>
		
			<ul style="width:250px" >
				<li><a href='?thamso=bat_tat_tro_chuyen' >Bật / tắt trò chuyện</a></li>
				<li><a href='?thamso=ql_tro_chuyen' >Quản lý trò chuyện </a></li>
				<li><a href='?thamso=so_tin_nhan_luu_tru' >Số tin nhắn lưu trữ</a></li>
				<!--<li><a href='?thamso=slltntmg' >Số lần lấy tin nhắn trong 1 giây</a></li>-->
				
			</ul>
		
		</li>
		<li><a href='?thamso=doi_giao_dien' >Giao diện</a> <span style="color:white" > | </span></li>
		<li><a href='#' >Cụm chức năng</a>
			<ul>
				<li><a href='?thamso=quan_ly_san_pham_trang_chu' >Sản phẩm trang chủ</a></li>
				<li><a href='?thamso=thay_doi_banner' >Banner</a></li>
				<li><a href='?thamso=bien_luan_link_menu__qcp'  >Quảng cáo</a>
					<ul style="margin-left:-172px" >
						<li><a href='?thamso=them_quang_cao_phai' >Thêm</a></li>
						<li><a href='?thamso=quan_ly_quang_cao_phai' >Quản lý</a></li>
					</ul>
				</li>
				<li><a href='?thamso=ksp_a1' >Khung sản phẩm</a>
					<ul style="width:342px;margin-left:-344px" >
						<li><a href='?thamso=ksp&vt=1' >Khung 1 ( Khung "<?php echo $ten_ksp_1; ?>" )</a></li>
						<li><a href='?thamso=ksp&vt=2' >Khung 2 ( Khung "<?php echo $ten_ksp_2; ?>" )</a></li>
						<li><a href='?thamso=ksp&vt=3' >Khung 3 ( Khung "<?php echo $ten_ksp_3; ?>" )</a></li>
						<li><a href='?thamso=ksp&vt=4' >Khung 4 ( Khung "<?php echo $ten_ksp_4; ?>" )</a></li>
						<li><a href='?thamso=sua_ten_khung_san_pham' >Sửa tên khung sản phẩm </a></li>
						<li><a href='?thamso=sua_ssp_trong_khung' >Sửa số sản phẩm trong khung</a></li>
						<li><a href='?thamso=bt_sx_ksp' >Bật tắt / sắp xếp khung sản phẩm</a></li>
					</ul>
				</li>
				<li><a href='?thamso=kvb_a1' >Khung văn bản</a>
					<ul style="width:342px;margin-left:-344px" >
						<li><a href='?thamso=kvb&vt=1' >Khung 1 ( Khung "<?php echo $ten_kbv_1; ?>" )</a></li>
						<li><a href='?thamso=kvb&vt=2' >Khung 2 ( Khung "<?php echo $ten_kbv_2; ?>" )</a></li>
						<li><a href='?thamso=kvb&vt=3' >Khung 3 ( Khung "<?php echo $ten_kbv_3; ?>" )</a></li>
						<li><a href='?thamso=kvb&vt=4' >Khung 4 ( Khung "<?php echo $ten_kbv_4; ?>" )</a></li>
						<li><a href='?thamso=bt_sx_kvb' >Bật tắt / sắp xếp khung văn bản</a></li>
					</ul>
				</li>
				<li><a href='?thamso=thay_doi_footer' >Footer</a></li>
				<li><a href="?thamso=hinh_anh_knl" >Hình ảnh khung nhập liệu</a></li>
				<li><a href="?thamso=sua_thong_ke" >Sửa thống kê</a></li>
				<li><a href='?thamso=sxcp' >Bật tắt / sắp xếp các khung cột phải</a></li>
				<li><a href='?thamso=doi_ten_web' >Đổi tên web</a></li>
				<li><a href='?thamso=thay_doi_thong_tin_quan_tri' >Thay đổi thông tin quản trị</a></li>
			</ul>
		</li>
		<li><a href='?thamso=thoat' style='margin-left:119px' >Thoát</a></li>

</ul>


<script type="text/javascript" >
	
	function menu_ngang_nt_b1_a1()
	{
		var id=document.getElementById("menu_ngang_nt_l1");
		var li=id.getElementsByTagName("li");
		for(var i=0;i<li.length;i++)
		{
			li[i].onmouseover=function()
			{
				var ul=this.getElementsByTagName("ul");
				ul[0].style.display="block";
			}
			
			li[i].onmouseout=function()
			{
				var ul=this.getElementsByTagName("ul");
				ul[0].style.display="none";
			}
		}
	}
	
	menu_ngang_nt_b1_a1();
	
</script>