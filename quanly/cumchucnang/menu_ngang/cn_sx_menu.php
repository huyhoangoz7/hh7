<?php 
	chong_pha_hoai();
?>
<?php 


		for($i=1;$i<21;$i++)
		{
			$name="sx_$i";
			$post_name=$_POST[$name];
			//echo $post_name."<hr>";
			$ten_id="id_$i";
			if(isset($_POST[$ten_id]))
			{
				$id=$_POST[$ten_id];
				$tv="UPDATE `menu_ngang` SET `sap_xep` = '$post_name' WHERE `id` ='$id';";
				//echo $tv."<hr>";
				mysql_query($tv);
			}
		}		
		//thongbao("dung lai");

	
?>