<?php include('backend/config.php'); 
include('template/header.php')
?>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <a href="index.php" style="color:#fff"><i class="fas fa-arrow-left"></i></a> <h2>Add</h2>
                </div>
            </div>
        <form method="post" action="src/add.php">
            <div class="mb-3">
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
            <input type="submit" class="btn btn-primary" name='save' value="Submit">
        </form>
    </div>
</div>
<?php 
include('template/footer.php')
?>
