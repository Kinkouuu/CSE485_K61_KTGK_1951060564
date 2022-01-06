<?php
include ('../backend/config.php');
if(isset($_POST['save']))
{	 
	$ten_mh = $_POST['ten_mh'];
	$sotinchi = $_POST['sotinchi'];
	$sotiet_lt= $_POST['sotiet_lt'];
	$sotiet_bt = $_POST['sotiet_bt'];
	$sotiet_thtn = $_POST['sotiet_thtn'];
	$sogio_tuhoc = $_POST['sogio_tuhoc'];

	$sql = "INSERT INTO monhoc (mamh, ten_mh, sotinchi, sotiet_lt, sotiet_bt, sotiet_thtn, sogio_tuhoc)
	VALUES ('$ten_mh','$sotinchi','$sotiet_lt','$sotiet_bt','$sotiet_thtn','$sogio_tuhoc')";
	if (mysqli_query($conn, $sql)) {
		Header('location: http://localhost/CSE485_K61_KTGK_1951060564/');
	} else {
    Header('location: http://localhost/CSE485_K61_KTGK_1951060564/error.php');

	}
	mysqli_close($conn);
}
?>