<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php $ma= $_GET['ma'];?>
    <?php $email= $_GET['email'];?>
    <?php
        require_once 'connect.php';
        $sql = "select * from comment";
        $ket_qua = mysqli_query($ket_noi,$sql);
    ?>
    <table border="1" width="70%">
        <tr>
            <td>
            <form method="post" action="process_comment.php">
            <h3>
                Bình luận
            </h3>
            <textarea name="binh_luan" placeholder="Viết bình luận"  cols="70" rows="5"></textarea>
            <br>
            <input type="hidden" name="ma" value="<?php echo $ma ?>">
            <input type="hidden" name="email" value="<?php echo $email ?>">
            <button>
                Gửi
            </button>
            </form>
            </td>
        </tr>
            <?php foreach ($ket_qua as $tung_binh_luan){ ?>
                <tr>
                    <td width="100%">
                        <?php echo $tung_binh_luan['binh_luan'] ?>   
                    </td>
                </tr>
            <?php } ?>
    </table>
</body>
</html>