<?php 

    $shock = "localhost";
    $user = "root";
    $pass = "";
    $db = "hospital";

    $connect = mysqli_connect($shock,$user,$pass,$db)or
    die ("Location: error-404.html");

?>