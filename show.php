<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="color.css">
    <title>Xem bài đăng</title>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" 
    src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0" nonce="H8HP8ugw"></script>
</head>
<body>
<form>
    <table style="width:100%">
        <tr>
            <th>
                <h1> 
                <a href="index.php">
                    <img src="picture/picture1.jpg" width="5%">
                    </a>
                    LEARN IT
                </h1>
            </th>
            <th width="30%">
                <button> 
                <a href="signup.php">
                    Đăng ký
                </a>
                </button>
                <button> 
                <a href="signin.php">
                    Đăng Nhập
                </a>
                </button>
                <img src="" width="50%">
            </th>
        </tr>
    </table>
</form>
    <?php
        $ma= $_GET['ma'];
        require_once 'connect.php';
        $sql = "select * from bai_dang  where ma = $ma ";

        $ket_qua = mysqli_query($ket_noi,$sql);
        $bai_dang = mysqli_fetch_array($ket_qua);
    ?>
<div id="div_tong">
	<div id="div_san_ho">
        <h1>
            <?php echo $bai_dang['tieu_de'] ?>
        </h1>
	</div>
	<div id="div_vien">
    </div>
	<div id="div_sua">
        <img src="picture/<?php echo $bai_dang['anh'] ?>" height='200' align='center'>
        <p>
            <?php echo nl2br($bai_dang['noi_dung']) ?>
        </p>
	</div>
</div>
</body>
</html>