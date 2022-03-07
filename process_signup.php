<?php
if(empty($_POST['name']))
{
    header('location: signup.php?error=Phải điền tên');
    exit;
}
if(empty($_POST['email']))
{
    header('location: signup.php?error=Phải điền email');
    exit;
}
if(empty($_POST['password']))
{
    header('location: signup.php?error=Phải điền mật khẩu');
    exit;
}
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    require_once 'connect.php';
    $sql = "select count(*) from admin where email = '$email'";
    $ket_qua = mysqli_query($ket_noi, $sql);
    $number_rows = mysqli_fetch_array($ket_qua)['count(*)'];

    if($number_rows == 1)
    {
        header('location: signup.php? error=Trùng email rồi. Tạo email khác');
        exit;
    }
    $sql = "insert into admin(name,email,password)
    value ('$name','$email','$password')";
    $loi = mysqli_error($ket_noi);
    echo $loi;  
    mysqli_query($ket_noi,$sql);

    $sql = "select id from admin where email = '$email'";
    $ket_qua = mysqli_query($ket_noi, $sql);
    $id = mysqli_fetch_array($ket_qua)['id'];

    session_start();
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $name;
    mysqli_close($ket_noi);
    header('location: signin.php? success=Đăng ký thành công');
