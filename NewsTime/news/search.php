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

        <title>News Time</title>
</head>

<body>
<header class="mt-0 pt-0">
    <div class="bg-cover clearfix pt-3">
        <h2 class="logo">News Time</h2>
        <nav class="nav nav-fill mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="https://facebook.com/kareemsalah2010" target="_blank"><i
                        class="fab fa-facebook-f"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://twitter.com/AmeerYaish?s=09&fbclid=IwAR0siwo8Fn6H1PTaCGYwV_I9-ui3LWrtdoPm2DHFmlvTnwi2J6u-jfYb5vc" target="_blank"><i
                        class="fab fa-twitter"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.instagram.com/abood._.salah/"><i class="fab fa-instagram"></i></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="aboutus.html"><i class="fas fa-rss"></i></a>
            </li>
        </nav>
        <form action="search.php" method="POST">


            <input type="text" id="nav-search" class="nav-search mx-auto" name="" class="form-control">
            <div class="ml-0 mr-0 pb-1">
                <nav class="navbar navbar-expand-md">
        </form>
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



                <div class="input-group mt-0 mx-auto" style="width:16px;">
                    <div class="">



                    </div>

                </div>
                </form>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">

                    <div class="input-group mt-0 mx-auto" style="width:16px;">


                    </div>

                </li>
            </ul>







</header>


<?php
$new1=addslashes(strip_tags($_POST["new"]));
$type1=addslashes(strip_tags($_POST["type"]));

?>

<table style="width: 100%" border="0" align="center" width="80%">
    <tr bgcolor="999999">

        <td style="display: none">عدد</td>
        <td>عنوان الخبر</td>
        <td>الصورة</td>
        <td>التاريخ</td>
        <td >عدد المشاهدات</td>
        <td>اسم القسم</td>

    </tr>


    <?php
    $count=1;
    $xx=mysqli_query($con,"select * from nnews where $type1 like '%$new1%'");
    while($x=mysqli_fetch_array($xx))
    {

        if($count%2==0)
            echo "<tr >";
        else
            echo "<tr>";


        echo "<td>";
        echo "<a href='f.php?id=$x[0]'>";
        echo $x[1];
        echo "</td>";
        echo "<td><img src='admin/files/$photo$x[3]' width='60' height='60' /> </td>";
        echo "<td>$x[4]</td>";
        echo "<td>$x[5]</td>";
        echo "<td>";
        //////////////////////////////

        $yy=mysqli_query($con,"select namecat from caty where id='$x[6]'");
        $y=mysqli_fetch_array($yy);
        echo $y[0];

        //////////////////////////////
        echo "</td>";
        echo "</tr>";
        $count++;
    }

    ?>

</table>











</div>

</div>
</div>


<div style="visibility:hidden " class="container-fluid fh5co-recent-news mt-5 pb-5">


    <div class="play-list mt-5 pt-4">
        <div class="owl-carousel owl-carousel5 owl-theme">
            <div>

                <div class="card"> <img class="card-img link-img" src="assets/images/news6.png" alt="">
                    <div class="card-img-overlay">
                        <div class="top-area"><a href="#" class="text-center d-block"><i
                                    class="far fa-heart"></i></a></div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>






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
<script src="assets/js/jquery.yu2fvl.js"></script>
<script src="assets/js/main.js"></script>

</body>

</html>