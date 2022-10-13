<?php
$mysqli = new mysqli("localhost","root","","ban_hang_l");
if ($mysqli->connect_errno) {
	echo"Kết nối MYSQLI lỗi".$mysqli->connect_error;
	exit();
}
?>