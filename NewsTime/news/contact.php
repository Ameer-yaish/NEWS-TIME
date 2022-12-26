<?php

session_start();
include("admin/db.php");
$id1=$_GET["id"];

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/contact.css">

    <title>Abood Salah News</title>
</head>

<body class="article-pg">
<header class="mt-0 pt-0">
    <div class="bg-cover clearfix pt-3">
        <h2 class="logo">News Time</h2>
        <nav class="nav nav-fill mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="https://facebook.com/" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://twitter.com/" target="_blank"><i
                            class="fab fa-twitter"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="aboutus.html"><i class="fas fa-rss"></i></a>
            </li>
        </nav>


        <input type="text" id="nav-search" class="nav-search mx-auto" name="" class="form-control">
        <div class="ml-0 mr-0 pb-1">
            <nav class="navbar navbar-expand-md">

                <button class="navbar-toggler ml-auto" data-target="#my-nav" data-toggle="collapse"
                        aria-controls="my-nav" aria-expanded="false" onclick="myFunction(this)"
                        aria-label="Toggle navigation">
                    <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span>
                </button>
                <div id="my-nav" class="collapse navbar-collapse">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <?php

                        $catex=mysqli_query($con,"select * from caty");
                        while($cate=mysqli_fetch_array($catex))
                        {
                            echo "<li class='nav-item'>";
                            echo "<a class='nav-link' href='cat.php?=cat&id=$cate[0]'>";
                            echo $cate[1];
                            echo "</a>";
                            echo "</li>";
                        }
                        ?>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <form action="" method="POST">
                                <div class="input-group mt-0 mx-auto" style="width:16px;">

                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

    </div>



</header>


<div class="container-fluid ar-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 pr-5">
                <div class="card ar-img-over">

                    <div class="fcf-body">

                        <div id="fcf-form">


                            <form id="fcf-form-id" class="fcf-form-class" method="post" action="process.php">

                                <div class="fcf-form-group">
                                    <label for="Name" class="fcf-label">Your name</label>
                                    <div class="fcf-input-group">
                                        <input type="text" id="name" name="name" class="fcf-form-control" required>
                                    </div>
                                </div>
                                <div class="fcf-form-group">
                                    <label for="Name" class="fcf-label">Subject</label>
                                    <div class="fcf-input-group">
                                        <input type="text" id="subject" name="Subject"  class="fcf-form-control" required>
                                    </div>
                                </div>
                                <div class="fcf-form-group">
                                    <label for="Email" class="fcf-label">Your email address</label>
                                    <div class="fcf-input-group">
                                        <input type="email" id="email" name="email" class="fcf-form-control" required>
                                    </div>
                                </div>

                                <div class="fcf-form-group">
                                    <label for="Message" class="fcf-label">Your message</label>
                                    <div class="fcf-input-group">
                                        <textarea id="message" name="content"  class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
                                    </div>
                                </div>

                                <div class="fcf-form-group">
                                    <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send Message</button>
                                </div>



                            </form>
                        </div>

                    </div>

</body>

<footer class="container-fluid pt-5">
    <div class="container">
        <h2 style="font-size: 30px" class="logo text-center">Abed.Salah && Ameer Yaish</h2>
        <nav class="nav nav-fill mx-auto mt-5">
            <li class="nav-item">
                <a id="endd" class="nav-link" href="https://facebook.com/kareemsalah2010" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://twitter.com/AmeerYaish?s=09&fbclid=IwAR0siwo8Fn6H1PTaCGYwV_I9-ui3LWrtdoPm2DHFmlvTnwi2J6u-jfYb5vc " target="_blank"><i
                            class="fab fa-twitter"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.instagram.com/abood._.salah/"><i class="fab fa-instagram" target="_blank"></i></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-rss"></i></a>
            </li>
        </nav>
    </div>
    <div class="copyright mt-4">
        <p class="text-center">&copy; 2021 <a href="#" class="text-white">News Time</a>. All Rights Reserved. Designed
            by <span style="color:white; font-family: 'Bold Italic Art'"> Abd. Salah && Ameer Yaish</span></p>
    </div>


</footer>

                    <script src="assets/js/popper.min.js"></script>
                    <script src="assets/js/jquery-1.12.0.min.js"></script>
                    <script src="assets/js/bootstrap.min.js"></script>
                    <script src="assets/js/owl.carousel.min.js"></script>
                    <script src="assets/js/article.js"></script>



</body>

</html>