<?php 

    $shock = "localhost";
    $user = "root";
    $pass = "";
    $db = "hospital";

    $connect = mysqli_connect($shock,$user,$pass,$db)or
    die ("Gagal Menghubungkan");

include 'fungsi_artikel.php';
?>