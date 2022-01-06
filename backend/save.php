<?php
include 'database.php';

if(isset($_POST['save']))
{	 
		$ten_mh=$_POST['ten_mh'];
		$sotinchi=$_POST['sotinchi'];
		$sotiet_lt=$_POST['sotiet_lt'];
		$sotiet_bt=$_POST['sotiet_bt'];
		$sotiet_thtn=$_POST['sotiet_thtn'];
		$sogio_tuhoc=$_POST['sogio_tuhoc'];

		$sql = "INSERT INTO monhoc (mamh, ten_mh, sotinchi, sotiet_lt, sotiet_bt, sotiet_thtn, sogio_tuhoc)
		VALUES ('$ten_mh','$sotinchi','$sotiet_lt','$sotiet_bt','$sotiet_thtn','$sogio_tuhoc')";
	if (mysqli_query($conn, $sql)) {
		echo "Cập nhật bản mới thành công !";
	} else {
		echo "Lỗi: " . $sql . "
" . mysqli_error($conn);
	}
mysqli_close($conn);
}


if(count($_POST)>0){
	if($_POST['type']==1){
		$ten_mh=$_POST['ten_mh'];
		$sotinchi=$_POST['sotinchi'];
		$sotiet_lt=$_POST['sotiet_lt'];
		$sotiet_bt=$_POST['sotiet_bt'];
		$sotiet_thtn=$_POST['sotiet_thtn'];
		$sogio_tuhoc=$_POST['sogio_tuhoc'];

		$sql = "INSERT INTO monhoc (mamh, ten_mh, sotinchi, sotiet_lt, sotiet_bt, sotiet_thtn, sogio_tuhoc) 
		('$ten_mh','$sotinchi','$sotiet_lt','$sotiet_bt','$sotiet_thtn','$sogio_tuhoc')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$city=$_POST['city'];
		$sql = "UPDATE 'crud' SET 'name'='$name','email'='$email','phone'='$phone','city'='$city' WHERE id=$id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

?>