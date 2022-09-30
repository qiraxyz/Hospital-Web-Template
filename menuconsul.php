<?php
include 'config.php';



if(isset($_POST['simpan'])){
    $id_pasien = $_POST['id_pasien'];
    $nama_pasien = $_POST['nama_pasien'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    $sql = "INSERT INTO consultation (id_pasien, nama_pasien, email, pesan) VALUES ('$id_pasien','$nama_pasien','$email','$pesan')";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: index.html');
    }else{
        header('Location: menuconsul.php?status=gagal');
    }
}
?>