<?php
if(empty($_POST['email']))
{
    header('location: signin.php?error=Phải điền email');
    exit;
}
if(empty($_POST['password']))
{
    header('location: signin.php?error=Phải điền mật khẩu');
    exit;
}

    $email = $_POST['email'];
    $password = $_POST['password'];

    require_once 'connect.php';
    $sql = "select count(*) from admin 
    where email = '$email' and password = '$password'";
    $ket_qua = mysqli_query($ket_noi, $sql);
    $number_rows = mysqli_fetch_array($ket_qua)['count(*)'];
    if($number_rows == 1)
    {
        session_start();
        $each = mysqli_fetch_array($ket_qua);
        // $_SESSION['id'] = $each['$id'];
        // $_SESSION['name'] = $each['$name'];
        header("location: user.php?email=$email");
        exit;
    }
    
    header('location: signin.php? error=Đăng nhập sai rồi');
