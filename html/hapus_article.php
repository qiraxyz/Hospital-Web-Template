<?php
include "config.php";

if(isset($_GET['id'])){
    $query = mysqli_query($connect, "DELETE FROM artikel WHERE id_gambar='$_GET[id]'");

    if($query){
        header('Location: article.php');
    }else{
        header('Location: hapus_article.php?status="gagal"');
    }
}

?>