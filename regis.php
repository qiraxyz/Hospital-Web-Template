<?php
session_start();
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style=" background-position: center; background-size: 100%; background-image: url(img/bglogin.jpg)">
    <div class="zan-login">
        <div class="isi-login">

            <div class="isi-left">
                <img src="img/logohs.png" alt="">
                <p>Hospital</p>
                
            </div>

            <div class="dokicon">
                <img src="img/dokicon.png" alt="">
            </div>
            
            <p class="judul-login">Register</p>

            <div class="isi-right">
                <label for=""><img src="img/nameicon.png" alt=""></label>
                <input type="text" name="nama" placeholder="Full Name...">
                <br>
                <label for=""><img src="img/nameicon.png" alt=""></label>
                <input type="text" name="email" placeholder="Email...">
                <br>
                <label for=""><img src="img/passicon.png" alt="" style="height: 25px;"></label>
                <input type="password" name="pass" placeholder="Password"> 
                <br>
                <a href=""><button>Sign Up</button></a>

                <!-- dont have account -->
                <br>
                <br>
                <div class="have-account">
                <label for="">have account?</label>
                <a href="login.html">Sign In</a>
                </div>
            </div>

        </div>
    </div>
    <?php
    
    ?>
</body>

</html>