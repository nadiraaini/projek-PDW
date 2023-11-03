<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body>
    <section class="header">
        <a href="home.php" class="logo">JalanYuk?</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
            <a href="contact.php">contact</a>
            <a href="favorite.php">favorites</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(images/rajaampat.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>flying around indonesia</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/labuanbajo.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>flying around indonesia</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/nusapenida.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>flying around indonesia</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

        </div>
    </section>
    <!-- services section starts -->

    <section class="services">

        <h1 class="heading-title"> our services </h1>
        <div class="box-container">

            <div class="box">
                <img src="images/adventure.ico" alt="">
                <h3>adventure</h3>
            </div>

            <div class="box">
                <img src="images/tourguide.ico" alt="">
                <h3>tour guide</h3>
            </div>

            <div class="box">
                <img src="images/trekking.ico" alt="">
                <h3>trekking</h3>
            </div>

            <div class="box">
                <img src="images/campfire.ico" alt="">
                <h3>camp fire</h3>
            </div>

            <div class="box">
                <img src="images/offroad.ico" alt="">
                <h3>off road</h3>
            </div>
            <div class="box">
                <img src="images/camping.ico" alt="">
                <h3>camping</h3>
            </div>

        </div>

    </section>

    <!-- services section ends -->


    <section class="home-about">
        <div class="image">
            <img src="images/aboutusisi.jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p><b>Jalanyuk?</b> merupakan Tour Operator yang menjalankan langsung aktivitas tour dengan konsep
                berpetualang di wisata alam Indonesia.<br>
                Berpengalaman lebih dari 7 hari :)</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>

    <section class="home-packages">
        <h1 class="heading-title">our packages</h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/gunungrinjani.jpg" alt="" class="">
                </div>
                <div class="content">
                    <h3>Trip gunung rinjani 9D8N</h3>
                    <p>IDR 1,999,000</p>
                    <a href="rinjani.php" class="btn">details</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/karjaw.jpg" alt="" class="">
                </div>
                <div class="content">
                    <h3>trip karimun jawa 3D2N</h3>
                    <p>IDR 1,200,000</p>
                    <a href="karjaw.php" class="btn">details</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/bromow.jpg" alt="" class="">
                </div>
                <div class="content">
                    <h3> trip to bromo</h3>
                    <p>IDR 300,000</p>
                    <a href="triptobromo.php" class="btn">details</a>
                </div>
            </div>
        </div>
        <div class="load-more"> <a href="packages.php" class="btn">load more</a></div>
    </section>

    <section class="home-offer">
        <div class="content">
            <h3>up to 25%</h3>
            <p>dengan diskon liburan lebih menyenangkan</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </section>


    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="contact.php"> <i class="fas fa-angle-right"></i> ask questions</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> about us</a>
                <a href="favorite.php"> <i class="fas fa-angle-right"></i> favorite</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +6287788172003</a>
                <a href="#"> <i class="fas fa-phone"></i> +6285742830654</a>
                <a href="#"> <i class="fas fa-phone"></i> jalanyuk@gmail.com</a>
                <a href="#"> <i class="fas fa-phone"></i> sleman, yogyakarta 55584</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>

        </div>

        <div class="credit"> created body by <span>saibu&nadirtut</span> | all rights reserved! </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>