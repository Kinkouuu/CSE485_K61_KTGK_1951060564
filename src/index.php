<?php include('backend/config.php'); 
include('template/header.php')
?>
    <div class="container">
	<p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>TLU Manage</h2>
					</div>
					<div class="col-sm-6">
						<a href="add.php" class="btn btn-success">Add</a>
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>Tên môn học</th>
                        <th>Số tín chỉ</th>
                        <th>Số tiết lý thuyết</th>
						<th>Số tiết bài tập</th>
						<th>Số tiết thực hành</th>
						<th>Số giờ tự học</th>	
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($conn,"SELECT * FROM 1951060564_university");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["bd_id"]; ?>">
					<td><?php echo $i; ?></td>
					<td><?php echo $row["ten_mh"]; ?></td>
					<td><?php echo $row["sotinchi"]; ?></td>
					<td><?php echo $row["sotiet_lt"]; ?></td>
					<td><?php echo $row["sotiet_bt"]; ?></td>					
					<td><?php echo $row["sotiet_thtn"]; ?></td>
					<td><?php echo $row["sogio_tuhoc"]; ?></td>
					<td><a href="src/update.php?mamh=<?php echo $row["mamh"]; ?>">Update</a></td>
					<td><a href="src/delete.php?mamh=<?php echo $row["mamh"]; ?>">Delete</a></td>
				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
			
        </div>
    </div>
<?php 
include('template/footer.php')
?>
