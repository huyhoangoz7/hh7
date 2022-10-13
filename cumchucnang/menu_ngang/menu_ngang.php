<?php 
	chong_pha_hoai();
?>

<?php 
	$tv="select count(*) from menu_ngang where thuoc_menu='' ";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$so=$tv_2[0];
?>
<?php 
	function de_quy_mnn_b1($id)
	{	

		$tv_a="select * from menu_ngang where thuoc_menu='$id' order by sap_xep ";
		$tv_a_1=mysql_query($tv_a);
		
		echo "<ul>";
			while($tv_a_2=mysql_fetch_array($tv_a_1))
			{
				$lien_ket=$tv_a_2['link'];
				if($tv_a_2['loai']=="san_pham"){$lien_ket="?thamso=xuat_sp&id=".$tv_a_2['id'];}
				if($tv_a_2['loai']=="tin_tuc"){$lien_ket="?thamso=xuat_tt&id=".$tv_a_2['id'];}
				if($tv_a_2['loai']=="bai_viet_mot_tin"){$lien_ket="?thamso=xuat_mot_tin_2&id=".$tv_a_2['id'];}
				$id_2=$tv_a_2['id'];
				echo "<li>";
					echo "<a href='$lien_ket' >";
						//echo $tv_a_2['ten']." - loai : ".$tv_a_2['loai'];
						//echo $tv_a_2['ten']." - ".$tv_a_2['link'];
						echo $tv_a_2['ten'];
					echo "</a>";
					
					$tv="select count(*) from menu_ngang where thuoc_menu='$id_2' ";
					//echo $tv."<hr>";
					$tv_1=mysql_query($tv);
					$tv_2=mysql_fetch_array($tv_1);
					if($tv_2[0]!=0)
					{
						de_quy_mnn_b1($tv_a_2['id']);
					}
					
				echo "</li>";
			}
		echo "</ul>";			
		
	}
?>
<center>
	<table cellpadding="0" cellspacing="0" >
		<tr>
			<td>
				<ul class="menu_ngang" id="menu_ngang_nt_b1" >
					<li> <a href="index.php">Trang chủ</a> <span class="l_30" > | </span> &nbsp;</li>
					<?php 
						$tv="select * from menu_ngang where thuoc_menu='' order by sap_xep";
						$tv_1=mysql_query($tv);
						$i=1;
						while($tv_2=mysql_fetch_array($tv_1))
						{
							$link=$tv_2['link'];
							if($tv_2['loai']=="san_pham"){$link="?thamso=xuat_sp&id=".$tv_2['id'];}
							if($tv_2['loai']=="tin_tuc"){$link="?thamso=xuat_tt&id=".$tv_2['id'];}
							if($tv_2['loai']=="bai_viet_mot_tin"){$link="?thamso=xuat_mot_tin_2&id=".$tv_2['id'];}
							$id=$tv_2['id'];
							echo "<li>";
								echo "<a href='$link'>";
									echo $tv_2['ten'];
								echo "</a>";
								if($i!=$so)
								{
									echo "<span class='l_30' > | </span> &nbsp;";
								}
								$tv_a="select count(*) from menu_ngang where thuoc_menu='$id' ";
								//echo $tv_a."<hr>";
								$tv_a_1=mysql_query($tv_a);
								$tv_a_2=mysql_fetch_array($tv_a_1);
								if($tv_a_2[0]!=0)
								{
									//echo "<ul>";
										de_quy_mnn_b1($id);
									//echo "</ul>";
									
								}
							echo "</li>";
							$i++;
						}
					?>
				</ul>
			</td>
		</tr>
	</table>
</center>
<script type="text/javascript" >
	
	function menu_ngang_nt_b1_a1()
	{
		var id=document.getElementById("menu_ngang_nt_b1");
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