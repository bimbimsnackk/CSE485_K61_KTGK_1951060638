<!-- tao file connection ket noi den db -->
<?php 

$conn = mysqli_connect('localhost','root','','blood_donor','3308');
if($conn) {
    mysqli_query($conn,'SET NAME "UTF 8"');
    
}else{
    echo ' ket noi loi';
}