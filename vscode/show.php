<?php 
    require 'db/connection.php';
?>
<?php
$sql = "SELECT * FROM blood_donor";
$query = mysqli_query($conn,$sql);

?>
<div class="card-body">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th>Mã hiến máu</th>
                <th>Tên</th>
                <th>Giới tính</th>
                <th>Tuổi</th>
                <th>Nhóm máu</th>
                <th>Ngày đăng kí</th>
                <th>Số điện thoại</th>
                <th>Sửa</th>
                <th>xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i =1;
            while ($row = mysqli_fetch_assoc($query)) { ?>
<tr>
    <td><?= $i ++;?></td>
    <td><?= $row['bd_id']?></td>
    <td><?= $row['bd_name']?></td>
    <td><?= $row['bd_sex']?></td>
    <td><?= $row['bd_age']?></td>
    <td><?= $row['bd_bgroup']?></td>
    <td><?= $row['bd_reg_date']?></td>
    <td><?= $row['bd_phone']?></td>
    <td>
        <a href="index.php?page=edit&id=<?= $row['bd_id']?>">Sửa</a>
    </td>
    <td>
        <a
         onclick="return confirm('bạn có chắc chắn xóa người này không?')"
          href="index.php?page=delete&id=<?= $row['bd_id']?>">Xóa</a>
    </td>
    
    
</tr>
           <?php }
?>
</tbody>
    </table>
    <a href="index.php?page=creat" class="btn btn-danger"> THÊM Thông Tin Người Hiến</a>
</div>