<?php
    include("constants/constants.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OurGym | Home</title>
    <link rel="stylesheet" href="../resources/css/style.css">
    <link rel="icon" type="image/x-icon" href="../resources/media/dumbbell-logo-black.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,700;1,100;1,200;1,300;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="main-header">
        <nav>
            <a href="index.php"><img src="../resources/media/dumbbell-logo-white.png"></a>
            <div class="header-links">
                <ul>
                    <li><a href="<?=HOME ?>">Home</a></li>
                    <li><a href="<?=ABOUT ?>">About</a></li>
                    <li><a href="<?=PLANS ?>">Our Plans</a></li>
                    <li><a href="<?=CONTACT ?>">Contact Us</a></li>
                </ul>
            </div>
        </nav>

        <div class="introduction">
            <h1>Welcome to OurGym</h1>
            <p>Looking to start working out and keeping fit? Well look no further and join the best gym in the UK,
                <br>OURGYM!</p>
        </div>
    </section>

    <!---- FOOTER ---->

    <footer>
        <div class="footer-text">
            <h3>OurGym</h3>
            <p>Follow us on any of our social media platforms for the latest updates and great deals!</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
        <div class="copyright">
            <p>copyright &copy;2020 Jenna, Arran, Dom :)</p>
        </div>
    </footer>

</body>
</html>
