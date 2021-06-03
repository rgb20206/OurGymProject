<?php

include("constants/constants.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OurGym | About </title>
    <link rel="stylesheet" href="../resources/css/style.css">
    <link rel="icon" type="image/x-icon" href="../resources/media/dumbbell-logo-black.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,700;1,100;1,200;1,300;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section class="section-about">
    <?php include("universal-header.php");  ?>
    <div class="about">
        <div>
            <h1>About OurGym</h1>
            <p>From low cost flexible memberships and 24 hour opening times,
                <br>to quality gym equipment and classes included, there are loads of reasons why
                <br>OurGym is one of the top rated in the UK.
                <br>Our mission is to help people achieve their fitness goals. Come and join us today.
            </p>
        </div>
        <div>
            <h3>Learn a bit more about us in these 5 fun facts below!</h3>
            <ul class="bullet-point">
                <li>We were voted number 1 gym in the UK in 2014</li>
                <li>We were the first gym in the UK to introduce anti-gravity yoga</li>
                <li>We offer over 20 different classes, more than 80% of leading gyms in England</li>
                <li>Our most popular class is our 'pop spin class' in which we have over 200 weekly participants </li>
                <li>We offer online classes as part of your membership</li>
            </ul>
        </div>

<!--------      Adding links to the Facilities Page     -------->
        <div>
            <h3>Facilities</h3>
            <p>Have a look <a href="<?=FACILITIES ?>">Here</a> at our Amazing Facilities </p>
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
