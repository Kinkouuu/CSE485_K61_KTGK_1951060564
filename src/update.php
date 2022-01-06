<?php
include ('../backend/config.php');
include('../template/header.php');

if(count($_POST)>0) {
mysqli_query($conn,"UPDATE monhoc set ten_mh='" . $_POST['ten_mh'] . "',sotinchi='" . $_POST['sotinchi'] . "', sotiet_lt='" . $_POST['sotiet_lt'] . "', sotiet_bt='" . $_POST['sotiet_bt'] . "' ,sotiet_thtn='" . $_POST['sotiet_thtn'] . "',sogio_tuhoc='" . $_POST['sogio_tuhoc'] . "' WHERE mamh='" . $_GET['mamh'] . "'");
Header('location: http://localhost/CSE485_K61_KTGK_1951060564/');
}else {
}

?>
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <a href="http://localhost/CSE485_K61_KTGK_1951060564"><i class="fas fa-arrow-left"></i> Back</a> <h2>Update</h2>
                </div>
            </div>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<?php $result = mysqli_query($conn,"SELECT * FROM monhoc WHERE mamh='" . $_GET['mamh'] . "'");
while($row = mysqli_fetch_array($result)) {

?>
            <label for="ten_mh" class="form-label">Tên môn học</label>
            <input type="text" class="form-control" id="ten_mh" name='ten_mh'>
            </div>
            <div class="mb-3">
            <label for="sotinchi" class="form-label">Số tín chỉ</label>
            <input type="number" class="form-control" id="sotinchi" name="sotinchi">
            </div>
            <div class="mb-3">
            <label for="sotiet_lt" class="form-label">Số tiết lý thuyết</label>
            <input type="number" class="form-control" id="sotiet_lt" name="sotiet_lt">
            </div>
            <div class="mb-3">
            <label for="sotiet_bt" class="form-label">Số tiết bài tập</label>
            <input type="number" class="form-control" id="sotiet_bt" name="sotiet_bt">
            </div>
            <div class="mb-3">
            <label for="sotiet_thtn" class="form-label">Số tiết thực hành</label>
            <input type="number" class="form-control"id="sotiet_thtn" name="sotiet_thtn" >
            </div>
            <div class="mb-3">
            <label for="sogio_tuhoc" class="form-label">Số giờ tự học</label>
            <input type="number" class="form-control" id="sogio_tuhoc" name="sogio_tuhoc">
            </div>
            <?php
				};
				?>
            <input type="submit" class="btn btn-primary" name='save' value="Submit">
        </form>	
    </div>
<?php 
include('../template/header.php')

?>
