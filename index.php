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
    <!-- link -->
    <!-- css link -->
    <link rel="stylesheet" href="style.css">
    <!-- icon -->
    <script src="https://kit.fontawesome.com/09294afb62.js" crossorigin="anonymous"></script>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <!-- header -->
    <div class="header-content" id="header-scroll">
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
    <nav class="navbar">
        <div class="nav-link">
            <div><a href="#header-scroll">Home</a></div>
            <div><a href="">News</a></div>
            <div><a href="">Contact</a></div>
            <div><a href="#fitur-scroll">Feature</a></div>
            <div><a href="#rate-scroll">Rate</a></div>
        </div>
    </nav>

    <!-- hero -->
    <div class="hero">
        <img src="img/hero-img.jpg" alt="">

        <div class="hero-left">
            <p>Happy to see Healty</p>
            <p>Best Hospital Care<br>& Wellness Center</p>
            <p>A society of healthy communities where all individuals reach their highest potential for health.</p>

            <div class="header-btn2">
                <a href="login.php"><button class="btn-login2">login</button></a>
            </div>
        </div>

        <div class="hero-right">
            <form action="menuconsul.php" method="post">
                <label for="">Consultation</label>
                <input required="required" type="text" name="nama_pasien" placeholder="Full Name..">
                <input required="required" type="email" name="email" placeholder="Email..">
                <textarea name="pesan" cols="30" rows="10" placeholder="message"></textarea>
                <input type="text" hidden="hidden" name="id_pasien">
                <a href=""><button type="submit" name="simpan" value="simpan">Simpan</button></a>
            </form>
        </div>
    </div>
    <!-- feature -->
    <div class="container-header-feature" id="fitur-scroll">
        <div class="header-feature">
            <h1><span>feature </span>Center</h1>
        </div>
        <div class="header-feature-p">
            <p>Do eiusmod tempor incididunt ut labore et dolore magna aliqua sed ipsum uat enim <br> veniam
                quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
        </div>
        <div class="line"></div>
    </div>

    <!-- feature content -->
    <div class="container-feature">
        <div class="circle-1">
            <img src="" alt="">
            <div class="circle-white-1"></div>
            <div class="circle-content-1">
                <p>Medical Excellence</p>
                <p>always fast and on time 24/7
                    always put safety first</p>
                <a href="">Read me</a>
            </div>
        </div>
        <div class="circle-2">
            <img src="" alt="">
            <div class="circle-white-2"></div>
            <div class="circle-content-2">
                <p>Medical Excellence</p>
                <p>always fast and on time 24/7
                    always put safety first</p>
                <a href="">Read me</a>
            </div>
        </div>
        <div class="circle-3">
            <img src="" alt="">
            <div class="circle-white-3"></div>
            <div class="circle-content-3">
                <p>Medical Excellence</p>
                <p>always fast and on time 24/7 always put safety first</p>
                <a href="">Read me</a>
            </div>
        </div>
    </div>
    <!-- About -->
    <div class="container-about">
        <div class="content-about">
            <h1>About <span>Center</span></h1>
            <p>Do eiusmod tempor incididunt ut labore et dolore <br> magna aliqua sed ipsumuat enim <br> veniam quis
                nostrud exercitation ullamco laboris nisi <br> ut aliquip.</p>
            <hr size="1px" width="100" margin-left="100px">
            <p>Do eiusmod tempor incididunt ut labore et dolore <br> magna aliqua sed ipsumuat enim <br> veniam quis
                nostrud exercitation ullamco laboris nisi <br> ut aliquip.</p>
            <img src="img/project3-1.jpg" alt="">
        </div>
        <div class="image-about-1">
            <img src="img/image_2022-09-30_081313285-removebg-preview.png" class="img-abt-1">
            <p>Over 20 Year OF</p>
            <h1>METICUE</h1>
        </div>
        <div class="image-about-2">
            <img src="img/image_2022-09-30_081700803-removebg-preview.png" class="img-abt-2">
            <p>Over 20 Year OF</p>
            <h1>METICUE</h1>
        </div>
    </div>

    <!-- paralax -->
    <div class="paralax1">
        <div class="paralax1-isi">
            <label>Ready to Improve Your Health? Book Your Appointment today!</label>
            <label for="">
                <p>A society of healthy communities <br> where all individuals reach their highest potential for health.
                </p>
            </label>

            <div class="paralax-isi2">
                <img src="img/logo-call.png" alt="">
                <p>TLP kami (234)-350-9876</p>
                <label for="">OR</label>
                <a href=""><button>SEND</button></a>
            </div>
        </div>
    </div>

    <!-- doctor -->
    <div class="doctor-content">

        <div class="isi-doctor">
            <h1><span>Doctor</span> Center</h1>
            <p>Hospital Indonesia Jakarta is a private institution that was established in 1906.</p>
            <div class="line-doctor"></div>
        </div>

        <div class="container-doctor">
            <div class="card1-doctor">
                <img src="img/mandoctor.jpg" alt="">
                <div>
                    <strong>Dr.Kevin</strong>
                    <br>
                    <label>General Practitioner</label>
                    <br>
                    <a href=""><button type="button" name="about" value="about">about</button></a>
                </div>
            </div>
            <div class="card2-doctor">
                <img src="img/mandoctor.jpg" alt="">
                <div>
                    <strong>Dr.Kevin</strong>
                    <br>
                    <label>General Practitioner</label>
                    <br>
                    <a href=""><button type="button" name="about" value="about">about</button></a>
                </div>
            </div>
            <div class="card3-doctor">
                <img src="img/mandoctor.jpg" alt="">
                <div>
                    <strong>Dr.Kevin</strong>
                    <br>
                    <label>General Practitioner</label>
                    <br>
                    <a href=""><button type="button" name="about" value="about">about</button></a>
                </div>
            </div>
            <div class="card4-doctor">
                <img src="img/mandoctor.jpg" alt="">
                <div>
                    <strong>Dr.Kevin</strong>
                    <br>
                    <label>General Practitioner</label>
                    <br>
                    <a href=""><button type="button" name="about" value="about">about</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- artikel -->
    <!-- artikel -->
   <div class="container-artikel">
    <div class="header-artikel">
        <h1>Article <span>Center</span></h1>
        <p>Berita ini Berdasarkan Yang Ada Di Rumah Sakit Center</p>
        <div class="line-artikel"></div>
    </div>
    <div class="three-artikel">
        <div class="card1">
            <p>DITEMUKAN JAME OLEH Dr. Adhen</p>
            <p>Dr. Adhen menemukan pasien tepar bernama
            Jame. Di duga Jame tepar selepas racing
            liar.</p>
        <div class="card2">
            <p>DITEMUKAN JAME OLEH Dr. Adhen</p>
            <p>Dr. Adhen menemukan pasien tepar bernama
            Jame. Di duga Jame tepar selepas racing
            liar.</p>
        <div class="card3">
            <p>DITEMUKAN JAME OLEH Dr. Adhen</p>
            <p>Dr. Adhen menemukan pasien tepar bernama
            Jame. Di duga Jame tepar selepas racing
            liar.</p>
        </div>
    </div>
    <a href="news.html"><div class="btn-rd-more"><label>READ MORE ARTICLES</label></div></a>
</div>
</div>
</div>

    <!-- efek paralax2 -->
    <div class="paralax2">
        <div class="container-img">
            <div class="img-testi1">
                
            </div>
            <div class="img-testi2">
                <!-- <img src="img/testi.png" alt=""> -->
            </div>
            <div class="img-testi3">
                <!-- <img src="img/testi.png" alt=""> -->
            </div>
        </div>


        <div class="container-testi" id="rate-scroll">
            <div class="card-testi1">
                <img src="img/testi.png" alt="">
                <p>"Thank you to everyone in the Hospital center in indo.Very good doctors, nurses and amazing hospitality. The best is that doctors are talking and explaining in a very simple and clear way giving as much time as possible to listen from me as well."</p>
                <label>-David Murry</label>
                <label>(patient)</label>
            </div>
            <div class="card-testi2">
                <img src="img/testi.png" alt="">
                <p>"Thank you to everyone in the Hospital center in indo.Very good doctors, nurses and amazing hospitality. The best is that doctors are talking and explaining in a very simple and clear way giving as much time as possible to listen from me as well."</p>
                <label>-David Murry</label>
                <label>(patient)</label>
            </div>

            <div class="card-testi3">
                <img src="img/testi.png" alt="">
                <p>"Thank you to everyone in the Hospital center in indo.Very good doctors, nurses and amazing hospitality. The best is that doctors are talking and explaining in a very simple and clear way giving as much time as possible to listen from me as well."</p>
                <label>-David Murry</label>
                <label>(patient)</label>
            </div>
        </div>
    </div>

    <!-- maps -->
    <div class="container-maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.0806040799193!2d106.86774661431178!3d-6.383597864215748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ebaff005f277%3A0x9fcd41028665eea8!2sSMK%20Taruna%20Bhakti%20Depok!5e0!3m2!1sid!2sid!4v1664605188270!5m2!1sid!2sid" width="600" height="350" style="border:0; margin-top: 5%; margin-left: 9%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
    <img src="img/hospitalimg.jpg" alt="">
    </div>

    <!-- footer -->
    <div class="container-footer">
        <div class="header-footer">
        <h1>Center <span>Hospital</span></h1>
        <ul>
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Blog</a>
            <a href="">Contact</a>
        </ul>
        </div>
        <div class="logo-footer">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z"/></svg>
        </div>
        <div class="logo-footer-2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
        </div>
        <div class="logo-footer-3">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
        </div>
    </div>
    <div class="foot-footer">(C) Copyright 2022 - VIRIUS Healthcare. <span>All rights reserved.</span></div>
</body>

</html>