<?php
if(isset($_POST['submit'])){
    $bd_id = $_POST['bd_id'];

    $bd_name = $_POST['bd_name'];
    
    $bd_sex = $_POST['bd_sex'];
    $bd_age= $_POST['bd_age'];
    $bd_group = $_POST['bd_group'];
    $bd_reg_date = $_POST['bd_reg_date'];
    $bd_phone = $_POST['bd_phone'];
// VALIDATE FORM
if(
    empty($bd_id) || 
    empty($bd_name) || 
    empty($bd_sex) || 
    empty($bd_age) || 
    empty($bd_group) ||
    empty($bd_reg_date) ||
    empty($bd_phone) 
){
  $_SESSION['error'] = 'Vui Lòng Điền Đầy Đủ Thông Tin';
header('location:index.php?page=add');
die;  
}
$sql = "INSERT INTO blood_donor(bd_id,bd_name,bd_sex,bd_age,bd_group,bd_reg_date,bd_phone)"
."VALUES('$bd_id','$bd_name','$bd_sex','$bd_age','$bd_group','$bd_reg_date','$bd_phone)";
$query = mysqli_query($conn,$sql);
header('location:index.php');

}

?>
<div class="card-body">
    <form method="POST" enctype="multipart/form-data">
    <?php 
    if(isset($_SESSION['error'])){
        echo '<p style=color:red>'.$_SESSION['error'].'</p>' ;
        unset($_SESSION['error']);
    }
    ?>
        <div class="form-group">
            <label for="bd_id">Mã người hiến</label>
            <input type="text" name="bd_id" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="bd_name">Tên người hiến</label>
            <input type="text" name="bd_name" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="bd-sex">Giới tính</label>
            <input type="text" name="bd_sex" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="bd_age">Tuổi</label>
            <input type="text" name="bd_age" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="bd_group">Nhóm máu</label>
            <input type="text" name="bd_group" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="br_reg_date">Ngày đăng kí</label>
            <input type="text" name="bd_reg_date" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="bd_phone">Số điện thoại</label>
            <input type="text" name="bd_phone" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <button class="btn btn-primary" name="submit" type="submit"> THÊM </button>
    </form>
</div>