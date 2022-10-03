<?php
include 'config.php';

$query = mysqli_query($connect, 'SELECT * FROM artikel GROUP BY id_gambar DESC LIMIT 5');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php
        include 'news.css';
        ?>
    </style>
</head>
<body>
    <div class="header-content">
        <div class="header-left">
            <a href=""><img src="img/logohs.png" alt=""></a>
            <span>Hospital</span>
        </div>

        <div class="header-right1">
            <img src="img/logo-call.png" alt="">
            <div>
            <p><strong>CALL US</strong></p>
            <span>0899988779</span>
            </div>
        </div>

        <div class="header-right2">
            <img src="img/logo-email.png" alt="">
            <div>
            <p><strong>EMAIL US</strong></p>
            <span>Info@Hospital.net</span>
            </div>
        </div>

        <div class="header-btn">
            <a href="login.php"><button class="btn-login">login</button></a>
        </div>
    </div>
    <!-- nav -->
    <div class="title-nav">
        <a href="">Home</a>
        <h1>NEWS & EVENT</h1>
    </div>
    <!-- content -->
    <div class="container">

            <?php
            $no = 1;

            while($tampil = mysqli_fetch_array($query)) :
                
            ?>
            <div class="card1">
                <img src="assets/images/<?=$tampil['file']?>" alt="">
                <div class="text">
                <h1><?= $tampil['judul']?></h1>
                <p><?= $tampil['isi']?></p>
                </div>
            </div>
            <?php $no++; endwhile; ?>
    </div>

    <!-- footer -->
    <div class="container-footer">
        <div class="left-content">
            <div class="logo"></div>
            <p>Dolor sitam consectetur adipisicing eiusmod tempor <br> cididunt laboret mag magn aliquat enim sed minim <br> veniam nostrud sed lorem ipsum dolor.</p>
            <div class="line-left-content"></div>
            <label class="left-content-1">206 South Marion Avenue, Sanford, Florida 33020,<br> USA</label>
        </div>
   </div>
</body>
</html>