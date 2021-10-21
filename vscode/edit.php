
<?php
    require "db/connection.php";
$id = $_GET['id'];
$sql_up = "SELECT * FROM blood_donor where bd_id='$id'";
$query_up = mysqli_query($conn,$sql_up);
$row_up = mysqli_fetch_array($query_up);


if(isset($_POST['submit'])){
    $bd_id = $_POST['bd_id'];
    $bd_name = $_POST['bd_name'];
    $bd_sex = $_POST['bd_sex'];
    $bd_age = $_POST['bd_age'];
    $bd_group = $_POST['bd_reg_date'];
    $bd_phone = $_POST['bd_phone'];
// VALIDATE FORM
if(
    $bd_id == "" ||
    $bd_name  == ""|| 
   $bd_sex  == ""|| 
   $bd_age  == ""|| 
   $bd_group == "" ||
   $bd_phone == ""
){
  $_SESSION['error'] = 'Vui Lòng Điền Đầy Đủ Thông Tin';
header("location:index.php?page=edit&id=$id");
die;  
}{
header("location:index.php?page=edit&id=$id");
die;
}
$sql = "UPDATE news SET
bd_id = 'bd_id',
 bd_name='$bd_name',
 bd_sex='$bd_sex',
 bd_age='$bd_age',
 bd_bgroup='$bd_bgroup',
 bd_reg_date='$bd_reg_date',
 bd_phone = '$bd_phone'";



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
            <label for="title">Mã Người hiến máu</label>
            <input type="text" value="<?= $row_up['bd_id'] ?>" name="bd_id" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="image">Tên người hiến máu</label>
            <input  value="<?= $row_up['bd_name'] ?>" name="bd_name" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="intro">Giới tính</label>
            <input type="text" value="<?= $row_up['bd_sex'] ?>" name="bd_sex" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="detail">Tuổi </label>
            <input type="text" value="<?= $row_up['bd_age'] ?>" name="bd_age" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="status">Nhóm máu</label>
            <input type="text" value="<?= $row_up['bd_bgroup'] ?>" name="bd_bgroup" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="status">Ngày Đăng kí</label>
            <input type="text" value="<?= $row_up['bd_reg_date'] ?>" name="bd_reg_date" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="status">Số điện thoại</label>
            <input type="text" value="<?= $row_up['bd_phone'] ?>" name="bd_phone" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <button class="btn btn-primary"  name="submit" type="submit"> UPDATE </button>
    </form>
</div>