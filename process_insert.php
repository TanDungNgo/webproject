<?php

if(empty($_POST['tieu_de']))
{
    header('location: form_insert.php?error=Phải điền tiêu đề');
    exit;
}
if(empty($_POST['noi_dung']))
{
    header('location: form_insert.php?error=Phải điền nội dung');
    exit;
}
    $tieu_de = $_POST['tieu_de'];
    $noi_dung = $_POST['noi_dung'];
    $anh = $_FILES['anh'];

    $folder = 'picture/';
    $file_extention = explode('.', $anh['name'])[1];
    $file_name = time().'.'.$file_extention;
    $path_file = $folder.$file_name;
    move_uploaded_file($anh["tmp_name"], $path_file);
    require_once 'connect.php';
    $sql = "insert into bai_dang(tieu_de,noi_dung,anh) values('$tieu_de','$noi_dung','$file_name')";

    mysqli_query($ket_noi, $sql);

    $loi = mysqli_error($ket_noi);
    echo $loi;  
    mysqli_close($ket_noi);

    header('location: index.php? success=Đăng thành công');
