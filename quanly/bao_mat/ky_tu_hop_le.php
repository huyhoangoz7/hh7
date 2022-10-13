<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$chuoi_hop_le="q;w;e;r;t;y;u;i;o;p;a;s;d;f;g;h;j;k;l;z;x;c;v;b;n;m;";
	
	$chuoi_hop_le=$chuoi_hop_le."Q;W;E;R;T;Y;U;I;O;P;A;S;D;F;G;H;J;K;L;Z;X;C;V;B;N;M;";
	
	$chuoi_hop_le=$chuoi_hop_le."0;1;2;3;4;5;6;7;8;9;";
	
	
	
	$chuoi_hop_le=$chuoi_hop_le."é;è;ẻ;ẽ;ẹ;ê;ế;ề;ể;ễ;ệ;";
	$chuoi_hop_le=$chuoi_hop_le."ý;ỳ;ỷ;ỹ;ỵ;";
	$chuoi_hop_le=$chuoi_hop_le."ú;ù;ủ;ũ;ụ;ư;ứ;ừ;ử;ữ;ự;";
	$chuoi_hop_le=$chuoi_hop_le."í;ì;ỉ;ĩ;ị;";
	$chuoi_hop_le=$chuoi_hop_le."ó;ò;ỏ;õ;ọ;ô;ố;ồ;ổ;ỗ;ộ;ơ;ớ;ờ;ở;ỡ;ợ;";
	$chuoi_hop_le=$chuoi_hop_le."á;à;ả;ã;ạ;â;ấ;ầ;ẩ;ẫ;ậ;ă;ắ;ằ;ẳ;ẵ;ặ;";
	$chuoi_hop_le=$chuoi_hop_le."đ;";
	
	
	$chuoi_hop_le=$chuoi_hop_le."É;È;Ẻ;Ẽ;Ẹ;Ê;Ế;Ề;Ể;Ễ;Ệ;";
	$chuoi_hop_le=$chuoi_hop_le."Ý;Ỳ;Ỷ;Ỹ;Ỵ;";
	$chuoi_hop_le=$chuoi_hop_le."Ú;Ù;Ủ;Ũ;Ụ;Ư;Ứ;Ừ;Ử;Ữ;Ự;";
	$chuoi_hop_le=$chuoi_hop_le."Í;Ì;Ỉ;Ĩ;Ị;";
	$chuoi_hop_le=$chuoi_hop_le."Ó;Ò;Ỏ;Õ;Ọ;Ô;Ố;Ồ;Ổ;Ỗ;Ộ;Ơ;Ớ;Ờ;Ở;Ỡ;Ợ;";
	$chuoi_hop_le=$chuoi_hop_le."Á;À;Ả;Ã;Ạ;Â;Ấ;Ầ;Ẩ;Ẫ;Ậ;Ă;Ắ;Ằ;Ẳ;Ẵ;Ặ;";
	$chuoi_hop_le=$chuoi_hop_le."Đ;";
	
	$chuoi_hop_le=$chuoi_hop_le.".;,;-;_;:;?;!;+;-; ;@";

	
	$mang_phan_tu_hop_le=explode(";",$chuoi_hop_le);
	
	//print_r($mang_phan_tu_hop_le);echo "<hr>";
	
?>