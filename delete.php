<?php

$ma = $_GET['ma'];

require_once 'connect.php';

$truy_van = "delete from bai_dang where ma = $ma";

mysqli_query($ket_noi,$truy_van);
mysqli_close($ket_noi);
header('location: index.php? success=Xóa thành công');