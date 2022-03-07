<?php
    if(empty($_POST['ma']))
    {
        header('location: form_update.php?error=Phải truyền mã để sửa');
        exit;
    }
    if(empty($_POST['tieu_de']))
    {
        header("location: form_update.php?ma=$ma &error=Phải điền tiêu đề");
        exit;
    }
    if(empty($_POST['noi_dung']))
    {
        header("location: form_update.php?ma=$ma error=Phải điền nội dung");
        exit;
    }
    $ma = $_POST['ma'];
    $tieu_de = $_POST['tieu_de'];
    $noi_dung = $_POST['noi_dung'];
    $anh_moi = $_FILES['anh_moi'];
    if($anh_moi['size'] > 0)
    {
        $folder = 'picture/';
        $file_extention = explode('.', $anh_moi['name'])[1];
        $file_name = time().'.'.$file_extention;
        $path_file = $folder.$file_name;
        move_uploaded_file($anh_moi["tmp_name"], $path_file);
    }
    else{
        $file_name = $_POST['anh_cu'];
    }
    require_once 'connect.php';

    $truy_van = "update bai_dang
    set
    tieu_de = '$tieu_de',
    noi_dung = '$noi_dung',
    anh = '$file_name'
    where
    ma = '$ma'";

    mysqli_query($ket_noi, $truy_van);
    $loi = mysqli_error($ket_noi);
    echo $loi;
    mysqli_close($ket_noi);
    if(empty($loi))
    {
        header('location: index.php? success=Sửa thành công');
    }
    else
    {
        header("location: form_update.php?ma=$ma &error=Lỗi truy vấn");
    }