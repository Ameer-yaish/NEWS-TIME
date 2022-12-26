<?php


include("admin/db.php");

?>
<!doctype html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/aboutus.css">
        <title>NewsTime</title>
</head>

<body>
    <header class="mt-0 pt-0">
        <div class="bg-cover clearfix pt-3">
            <h2 class="logo">News Time</h2>
            <nav class="nav nav-fill mx-auto">
                
            </nav>




            <form action="search.php" method="POST">
                <img src="assets/images/search-icon.png" id="toggle-search"
                     class="ml-2 toggle-search" alt="search icon" >

                <!--search-->
                <td align=center>
                    <form method=post action='search.php'>
                        <select style="background-color: wheat" name=type>
                            <option  value=title>News Title</option>
                            <option value=content>New</option>
                        </select>

                        <input type="text" id="nav-search" class="nav-search mx-auto" name="new" class="form-control">
                        <input style="background-color: wheat " type=submit value=Search>
                    </form>
                    <!--search-->






                    <div class="ml-0 mr-0 pb-1">
                        <nav class="navbar navbar-expand-md">
            </form>







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
                                <a class="nav-link" href="#popup">About Us</a>
                                <div class="popup" id="popup">
                                    <div class="popup-inner">
                                        <div class="popupphoto">
                                            <img src="https://images.pexels.com/photos/193349/pexels-photo-193349.jpeg?cs=srgb&dl=access-algorithm-binary-193349.jpg&fm" alt="">
                                        </div>
                                        <div class="popuptext">
                                            <h1>NewsTime site</h1>
                                            <p>This project was designed by : Ameer Yahia Yaish & Abed Kareem Salah , Faculty of Engineering and Technology in Najah National University </br>Instructor name : Sufian Samara</br> for more <a href="#endd">Visit us on our acconts</a></p>
                                        </div>
                                        <a class="closepopup" href="#">X</a>
                                    </div>
                                </div>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="admin">Admin</a>
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

        <div class="row ml-0 mr-0">
            <div class="col-md-6 pr-0">
                <div class="card">
                    <?php
                    $new=mysqli_query($con,"SELECT * FROM `nnews` WHERE `catid`='7' ORDER BY `id` DESC LIMIT 1 ");
                    while($id2=mysqli_fetch_array($new))
                    {
                        echo "<img height='450' class='card-img' src='admin/files/$id2[3]' alt='' /> ";
                        echo " <div class= 'card-img-overlay d-flex align-items-center justify-content-center flex-column'> ";
                        echo "<h8><p>$id2[4] </p></h8>";
                        echo"<hr />";
                        echo "<h8><h2>$id2[1]</h2></h8>";
                        echo "<a href='f.php?id=$id2[0]' class='btn'> Read More </a>";


                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-0">
                <div class="card">

                        <?php
                        $new=mysqli_query($con,"SELECT * FROM `nnews` WHERE `catid`='5' ORDER BY `id` DESC LIMIT 1 ");
                        while($id2=mysqli_fetch_array($new))
                        {
                            echo "<img height='450' class='card-img' src='admin/files/$id2[3]' alt='' /> ";
                            echo " <div class= 'card-img-overlay d-flex align-items-center justify-content-center flex-column'> ";
                            echo "<h8><p>$id2[4] </p></h8>";
                            echo"<hr />";
                            echo "<h8><h2>$id2[1]</h2></h8>";
                            echo "<a href='f.php?id=$id2[0]' class='btn'> Read More </a>";


                        }
                        ?>



                    </div>
                </div>
            </div>

            <div class="col-md-3 pr-0 first">
                <div class="">
                    <a class="card-img" href="https://edition.cnn.com/">
                    <img width="100%" height="240" src="assets/images/11.jpg" alt="">
                    </a>
                </div>
            </div>

        <div class="col-md-3 pr-0 first">
            <div class="">
                <a class="card-img" href="https://www.bbc.com/news/technology">
                    <img width="100%" height="240" src="assets/images/12.jpg" alt="">
                </a>
            </div>
        </div>

        <div class="col-md-3 pr-0 first">
            <div class="">
                <a class="card-img" href="https://indianexpress.com/section/sports/">
                    <img width="100%" height="240" src="assets/images/13.jpg" alt="">
                </a>
            </div>
        </div>

        <div class="col-md-3 pr-0 first">
            <div class="">
                <a class="card-img" href="https://www.travelpulse.com/news/">
                    <img width="100%" height="240" src="assets/images/14.jpg" alt="">
                </a>
            </div>
        </div>


    </header>

    <div class="container-fluid video-player">
        <div class="container">
            <div class="screen embed-responsive embed-responsive-16by9">
                <iframe id="screen" src="https://www.youtube.com/embed/iTLssSIetq0" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>

            <div class="play-list">
                <div class="owl-carousel owl-carousel4 owl-theme">
                    <div>
                        <div class="card"> <img class="card-img link-img"
                                data-link="https://www.youtube.com/embed/h4YNXqlO9ts" src="assets/images/play1.png"
                                alt="">
                        </div>
                    </div>
                    <div>
                        <div class="card"> <img class="card-img link-img"
                                data-link="https://www.youtube.com/embed/jPUpwGvsbzE" src="assets/images/play2.png"
                                alt="">

                        </div>
                    </div>
                    <div>
                        <div class="card"> <img class="card-img link-img"
                                data-link="https://www.youtube.com/embed/b8w6slaJMD8" src="assets/images/play3.png"
                                alt="">

                        </div>
                    </div>
                    <div>
                        <div class="card"> <img class="card-img link-img"
                                data-link="https://www.youtube.com/embed/jyEIejj-CQU" src="assets/images/play4.png"
                                alt="">

                        </div>
                    </div>
                    <div>
                        <div class="card"> <img class="card-img link-img"
                                data-link="https://www.youtube.com/embed/MDHZbcgVkLc" src="assets/images/play5.png"
                                alt="">

                        </div>
                    </div>
                </div>
            </div>
            <hr>



            <div class="row vr-gallery">
                <div class="col-md-8 mb-4">
                    <div class="row">
                        <div class="col-md-12 col-lg-7 pr-0 pd-md">

                            <?php
                            $new=mysqli_query($con,"SELECT * FROM `nnews` WHERE `catid`='8' ORDER BY `id` DESC LIMIT 1 ");
                            while($id2=mysqli_fetch_array($new))
                            {
                                echo "<img height='420' src='admin/files/$id2[3]' alt='' /> ";
                                echo "</div>";
                                echo " <div class='col-md-12 col-lg-5 light-bg cus-pd cus-arrow-left'> ";
                                echo "<p><small>$id2[4] </small></p>";
                                echo "<h3>$id2[1]</h3>";
                        //        echo"<p> saed </p>";
                                echo "<a href='f.php?id=$id2[0]' class='btn'> Read More </a>";


                            }
                            ?>





                        </div>
                    </div>
                </div>

                <div class="col-md-4 pl-4 mb-4">
                    <div class="card">
                        <img class="card-img h-100" src="assets/images/video-cover1.jpg" alt="">
                        <div class="card-img-overlay opacity text-center">
                            <a class="play-1" href="https://www.youtube.com/watch?v=bKXjF4TbxFw&ab_channel=Samsung"><img
                                    src="assets/images/play-icon.png" alt=""></a>
                            <h5 class="card-title">ADS</h5>

                        </div>
                    </div>
                </div>

                <div class="col-md-8 mb-4 pr-0 pd-md">
                    <div class="card">

                        <?php
                        $new=mysqli_query($con,"SELECT * FROM `nnews` WHERE `catid`='9' ORDER BY `id` DESC LIMIT 1 ");
                        while($id2=mysqli_fetch_array($new))
                        {
                            echo "<img class= 'card-img h-100' height='420'  src='admin/files/$id2[3]' alt='' /> ";
                            echo "<div class='card-img-overlay'> ";
                            echo " <div class='contact-box'> ";
                            echo "<p><small>$id2[4] </small></p>";
                            echo "<h3>$id2[1]</h3>";
                    //        echo"<p> saed </p>";
                            echo "<a href='f.php?id=$id2[0]' class='btn'> Read More </a>";


                        }
                        ?>




                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 pl-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="assets/images/gallery-img3.jpg" alt="">
                        <div class="card-body bg-gray cus-pd2 cus-arrow-up">
                            <p><small>may 9, 2021</small></p>
                            <h3>Martina Topley</h3>
                            <p>Martina Topley-Bird has announced new album ‘Forever I Wait’ – listen to lead single ‘Pure Heart’ below.
                                Set to arrive on September 10, it’s the Bristol singer-songwriter’s first full-length release since her acclaimed 2010 LP ‘Some Place Simple’.
                                The 12 track album – which was written, and re-drafted, over a prolonged period of time – is Topley-Bird’s first self-produced project and sees her collaborate throughout with Massive Attack‘s Robert del Naja (aka 3D).</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 mb-4">
                    <div class="row">
                        <div class="col-md-12 col-lg-7 pr-0 pd-md">
                            <img src="assets/images/gallery-img4.jpg" alt="">
                        </div>
                        <div class="col-md-12 col-lg-5 light-bg cus-pd cus-arrow-left">
                            <p><small>may 9, 2020</small></p>
                            <a href="page.php"><h3>Covid-19</h3></a>
                            <p>
                                Globally, new COVID-19 cases increased for the ninth consecutive week,
                                with nearly 5.7 million new cases reported in the last week – surpassing previous peaks.
                                The number of new deaths increased for the sixth consecutive week, with over 87 000 new deaths reported.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 pl-4 mb-4">
                    <div class="card">
                        <img class="card-img h-100" src="assets/images/video-cover2.jpg" alt="">
                        <div class="card-img-overlay opacity text-center">
                            <a class="play-1" href="https://www.youtube.com/watch?v=QA-qgSB076c&ab_channel=TopGear"><img
                                    src="assets/images/play-icon.png" alt=""></a>
                            <h5 class="card-title">ADS</h5>

                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>


 <div class="container-fluid fh5co-recent-news mt-5 pb-5">
        <h2 class="text-uppercase text-center">Around The World</h2>
        <hr class="mx-auto" />

        <div class="play-list mt-5 pt-4">
            <div class="owl-carousel owl-carousel5 owl-theme">
                <div>

                    <a href="https://www.expertafrica.com/wildlife/africa "> <div class="card"> <img class="card-img link-img" src="assets/images/news1.png" alt="">
                        <div class="card-img-overlay">

                            <div class="bottom-area">

                             <h4 class="text-white mt-2">Animals</h4>
                                <p class="text-white">wildlife in africa</p>
                            </div>
                        </div>
                    </div></a>
                </div>
                <div>
                    <a href="https://news.un.org/en/story/2020/11/1076952"> <div class="card"> <img class="card-img link-img" src="assets/images/news2.png" alt="">
                        <div class="card-img-overlay">

                            <div class="bottom-area">

                                <h4 class="text-white mt-2">Olives</h4>
                                <p class="text-white">olive trees in palestine</p>
                            </div>
                        </div>

                        </div></a>
                </div>
                <div>
                    <a href="https://tokyotreat.com/blog/japanese-anime-culture"><div class="card"> <img class="card-img link-img" src="assets/images/news3.png" alt="">
                        <div class="card-img-overlay">

                            <div class="bottom-area">

                                <h4 class="text-white mt-2">Anime</h4>
                                <p class="text-white">manga and anime culture in japan</p>
                            </div>
                        </div>
                        </div></a>
                </div>
                <div>
                    <a href="https://en.wikipedia.org/wiki/Coffee_production_in_India"><div class="card"> <img class="card-img link-img" src="assets/images/news4.png" alt="">
                        <div class="card-img-overlay">

                            <div class="bottom-area">

                                <h4 class="text-white mt-2">Coffee</h4>
                                <p class="text-white">seeding coffee in india</p>
                            </div>
                        </div>
                        </div></a>
                </div>
                <div>
                    <a href="https://www.sandiegouniontribune.com/entertainment/things-to-do/story/2019-09-27/filipino-tradition-culture-custom-told-through-dance-and-music">    <div class="card"> <img class="card-img link-img" src="assets/images/news5.png" alt="">
                        <div class="card-img-overlay">

                            <div class="bottom-area">

                                <h4 class="text-white mt-2">Dancing </h4>
                                <p class="text-white">dancing culture in philippine</p>
                            </div>
                        </div>
                        </div></a>
                </div>
                <div>
                    <a href="https://www.savoredjourneys.com/guide-to-eating-sushi-in-japan/">    <div class="card"> <img class="card-img link-img" src="assets/images/news6.png" alt="">
                        <div class="card-img-overlay">

                            <div class="bottom-area">

                                <h4 class="text-white mt-2">Suchi</h4>
                                <p class="text-white">traditional food in japan</p>
                            </div>
                        </div>
                        </div></a>
                </div>

            </div>
        </div>
    </div>

    



    <footer class="container-fluid pt-5">
        <div class="container">
            <h2 class="logo text-center">Abed.Salah && Ameer Yaish</h2>
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
                        <a class="nav-link" href="https://www.instagram.com/abood._.salah/"><i class="fab fa-instagram"></i></a>
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
    <script src="assets/js/jquery.yu2fvl.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>