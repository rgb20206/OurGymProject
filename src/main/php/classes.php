<?php

include("constants/constants.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OurGym | Classes</title>
    <link rel="stylesheet" href="../resources/css/style.css">
    <link rel="icon" type="image/x-icon" href="../resources/media/dumbbell-logo-black.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,700;1,100;1,200;1,300;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section class="section-classes">
    <?php include("universal-header.php");  ?>

    <div class="classes">
        <div class="classes-intro"></div>
        <h1>Our Classes</h1>
        <p>Looking for a different way to keep fit? Why not try one of our classes?
            <br>They are sure to keep you on your toes!</p>

        <div class="classes-row">
            <div class="yoga-column">
                <h3>Yoga</h3>
                <p>Looking to improve your flexibility or just looking for a nice stretch,
                    why not sign up for one of our yoga classes for a calm and stress free experience.
                </p>
            </div>
            <div class="hiit-column">
                <h3>HIIT</h3>
                <p>Looking to keep fit and burn some fat at the same time,
                    sign up for one of our HIIT classes and you won't be left feeling unsatisfied.
                </p>
            </div>
            <div class="zumba-column">
                <h3>Zumba</h3>
                <p>Move with the groove!
                    Sign up for one of our Zumba classes and dance your way to a healthier lifestyle.
                </p>
            </div>
        </div>
    </div>

</section>

<!--Footer-->
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