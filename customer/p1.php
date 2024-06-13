<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap\bootstrap-icons-1.11.3\font\bootstrap-icons.css">
    <title>Home</title>
    <style>
    <?php
        include 'nav_csss.php';
    ?>

        .box {
            animation: ani 5s infinite linear;
            backdrop-filter: blur(10px);
            position: absolute;
            top: 50%;
            translate: 0% -50%;
        }

        @keyframes ani {
            0% {
                transform: rotate(0deg);
                box-shadow: 1px 5px 2px rgb(33, 253, 118);
            }

            25% {
                transform: rotate(80deg);
                box-shadow: 1px 5px 2px rgb(0, 182, 228);
            }

            50% {
                transform: rotate(160deg);
                box-shadow: 1px 5px 2px rgb(166, 159, 255);
            }

            75% {
                transform: rotate(240deg);
                box-shadow: 1px 5px 2px rgb(58, 44, 255);
            }

            100% {
                transform: rotate(360deg);
                box-shadow: 1px 5px 2px rgb(182, 74, 255);
            }
        }

        body {
            background: url(/P1/login_pages/bg1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            /* background: #c8e5ff; */
            font-family: 'Arial', sans-serif;
        }


        /* #contactForm {
            max-width: 500px;
            margin: 0 auto;
        } */


        .title {
            background-color: #007bff;
            padding: 0px;
        }
        .form-control{
            background: transparent;
            backdrop-filter: blur(10px);
            box-shadow: 2px 2px 10px 2px gray;
            
        }
    </style>
</head>

<body>
    <?php

    include 'customer_nav.php';
    // include 'normalnav.php';

    ?>

    <div class="container-fluid h-100 w-100" id="home">
        <div class="row d-flex justify-content-center align-content-center" style="height: 88vh;">
            <div class="circle rounded-circle box col-lg-4 col-md-4" style="height: 350px; width: 350px;"></div>
            <a href="shoping.php?id=<?php echo $id = $q1[0] ?>" class="nav-link fs-2 text-center position-absolute z-2"
                style="top: 50%; translate: 0% -50%;">Click For Shoping</a>
        </div>
    </div>

    <div class="container-fluid" id="About">
        <div class="row">

            <!-- <div class="align-content-center title" style="background-color: #007bff; padding: 0px;">
                <p class="text-center align-items-center text-light display-4" style="padding: 0px;"></p>
            </div> -->
            <div class="title">
                <h1 class="display-4 text-light text-center">About Our E-Commerce Store</h1>
            </div>

            <div class="container my-5">
                <div class="">
                    <h2>Our Story</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut dui eu dolor fringilla tristique.
                        Nulla
                        facilisi. Duis vel nisl vel ligula ultrices consectetur eu vel erat.</p>
                </div>

                <div class="mt-5">
                    <h2>Our Mission</h2>
                    <p>Integer consectetur enim id tortor tincidunt, id fermentum lectus sodales. In hac habitasse
                        platea
                        dictumst. Sed dapibus ante vitae elit feugiat, sit amet scelerisque orci tristique.</p>
                </div>

                <div class="mt-5">
                    <h2>Meet Our Team</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut dui eu dolor fringilla tristique.
                        Vestibulum vel elit ac lacus bibendum fermentum.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="contact_us">
        <div class="row">
            <div class="title">
                <h1 class="display-4 text-light text-center">Contact Us</h1>
            </div>

            <div id="main" class="container my-5">
                <section>
                    <h2 class="text-center">Get in Touch</h2>
                    <p class="text-center">If you have any questions, feel free to reach out to us. We are here to help!</p>

                    <form id="contactForm" action="customerquery.php?id=<?php echo $id = $q1[0] ?>" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" required
                                aria-label="Your Name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Your Email</label>
                            <input type="email" class="form-control" id="email" name="email" required
                                aria-label="Your Email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label fw-bold">Your Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required
                                aria-label="Your Message"></textarea>
                        </div>
                        <button type="submit" name="savebutton" class="btn btn-primary">Submit</button>
                    </form>
                </section>
            </div>

            <div class="text-light text-center title">
                <p>&copy; 2024 Your E-Commerce Store. All rights reserved.</p>
            </div>

        </div>
    </div>
</body>

</html>

<script>
    function clic() {
        document.getElementById('pro').style.display = "flex";
    }
    
    function profile() {
        document.getElementById('pro').style.display = 'inline-block';
    }

    function cros() {
        document.getElementById('pro').style.display = 'none';
    }
</script>