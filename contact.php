<?php


if($_POST["message"]) {


mail("bwittenberg.developer@gmail.com", "Email via site",


$_POST["Thanks so much for contacting us, We will get back to you shortly."]. "From: bwittenberg.developer@gmail.com");


}


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-V68K2ST16N"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-V68K2ST16N');
    </script>
    <meta name="description" content="Cleaning Service">
    <meta name="keywords" content="Cleaning, House Cleaning, Eco-Friendly, eco, sharon, home cleaning, home, cleaning service, middle TN, TN, Murphreesboro, Nashville">
    <meta name="author" content="Brooke Wittenberg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet">
    <title>Sharon's Eco-Friendly Cleaning</title>
    <link rel="shortcut icon" type="image/jpg" href="./assets/IMG_4523.jpg" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.html"><img class="logo" src="./assets/IMG_4523.jpg" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
                    <a class="nav-link" href="./about.html">About</a>
                    <a class="nav-link" href="./services.html">Services</a>
                    <a class="nav-link" href="./testimonial.html">Testimonials</a>
                    <a class="nav-link" href="./contact.html">Contact Us</a>

                </div>
            </div>
        </div>
    </nav>
    <div class="container">


        <div class="row">
            <div class="text-center">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="home-header display-4 text-white">Contact Us</h1>
                        <p class="lead text-white">615.971.0956 | sharonrose1591@gmail.com</p>
                        <p class="lead text-white">Or</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="text-center">
                <div class="hero-unit hero-unit-fluid">
                    <form method="post" action="contact.php" onsubmit="location.href='thanks.html';">

                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email">
                        <label for="name">Name:</label>
                        <input type="name" class="form-control" id="name">
                        <label for="message">Message:</label>
                        <textarea class="form-control" id="message" name="message" rows="4"></textarea>

                        <button type="submit" class="btn btn-outline-success" value="submit">Send</button>



                </div>
            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>