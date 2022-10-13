<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 

	$tro_chuyen=lay_thong_so('tro_chuyen');
	if($tro_chuyen=="bat")
	{


		
		if(!isset($_SESSION['trang_tro_chuyen_hien_tai']))
		{
			$trang_tro_chuyen_hien_tai=1;
			$_SESSION['trang_tro_chuyen_hien_tai']=1;
		}
		else 
		{
			$_SESSION['trang_tro_chuyen_hien_tai']=$_SESSION['trang_tro_chuyen_hien_tai']+1;
			$trang_tro_chuyen_hien_tai=$_SESSION['trang_tro_chuyen_hien_tai'];
			
		}
		//echo $_SESSION['trang_tro_chuyen_hien_tai']."<hr>";
		//echo $trang_tro_chuyen_hien_tai;echo "<hr>";
		
		
		//$url_hien_tai="http://".$_SERVER['HTTP_HOST']."/".$_SERVER['REQUEST_URI'];
		
		//$_SESSION['url_tro_chuyen_hien_tai']=$url_hien_tai;
		
		//xuat_bm($url_hien_tai);

		$trang_thai_khung_tro_chuyen=lay_session_bm("trang_thai_khung_tro_chuyen");
		
		if($trang_thai_khung_tro_chuyen=="sai")
		{
			tao_session_bm("trang_thai_khung_tro_chuyen","1");
			$trang_thai_khung_tro_chuyen="1";
		}
		
		
		
		
		
		$style_httc="display:none;";
		if($trang_thai_khung_tro_chuyen=="1"){$style_httc="display:none;";}
		if($trang_thai_khung_tro_chuyen=="2"){$style_httc="display:block;";}
		
		$style_httc_2="width:260px;height:5%;top:95%;";
		if($trang_thai_khung_tro_chuyen=="1"){$style_httc_2="width:260px;height:5%;top:95%;";}
		if($trang_thai_khung_tro_chuyen=="2"){$style_httc_2="width:260px;height:5%;top:45%;";}

		$ghi_chu="";
		
		

		$ntc_csdl=lay_thong_so('nguoi_tro_chuyen');
		if($ntc_csdl>10000)
		{
			sua_thong_so_2("1","nguoi_tro_chuyen");
			$ntc_csdl=1;
		}
		
		
		$session_nguoi_tro_chuyen=lay_session_bm("nguoi_tro_chuyen");
		
		//xuat_bm($session_nguoi_tro_chuyen."<hr>");

		if($session_nguoi_tro_chuyen=="sai")
		{
			tao_session_bm("nguoi_tro_chuyen",$ntc_csdl);
			$session_nguoi_tro_chuyen=lay_session_bm("nguoi_tro_chuyen");
			
			$so=$ntc_csdl+1;
		
			sua_thong_so_2($so,"nguoi_tro_chuyen");
			
			$ghi_chu=$ghi_chu."<div style='font-size:13px;padding:16px 0px;width:200px;border-top:0px solid red;border-left:0px solid red;border-right:0px solid red' class='ndk___456_bc2' >
			
			- Lưu ý : khoảng hơn 2 giây thì web mới nhận tin nhắn 1 lần
			
			</div>";
			
			$ghi_chu=$ghi_chu."<div style='font-size:13px;padding:16px 0px;width:200px;border-top:0px solid red;border-left:0px solid red;border-right:0px solid red' class='ndk___456_bc2' >
			
			- Để xem tin nhắn mới gửi thì kéo hoặc để thanh trượt của khung trò chuyện lên vị trí đầu
			
			</div>";

			$ghi_chu=$ghi_chu."<div style='padding:16px 0px;width:200px;border-top:0px solid red;border-left:0px solid red;border-right:0px solid red' class='ndk___456_bc2' >
			<b><span class='l_31' >nlw</span></b> có nghĩa là người lướt web </div>";
			
		}
		
		
		
		$nguoi_tro_chuyen="nlw ".$session_nguoi_tro_chuyen;
		
	?>

	<?php 
		$tv="select max(id) from tro_chuyen_lllll ";
		$tv_1=truy_van_bm($tv);
		$tv_2=mysql_fetch_array($tv_1);
		//xuat_bm($tv_2[0]."<hr>");
		tao_session_bm("id_tro_chuyen_lon_nhat",$tv_2[0]);
	?>  


	<script type="text/javascript" >
		
		
		var tg_tc=0;
		
		//var url_hien_tai="<?php xuat_bm($url_hien_tai); ?>";
		
		var trang_tro_chuyen_hien_tai="<?php xuat_bm($trang_tro_chuyen_hien_tai);?>";
		
		var trang_tro_chuyen_hien_tai_2="";
		
		
		
		var ndm2="";
		
		var go_ban_phim_lll="khong";
		
		<?php 
			if($trang_thai_khung_tro_chuyen=="1")
			{
				xuat_bm('var so_bt_tro_chuyen="1";');
			}
			else 
			{
				xuat_bm('var so_bt_tro_chuyen="2";');
			}
		?>
		//var so_bt_tro_chuyen="1";
		
		var bam_vao_khung_gvb="khong";
		
		function ajax_doi_trang_thai_khung_tro_chuyen()
		{
			var xmlhttp = new XMLHttpRequest(); 
			xmlhttp.open('GET', 'ajax/tro_chuyen/doi_trang_thai_khung_tro_chuyen.php', false); 
			xmlhttp.send(null);
			//var kq=xmlhttp.responseText;
		}
		
		function bt_tc()
		{
			var id=lay_id("tc_2");
			var id_tc=lay_id("tro_chuyen");
			
			if(so_bt_tro_chuyen=="1"){id.style.display="block";id_tc.style.top="45%";}
			if(so_bt_tro_chuyen=="2"){id.style.display="none";id_tc.style.top="95%";}
			
			if(so_bt_tro_chuyen=="1"){so_bt_tro_chuyen="2";}else{so_bt_tro_chuyen="1";}
			
			bam_vao_khung_gvb='khong';
			
			ajax_doi_trang_thai_khung_tro_chuyen();
			
			//viet_khung(so_bt_tro_chuyen);
			
		}
		
		function ham_bam_vao_khung_gvb()
		{
			setTimeout(function(){bam_vao_khung_gvb='co';},100);
		}
		
		function ajax_tro_chuyen(nd)
		{
			var xmlhttp = new XMLHttpRequest(); 
			xmlhttp.open('GET', 'ajax/tro_chuyen/gui_tin_nhan_tro_chuyen.php?nd='+nd, false); 
			xmlhttp.send(null);
			//var kq=xmlhttp.responseText;
		}
		
		function lay_tin_moi_ajax()
		{
			var xmlhttp_2 = new XMLHttpRequest(); 
			xmlhttp_2.open('GET', 'ajax/tro_chuyen/lay_tin_nhan_moi.php', false); 
			xmlhttp_2.send(null);
			var kq=xmlhttp_2.responseText;
			return kq;
		}
		

		
		function lay_session_trang_tro_chuyen_hien_tai()
		{
			var xmlhttp_2 = new XMLHttpRequest(); 
			xmlhttp_2.open('GET', 'ajax/tro_chuyen/lay_session_trang_tro_chuyen_hien_tai.php', false); 
			xmlhttp_2.send(null);
			var kq=xmlhttp_2.responseText;
			return kq;
		}
		
		addEventListener("keydown", function(event) {
			
			go_ban_phim_lll="co";
			
			if(event.keyCode==13)
			{
				go_ban_phim_lll="gui_tn";
				if(bam_vao_khung_gvb=="co")
				{
				
					

					var id=lay_id("khung_gvb");
					//viet_khung(id.value.length);
					
					if(id.value.length<200)
					{
					
						ajax_tro_chuyen(id.value);
						
						setTimeout(function(){id.value="";},100);
						
					}
					else 
					{
						var id_k_nd_tc=lay_id("khung_noi_dung_tro_chuyen");
			
						var ndc=id_k_nd_tc.innerHTML;
						
						var thong_bao="Nội dung tin nhắn không được lớn hơn 200 ký tự";
						
						var ndm="<div style='padding:16px 0px;width:200px;border-top:0px solid red;border-left:0px solid red;border-right:0px solid red' class='ndk___456_bc2' >"+thong_bao+"</div>";
						
						id_k_nd_tc.innerHTML=ndm+ndc;
					}
					//id.innerHTML="";

				}
			}
		});
	  
	  var id_khung_lon=lay_id("khung_lon");
	  
	  id_khung_lon.onclick=function()
	  {
		  bam_vao_khung_gvb="khong";
	  }
		
		//var so=1;
		
		var thoi_gian=setInterval(function(){
			
			var hop_le="khong";
			
			if(go_ban_phim_lll=="khong")
			{
				hop_le="co";
			}
			
			if(go_ban_phim_lll=="gui_tn")
			{
				hop_le="co";
			}
			
			if(hop_le=="co")
			{
			
				trang_tro_chuyen_hien_tai_2=lay_session_trang_tro_chuyen_hien_tai();
				
				//viet_khung(trang_tro_chuyen_hien_tai_2 + " - "+trang_tro_chuyen_hien_tai);
				var id_khung_noi_dung_tro_chuyen=lay_id("khung_noi_dung_tro_chuyen");
				var id_khung_gvb=lay_id("khung_gvb");
				
				if(trang_tro_chuyen_hien_tai_2==trang_tro_chuyen_hien_tai)
				{
					
					//so=so+1;
					var id_k_nd_tc=lay_id("khung_noi_dung_tro_chuyen");
					
					var ndc=id_k_nd_tc.innerHTML;
					
					var ndm=lay_tin_moi_ajax();
					
					//viet_khung(ndm);
					
					if(ndm=="loi-ll1293")
					{
						//viet_khung("lll");
						clearInterval(thoi_gian);
						//var id_khung_noi_dung_tro_chuyen=lay_id("khung_noi_dung_tro_chuyen");
						id_khung_noi_dung_tro_chuyen.innerHTML="<br><br>Có lỗi xảy ra , mã lỗi : <b>L_1</b><br><br>Bạn có thể thử tải lại web xem chức năng trò chuyện có bật lại lên được hay không ";
				
						//var id_khung_gvb=lay_id("khung_gvb");
						id_khung_gvb.style.display="none";
						
						return "";
					}
					
					if(ndm!=ndm2)
					{
						id_k_nd_tc.innerHTML=ndm+ndc;
						ndm2=ndm;
					}
				}
				else 
				{
					clearInterval(thoi_gian);
					//var id_khung_noi_dung_tro_chuyen=lay_id("khung_noi_dung_tro_chuyen");
					
					id_khung_noi_dung_tro_chuyen.innerHTML="<br><br><span style='font-size:14px' >Web đã ngắt kết nối trò chuyện do bạn mới mở 1 liên kết trong web này ở thẻ web khác hoặc vì một nguyên do nào đó khác <br><br>Bạn có thể tải web lại để bật lại chức năng trò chuyện</span>";
				
					//var id_khung_gvb=lay_id("khung_gvb");
					id_khung_gvb.style.display="none";
				}
				//id_k_nd_tc.style.display="none";
				//id_k_nd_tc.style.display="block";
				
				if(tg_tc>3600)
				{
					clearInterval(thoi_gian);
					id_khung_noi_dung_tro_chuyen.innerHTML="";
					id_khung_gvb.style.display="none";
				}				
				
				tg_tc=tg_tc+1;
			}
			else 
			{
				go_ban_phim_lll="khong";
			}
			
		},1000);

		
	</script>

	<style type="text/css" >

		div#tro_chuyen 
		{
			position:fixed;
			top:95%;
			/*top:611px;*/
			left:73%;
			z-index:12;
		}
		div#tc_2
		{
			position:fixed;
			top:50%;
			height:55%;
			left:73%;
			z-index:11;
		}
	</style>


		<div class="tdk___456_bc2" onclick="bt_tc()" id="tro_chuyen" style="<?php xuat_bm($style_httc_2); ?>" >
			<table style='height:100%;padding:0px;margin:0px;' cellpadding="0px" cellspacing="0px"   ><tr><td><span>Trò chuyện</span></td></tr></table>
			
		</div>
		<div class="ndk___456_bc2" style='background:white;width:258px;height:55%;<?php xuat_bm($style_httc); ?>' id="tc_2" >
				<div style="width:100%;height:70%" onclick="bam_vao_khung_gvb='khong';" >
					<center>
					
					<div style="width:230px;text-align:left;overflow-y:auto;height:100%" id="khung_noi_dung_tro_chuyen" >
					<div style="margin-top:4px" >
					<?php 

						$tv="select * from tro_chuyen_lllll order by id desc limit 0,100 ";
						$tv_1=truy_van_bm($tv);
						xuat_bm($ghi_chu);
						while($tv_2=mysql_fetch_array($tv_1))
						{
							//if($i==1){$id_lon_nhat=$tv_2['id'];}
							$nd=$tv_2['noi_dung'];	
							//xuat_bm("<div style='margin:10px 0px;width:200px;border-top:0px solid red;border-left:0px solid red;border-right:0px solid red' class='ndk___456_bc2' >".$tv_2['noi_dung']."</div>-------------------------------");
							xuat_bm("<div style='overflow:hidden;padding:16px 0px;width:200px;border-top:0px solid red;border-left:0px solid red;border-right:0px solid red' class='ndk___456_bc2' >".$tv_2['noi_dung']."</div>");

						}

					?>
					</div>

					</div>
					</center>
				</div>
				<center>
				

				</center>
				<div style="width:100%;height:30%" onclick="bam_vao_khung_gvb='khong';" ><center><textarea style="width:230px;height:50px;margin-top:10px" onclick="ham_bam_vao_khung_gvb()" id="khung_gvb" ></textarea></center></div>
			</div>
	<?php 
	}
?>

