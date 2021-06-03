<?php

include("constants/constants.php");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Gym | Facilities</title>
    <link rel="stylesheet" href="../resources/css/style.css">
    <link rel="icon" type="image/x-icon" href="../resources/media/dumbbell-logo-black.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,700;1,100;1,200;1,300;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<section class="section-facilities">
<?php include ("universal-header.php"); ?>

    <div class="row">

        <div class="column">
            <img class="box-image" src="../resources/media/cardio.jpg" alt="cardio-room">
            <div class="box-text">
                <div class="box-title">Cardio</div>
                <p class="box-description">A modern, well equipped cardio suite!</p>
            </div>
        </div>

        <div class="column">
            <img class="box-image" src="../resources/media/swimming.jpg" alt="swimming-pool">
            <div class="box-text">
                <div class="box-title">Swimming Pool</div>
                <p class="box-description">25m Pool - Adult's & Kids lessons, free-swimming & more!</p>
            </div>
        </div>

        <div class="column">
            <img class="box-image" src="../resources/media/weights.jpg" alt="weights-room">
            <div class="box-text">
                <div class="box-title">Weights</div>
                <p class="box-description">Full range of equipment. Barbells, Kettlebells, etc.</p>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="column">
            <img class="box-image" src="../resources/media/climbing.jpg" alt="climbing-wall">
            <div class="box-text">
                <div class="box-title">Climbing Wall</div>
                <p class="box-description">No ropes or equipment required!</p>
            </div>
        </div>

        <div class="column">
            <img class="box-image" src="../resources/media/courts.jpg" alt="indoor-courts">
            <div class="box-text">
                <div class="box-title">Indoor Courts</div>
                <p class="box-description">Multiple indoor courts available for hire/classes</p>
            </div>
        </div>

        <div class="column">
            <img class="box-image" src="../resources/media/track.jpg" alt="track">
            <div class="box-text">
                <div class="box-title">Track</div>
                <p class="box-description">Full-size 400m asphalt track. Please email for availability</p>
            </div>
        </div>

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
