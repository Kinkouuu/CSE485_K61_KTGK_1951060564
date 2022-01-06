<h1>
    Thêm môn học
</h1>

<!--</form>-->
<div style="color: red">
    <?php echo $error; ?>
</div>
<form method="post" action="">
    Tên môn học:
    <input type="text" name="ten_mh" value="" />
    <br />

    Số tín chỉ:
    <input type="text" name="sotinchi" value="" />
    <br />

    Số tiết lý thuyết:
    <input type="text" name="sotiet_lt" value="" />
    <br />
    
    Số tiết bài tập: 
    <input type="text" name="sotiet_bt" value="" />
    <br />

    Số tiết thực hành thí nghiệm:
    <input type="text" name="sotiet_thtn" value="" />
    <br />

    Số giờ tự học:
    <input type="text" name="sogio_tuhoc" value="" />
    <br />

    <input type="submit" name="submit" value="Save" />
</form>
