<?php
require("login.php");
//redirect to template page if the user is logged in
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <!-- Main Project Css file -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/hotel.css">
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

         <!-- Login script -->
        <script>
            $(document).ready(function() {
                $("#login-form").submit(function(event) {
                    event.preventDefault(); // Prevent default form submit action
                    var username = $("#username").val();
                    var password = $("#password").val();
                    $.ajax({
                        url: "login.php",
                        method: "POST",
                        data: { username: username, password: password },
                        success: function(response) {
                            if (response == "success") {
                             header("Location: welcome.php"); // Redirect to main forum page                          
                            } else {
                                $("#error-message").html(response); // Display error message
                            }
                        }
                    });
                });
            });
        </script>
    
</head>

<body>
    <!-- Start Header -->
    <div class="header">
        <div class="container">
            <i class="fa-solid fa-hotel fa-1x"> Booking</i>
            <div class="links">
                <span class="icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Header -->
    <!-- Start Landing Section  -->
    <div class="landing">
        <div class="intro-text">
            <h1>Hello There</h1>
            <p>We Can Help You Find The Best Hotel Room</p>
        </div>
    </div>
    <!-- End   Landing Section-->
    <!-- Start About  -->
    <div class="about" id="about">
        <div class="container">
            <h2 class="special-heading">About</h2>
            <p>We try our best to help you</p>
            <div class="about-content">
                <div class="image">
                    <img src="images/about.jpg" alt="">
                </div>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Nihil nemo neque voluptate tempora velit cum non,
                        fuga vitae architecto delectus sed maxime rerum impedit aliquam obcaecati,
                        aut excepturi iusto laudantium!</p>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Nihil nemo neque voluptate tempora velit cum non,
                        fuga vitae architecto delectus sed maxime rerum impedit aliquam obcaecati,
                        aut excepturi iusto laudantium!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End   About  -->
    <!-- Start Form -->
    <div class="form">
        <div class="container">
        <form id="login-form" method="post">
                <h1>Sign in</h1>
            <input class="input" type="text" id="username" required placeholder="username" name="username">
            <input class="input" type="password" id="password" required placeholder="password" name="password" minlength="12"
                maxlength="22">
                <input type="submit" value="Login">
                <div id="error-message"></div> <!-- Display error message here -->  
            </form>
          
        </div>
    </div>
    <!-- End Form -->
    <!-- Start Contact -->
    <div class="contact" id="contact">
        <div class="container">
            <h2 class="special-heading">Contact</h2>
            <p>We are here to help you </p>
            <div class="info">
                <p class="label">Feel free to drop us a line at:</p>
                <a href="mailto:leonagency@mail.com?subject=Contact" class="link">hotelbooking@mail.com</a>
                <div class="social">
                    Find Us On Social Networks
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->
    <!-- Star Footer -->
    <div class="footer"> &copy; 2023 <span>Booking</span> All Right Reserved</div>
    <!-- End Footer -->
</body>

</html>
