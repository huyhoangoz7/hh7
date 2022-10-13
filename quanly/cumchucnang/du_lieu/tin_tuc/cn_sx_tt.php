<?php 
	chong_pha_hoai();
?>
<?php 
		for($i=1;$i<11;$i++)
		{
			$name="sx_$i";
			$post_name=$_POST[$name];
			$ten_id="id_$i";
			if(isset($_POST[$ten_id]))
			{
			$id=$_POST[$ten_id];
			
				$tv="UPDATE `tin_tuc` SET `sap_xep` = '$post_name' WHERE `id` ='$id';";
				//echo $tv."<hr>";
				mysql_query($tv);
				
			}
		}		
	
?>