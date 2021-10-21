<?php
$id = $_GET['id'];
$sql = "DELETE FROM blood_donor where bd_id='$id'";
$query = mysqli_query($conn,$sql);
header('location:index.php');