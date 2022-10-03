<?php
    include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Input Data</title>
</head>
<body>
    <h2>Silahkan Input Data</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Judul</td>
                <td>:</td>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr>
                <td>Isi</td>
                <td>:</td>
                <td><input type="text" name="isi"></td>
            </tr>
            <tr>
                <td>File</td>
                <td>:</td>
                <td><input type="file" name="file"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="kirim" value="Kirim"></td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST['kirim'])){
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $file = $_FILES['file']['name'];

        $file_tmp = $_FILES['file']['tmp_name'];

        move_uploaded_file($file_tmp, "../assets/images/$file");

        $query = mysqli_query($connect, "INSERT INTO artikel VALUES('', '$judul', '$file', '$isi')");

        if($query){
            header("Location: index.php");
        }else{
            header("Location: buatartikel.php?status='gagal'");
        }
        
            // var_dump($file);
            // die;
    }
    ?>
</body>
</html>