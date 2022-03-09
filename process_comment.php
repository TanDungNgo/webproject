<?php
$binh_luan = $_POST['binh_luan'];
$ma = $_POST['ma'];
$email = $_POST['email'];
echo $ma;
require_once 'connect.php';

$sql = "insert into comment(binh_luan) values('$binh_luan')";

mysqli_query($ket_noi, $sql);
$loi = mysqli_error($ket_noi);
echo $loi;  
mysqli_close($ket_noi);
header("location: showuser.php ? ma=$ma & email=$email ");