<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="color.css">
	<title>Đăng ký</title>
</head>
<body>
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
	<div id="div_tong">
		<div id="div_san_ho">
			<h1> Form đăng ký </h1>
		</div>
		<!-- <div id="div_vien">
		</div> -->
		<div id="div_sua">
		<?php if(isset($_GET['error'])) { ?>
			<spam style='color:red'>
				<?php echo $_GET['error'] ?>
			</spam>
    	<?php } ?>
			<form method="post" action="process_signup.php" enctype="multipart/form-data">
			<table cellspacing="1" cellpadding="1" border="2" align="center">
				<tr>
					<td colspan="2" align="center">
						<font size="+2">
							ĐĂNG KÝ
						</font>
					</td>
				</tr>
				<tr>
					<td>
						Fullname
					</td>
					<td>
						<input type="text" placeholder="Nhập name" size="30px" name="name">
					</td>
				</tr>
				<tr>
					<td>
						Email
					</td>
					<td>
						<input type="email" placeholder="Nhập email" size="30px" name="email">
					</td>
				</tr>
				<tr>
					<td>
						Password
					</td>
					<td>
						<input type="password" placeholder="Nhập password" size="30px" name="password">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" value="OK">
						<input type="reset" value="Reset">
					</td>
				</tr>
			</table>
		</form>
		</div>	
	</div>
</body>
</html>