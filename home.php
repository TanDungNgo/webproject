<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEARN IT</title>
    <link rel="stylesheet" type="text/css" href="color.css">
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
                    LEARN IT</h1>
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
    require_once 'connect.php';
    $trang = 1;
    if(isset($_GET['trang']))
    {
        $trang = $_GET['trang'];
    }
    $tim_kiem = '';
    if(isset($_GET['tim_kiem'])){
        $tim_kiem = $_GET['tim_kiem'];
    }

    $sql_so_bai_dang = "select count(*) from bai_dang
    where
    tieu_de like '%$tim_kiem%'";
    $mang_so_bai_dang = mysqli_query($ket_noi,$sql_so_bai_dang);
    $ket_qua_so_bai_dang = mysqli_fetch_array($mang_so_bai_dang);
    $so_bai_dang = $ket_qua_so_bai_dang['count(*)'];

    $so_bai_tren_1_trang = 3;
    $so_trang = ceil($so_bai_dang / $so_bai_tren_1_trang);
    $bo_qua = $so_bai_tren_1_trang * ($trang - 1);

    $sql = "select * from bai_dang
    where
    tieu_de like '%$tim_kiem%'
        limit $so_bai_tren_1_trang offset $bo_qua";


    $ket_qua = mysqli_query($ket_noi,$sql);
?>
<div id="div_tong">
	<div id="div_san_ho">
        <h4>
            Tìm kiếm
        </h4>
        <caption>
            <form action="">
                <input type="search" name="tim_kiem"
                <?php if(isset($tim_kiem)) {?> 
                    value="<?php echo $tim_kiem ?>"
                <?php } ?>
                >
            </form>
        </caption>
	</div>
	<div id="div_vien">
    </div>
	<div id="div_sua">
        <br>
        <br>
        <br>
        <br>
        <table border="1" width="100%">
        <tr>
            <th width="40%">
                Tiêu đề
            </th>
            <th>
                Ảnh
            </th>
        </tr>
        <?php foreach ($ket_qua as $tung_bai_tin_tuc){ ?>
            <tr>
                <td>
                    <a href="show.php ? ma= <?php echo $tung_bai_tin_tuc['ma'] ?>">
                        <?php echo $tung_bai_tin_tuc['tieu_de'] ?>
                </a>     
                </td>
                <td>
                    <img src="picture/<?php echo $tung_bai_tin_tuc['anh'] ?>" height='100'>
                </td>
            </tr>
        <?php } ?>
        </table>
        <?php for($i = 1; $i <= $so_trang; $i++) { ?>
            <a href="?trang=<?php echo $i ?>&tim_kiem=<?php echo $tim_kiem ?>">
                <?php echo $i ?>
            </a>
        <?php } ?>
        <?php mysqli_close($ket_noi) ?>
	</div>
</div>
</body>
</html>