<?php 
	chong_pha_hoai();
?>
<?php 
	$truong_ksp="ksp".$_GET['vt'];
	$truong_ksp_2="sx_ksp".$_GET['vt'];
	$so_jem=$_POST['so_jem'];
	//thongbao("sssss");


		for($i=1;$i<$so_jem;$i++)
		{
			$name="cn___trang_chu____$i";
			$post_name=$_POST[$name];
			//echo $post_name."<hr>";
			$ten_id="ten_id___$i";
			$id=$_POST[$ten_id];
			$tv="UPDATE `san_pham` SET `$truong_ksp` = '$post_name' WHERE `id` ='$id';";
			//echo $tv."<hr>";
			mysql_query($tv);
		}		



		for($i=1;$i<$so_jem;$i++)
		{
			$name="cn___sap_xep____$i";
			$post_name=$_POST[$name];
			//echo $post_name."<hr>";
			$ten_id="ten_id___$i";
			$id=$_POST[$ten_id];
			$tv="UPDATE `san_pham` SET `$truong_ksp_2` = '$post_name' WHERE `id` ='$id';";
			//echo $tv."<hr>";
			mysql_query($tv);
		}		

?>