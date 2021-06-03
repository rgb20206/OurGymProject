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
    <title>OurGym | Our Plans </title>
    <link rel="stylesheet" href="../resources/css/style.css">
    <link rel="icon" type="image/x-icon" href="../resources/media/dumbbell-logo-black.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,700;1,100;1,200;1,300;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section class="section-plans">
    <?php include("universal-header.php");  ?>

    <h1>Learn about our plans here!</h1>

    <div class="plans-block">
        <img src="../resources/media/plans-image-bronze.jpg" alt="Bronze">
        <h3>Bronze</h3>
        <ul>
            <li>Our bronze plan is the cheapest!</li>
            <li>Unlimited access to the gym</li>
        </ul>
    </div>

    <div class="plans-block">
        <img src="../resources/media/plans-image-silver.jpg" alt="silver">
        <h3>Silver</h3>
        <ul>
            <li>Our silver plan is the best for value!</li>
            <li>Get free access to the swimming pool</li>
            <li>1 free day pass per month for a friend</li>
            <li>Free personal trainer sessions twice a month</li>
        </ul>
    </div>

    <div class="plans-block">
        <img src="../resources/media/plans-image-gold.png" alt="gold">
        <h3>Gold</h3>
        <ul>
            <li>Our gold plan is the most exclusive!</li>
            <li>It includes VIP classes and access to the VIP locker/changing lounge</li>
            <li>There are perks such as limited access times</li>
            <li>Free personal trainer sessions whenever you like</li>
            <li>Discounts to swimming lessons</li>
            <li>2 free day passes for a friend per something</li>
        </ul>
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
