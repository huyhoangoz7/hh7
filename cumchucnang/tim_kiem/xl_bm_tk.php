<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$tu_khoa=get_bm('tu_khoa');
	$kiem=$bao_mat->kiem_tra_tu_khoa($tu_khoa);
	if($kiem=="khong_hop_le")
	{
?>
<html>
<head>
	<meta charset="utf-8" >
	<title>Web</title>
</head>
<body>
<?php 

		$noi_dung='
		
		- <b>Từ khóa tìm kiếm không hợp lệ . Từ khóa tìm kiếm không hợp lệ có thể do các nguyên nhân sau :</b> <br><br><br>
		
		+ Có ký tự không hợp lệ. Ký tự không hợp lệ có thể bao gồm các ký tự bên dưới : <br><br><hr><br>~ , ` , # , $ , % , ^ , & , * , ( , ) , = , | , \ , { , } , [ , ], ; , " ,'." ' ".' < , > , / , * , / , + , @ , ? , ! : <br><br><hr><br>
		+ Từ khóa tìm kiếm dài quá 100 ký tự hoặc chưa nhập từ khóa <br><br>
		+ Độ dài của từng từ tìm kiếm không được quá 20 ký tự <br><br>
		
		';
		
		thong_bao_a10($noi_dung);


	?>
	
</body>
</html>
<?php 
	exit();
	}
?>
