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

    </section>
    <section class="booking">
        <h1 class="heading-title">Boleh banget kalau ada kesan pesan!</h1>
        <form action="contact_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="siapa namamu" name="name">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="mana email???" name="email">
                </div>
                <div class="inputBox">
                    <span>pesan :</span>
                    <input type="textarea" placeholder="siap mendengarkan pesan-pesanmu" name="message">
                </div>
            </div>

            <input type="submit" value="submit" class="btn" name="send">
        </form>
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