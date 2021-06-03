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
    <title>OurGym | Contact Us</title>
    <link rel="stylesheet" href="../resources/css/style.css">
    <link rel="icon" type="image/x-icon" href="../resources/media/dumbbell-logo-black.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,700;1,100;1,200;1,300;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="section-contact">
        <?php include("universal-header.php");  ?>

<!--This contact form will use the php/mail script to send an email to my/our email address-->
<!--    I'll add that functionality in the next release-->


        <div class="contact-page">
            <div class="contact-info">

                <h1>Contact Details</h1>
                <p>Phone:<br>012345 987654</p>

                <p>Address:<br>123 Barbell Road<br>Strong Street<br>Gain's Town</p>

                <p>If you are interested in booking one of our classes, please see our <a href="<?=CLASSES ?>">Classes Page</a> to see our availability.</p>

            </div>


            <div class="contact-info">
                <h1>Get in touch</h1>
                <p>If you have any questions, you can also use the form below to get in contact with someone from our team:</p>

                <form class="contact-form" action="">
                    <input type="text" name="name" placeholder="Full name">
                    <input type="email" name="mail" placeholder="Your e-mail">
                    <input type="text" name="subject" placeholder="Subject">
                    <textarea class="text-box" name="message" rows="8" cols="80" placeholder="Enter message here"></textarea>
                    <input class="btn" type="submit" name="submit" value="Send Message">
                </form>
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