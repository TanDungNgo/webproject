<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="color.css">
    <title>Form đăng bài</title>
</head>
<body bgcolor="	#FFFFFF">
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
            <!-- <th width="30%">
                <button> 
                <a href="form.php">
                    Đăng ký
                </a>
                </button>
                <img src="" width="50%">
            </th> -->
        </tr>
    </table>
</form>
    <?php if(isset($_GET['error'])) { ?>
        <spam style='color:red'>
            <?php echo $_GET['error'] ?>
        </spam>
    <?php } ?>
<form method="post" action="process_insert.php" enctype="multipart/form-data">
<div id="div_tong">
	<div id="div_san_ho">
        <h1> Đăng bài viết</h1>
	</div>
	<!-- <div id="div_vien">
    </div> -->
	<div id="div_sua">
    <table cellspacing="1" cellpadding="1" border="2" align="center">
        <tr>
            <td width = >
                Tiêu đề
            </td>
            <td>
                <input type="text" name="tieu_de">
            </td>
        </tr>
        <tr>
            <td height="100">
                Nội dung
            </td>
            <td>
                <textarea name="noi_dung" rows="30" cols="90"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                Ảnh
            </td>
            <td>
                <input type="file" name="anh">
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <button>Đăng bài</button>
                <input type="reset" value="Reset">
            </td>
        </tr>
    </table>
	</div>
</div>
</form>
</body>
</html>