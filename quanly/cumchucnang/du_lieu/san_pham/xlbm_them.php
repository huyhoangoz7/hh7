<?php 
	chong_pha_hoai();
?>
<?php 
	if($_POST['ten']!="")
	{
		$ten_hinh=$_FILES['hinh_anh']['name'];
		if($ten_hinh=="")
		{
			thong_bao_a1("Phải upload cả hình");
		}
	}
	else 
	{
		thong_bao_a1("Không được bỏ trống tên sản phẩm");
	}
	if($_POST['cap_do']=="---")
	{
		thong_bao_a1("Đây không phải là menu sản phẩm");	
	}
?>