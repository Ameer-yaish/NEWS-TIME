<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Covid-19 </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="page.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css"></head>


<body>

<!-- header section starts  -->

<header>

    <a href="#" class="logo">c<span class="fas fa-virus"></span>ovid-19</a>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li><a class="active" href="index.php">home</a></li>
            <li><a href="#protect">protect</a></li>
            <li><a href="#symtoms">symtoms</a></li>
            <li><a href="#chart">statistics</a></li>
            <li><a href="#handwash">handwash</a></li>
            <li><a href="#Vaccines ">Vaccines </a></li>
            <li><a href="admin">admin</a></li>
        </ul>
    </nav>

</header>

<section class="home" id="home">
    <div class="content">

        <span>Covid-19</span>
        <h3>stay safe, stay home</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolores quibusdam ad sapiente quod harum recusandae esse voluptates repellat tempore.</p>
        <a href="https://www.cdc.gov/coronavirus/2019-ncov/prevent-getting-sick/prevention.html?fbclid=IwAR07mQY4ti5RWHvDhXHzU58gxvDSsk0lbsFUQMLJkKusoD23W7x9N0n0Vh4" class="btn">protect now</a>

    </div>

    <div class="im" >
        <div class="slider">
            <div class="slides">
                <!--radio buttons start-->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <!--radio buttons end-->
                <!--slide images start-->
                <div class="slide first">
                    <img src="img/covid19.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="img/covid190.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="img/0.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="img/00.jpg" alt="">
                </div>
                <!--slide images end-->
                <!--automatic navigation start-->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
                <!--automatic navigation end-->
            </div>
            <!--manual navigation start-->
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
            <!--manual navigation end-->
        </div>
        <!--image slider end-->

        <script type="text/javascript">
            var counter = 1;
            setInterval(function(){
                document.getElementById('radio' + counter).checked = true;
                counter++;
                if(counter > 4){
                    counter = 1;
                }
            }, 5000);
        </script>
    </div>

</section>

<!-- home section ends -->

<section class="protect" id="protect">

    <h1 class="heading">take steps to <span>protect</span> yourself</h1>

    <div class="box-container">

        <div class="box">
            <img src="img/protect-1.png" alt="">
            <h3>Wear A Face Mask</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et ab magni consequatur, quae in repellat. Placeat deserunt vitae alias dignissimos!</p>
            <a href="https://www.cdc.gov/coronavirus/2019-ncov/prevent-getting-sick/prevention.html" class="btn">learn more</a>
        </div>

        <div class="box">
            <img src="img/protect-2.png" alt="">
            <h3>Wash Your Hands</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et ab magni consequatur, quae in repellat. Placeat deserunt vitae alias dignissimos!</p>
            <a href="https://www.cdc.gov/coronavirus/2019-ncov/prevent-getting-sick/prevention.html" class="btn">learn more</a>
        </div>

        <div class="box">
            <img src="img/protect-3.png" alt="">
            <h3>Avoid Close Contact</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et ab magni consequatur, quae in repellat. Placeat deserunt vitae alias dignissimos!</p>
            <a href="https://www.cdc.gov/coronavirus/2019-ncov/prevent-getting-sick/prevention.html" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- symtoms section starts  -->

<section class="symtoms" id="symtoms">

    <div class="content">
        <h1 class="heading">What Are The Main <span>Symptoms?</span></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis eos ex, magnam odit quaerat labore amet! Numquam obcaecati nobis possimus.</p>
        <ul>
            <div class="one">
                <li>fever</li>
                <li>Tiredness</li>
                <li>Dry Cough</li>
            </div>
            <div class="two">
                <li>Sore Throat</li>
                <li>Aches and Pains</li>
                <li>Shortness of Breath</li>
            </div>
        </ul>
        <a href="https://www.cdc.gov/coronavirus/2019-ncov/symptoms-testing/symptoms.html" class="btn">know more</a>
    </div>

    <div class="image">
        <img src="img/symptoms-img.png" alt="">
    </div>

</section>

<!-- symtoms section ends -->

<!-- prevent section starts  -->

<section class="chart" id="chart" style="background-color: white">
    <h1 class="heading" style="text-align: center">Covid- <span>19</span> statistics</h1>
    <?php



    $dbhost = 'localhost';
    $dbname = 'news1';
    $dbuser = 'root';
    $dbpass ='';



    try{
        $dbcon = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
        $dbcon->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $ex) {
        die($ex->getMessage());
    }
    if(isset($_GET['submit'])){
        $y=$_GET['year'];

        ?>

        <?php
    }

    $stmt=$dbcon->prepare("SELECT * FROM `chart` where id=1");
    $stmt->execute();
    $json=[];
    $json2=[];
    $json3=[];

    while($row=$stmt->fetch(pdo::FETCH_ASSOC)) {
        extract($row);
        echo " ";
        $json[]= $deaths;
        $json2[]= $Recovered;
        $json3[]= $infecteds;

    }


    ?>


    <div style="height: 600px; width: 600px;position: absolute" >
        <canvas id="myChart" width="200" height="200"  style="display: block" ></canvas>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script type="text/javascript">

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels:  ['deaths','Recovered','infecteds'],
                datasets: [{
                    label: '# of Votes',
                    data: [<?php echo json_encode($json);?>,<?php echo json_encode($json2);?>,<?php echo json_encode($json3);?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1,
                    hoverBorderWidth:4
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: false,
                        text: 'COVID-19-NUMBERS',
                        padding: {
                            top: 10,
                            bottom: 30
                        }
                    }
                }


            }
        });
    </script>

























</section>

<!-- prevent section ends -->

<!-- handwash section starts  -->

<section class="handwash" id="handwash">

    <h1 class="heading">how to <span>wash you hand</span> properly</h1>

    <div class="box-container">

        <div class="box">
            <span>1</span>
            <img src="img/hadnwash-1.png" alt="">
            <h3>Apply Soap on Hand</h3>
        </div>

        <div class="box">
            <span>2</span>
            <img src="img/hadnwash-2.png" alt="">
            <h3>Palm to Palm</h3>
        </div>

        <div class="box">
            <span>3</span>
            <img  src="img/hadnwash-3.png" alt="">
            <h3>Between Fingers</h3>
        </div>

        <div class="box">
            <span>4</span>
            <img src="img/hadnwash-4.png" alt="">
            <h3>Back of The Hands</h3>
        </div>

        <div class="box">
            <span>5</span>
            <img src="img/hadnwash-5.png" alt="">
            <h3>clean with water</h3>
        </div>

        <div class="box">
            <span>6</span>
            <img src="img/hadnwash-6.png" alt="">
            <h3>Use Towel to Dry</h3>
        </div>

    </div>

</section>

<!-- handwash section ends -->

<!-- Vaccines  section starts  -->

<section class="Vaccines " id="Vaccines ">
    <h1 class="heading" style="text-align: center">Vaccines <span>Types</span> </h1>
    <div class="container" style="background-color: #666" id="Vaccines">
        <!--image row start-->
        <div class="row" >
            <!--image card start-->
            <div class="image">
                <img src="img/Moderna.jpg" alt="">
                <div class="details">
                    <h2> Moderna</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="more">
                        <a href="https://www.who.int/news-room/feature-stories/detail/the-moderna-covid-19-mrna-1273-vaccine-what-you-need-to-know?gclid=CjwKCAjwkN6EBhBNEiwADVfyazDkAiuL0Byn8e5oByi6O4hy4FcHV7jXNu3yrCgXlmVPS26-_eA_IhoCKvwQAvD_BwE" class="read-more">Read <span>More</span></a>
                        <div class="icon-links">
                            <a href="#"><i class="fas fa-heart"></i></a>
                            <a href="#"><i class="fas fa-eye"></i></a>
                            <a href="#"><i class="fas fa-paperclip"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--image card end-->
            <!--image card start-->
            <div class="image">
                <img src="img/Pfizer-BioNTech.jpg" alt="">
                <div class="details">
                    <h2> <span>Pfizer-BioNTech</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="more">
                        <a href="https://www.cdc.gov/coronavirus/2019-ncov/vaccines/different-vaccines/Pfizer-BioNTech.html" class="read-more">Read <span>More</span></a>
                        <div class="icon-links">
                            <a href="#"><i class="fas fa-heart"></i></a>
                            <a href="#"><i class="fas fa-eye"></i></a>
                            <a href="#"><i class="fas fa-paperclip"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--image card end-->
            <!--image card start-->
            <div class="image">
                <img src="img/Johnson%20&%20Johnson’s%20Janssen.jpg" alt="">
                <div class="details">
                    <h2>Johnson & Johnson’s Janssen</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="more">
                        <a href="https://www.gavi.org/vaccineswork/everything-we-know-about-johnson-johnsons-single-dose-covid-19-vaccine?gclid=CjwKCAjwkN6EBhBNEiwADVfya9rGAhog3HUWGTGSy4409PjFAX52F0FJEXtnj5Nx_PfvHBg6CbcvjBoCGnIQAvD_BwE" class="read-more">Read <span>More</span></a>
                        <div class="icon-links">
                            <a href="#"><i class="fas fa-heart"></i></a>
                            <a href="#"><i class="fas fa-eye"></i></a>
                            <a href="#"><i class="fas fa-paperclip"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--image card end-->
        </div>
        <!--image row end-->
        <!--image row start-->

        <!--image card end-->

        <!--image card end-->
        <!--image card start-->

    </div>
    </div>
    </div>

    </div>

    </div>

</section>

<!-- spread section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>This project was designed by : Ameer Yahia Yaish & Abed Kareem Salah , Faculty of Engineering and Technology in Najah National University</br>Instructor name : Sufian Samara</br> for more <a href="">Visit us on our acconts</a></p>
        </div>

        <div class="box">
            <h3>locations</h3>
            <a href="https://corona.ps/">Palestine</a>
            <a href="https://www.bbc.com/arabic/world-56162061">USA</a>
            <a href="https://elaph.com/coronavirus-statistics-in-china.html">China</a>
            <a href="https://sehhty.com/tr-covid/">Turkey</a>
            <a href="https://elaph.com/coronavirus-statistics-in-france.html">france</a>
            <a href="https://www.worldometers.info/coronavirus/country/spain/">spain</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">protect</a>
            <a href="#">symtoms</a>
            <a href="#">prevent</a>
            <a href="#">handwash</a>
            <a href="#">spread</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a  href="contact.php" class="fas fa-phone" >  contact us </a>

            <div class="share">
                <a href="https://www.facebook.com/ameer.yaesh" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com/AmeerYaish?s=09&fbclid=IwAR2gEDlwRmIb_Wq2hGoqCyaNBmOCwgCiPnwWnkHEvHmunGOnNH8jnNZshF8" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/abood._.salah/" class="fab fa-instagram"></a>
            </div>
        </div>

    </div>

    <h1 class="credit"> created by <a href="#"> Ameer & Abood</a> Thank you for visiting
    </h1>

</section>

<!-- footer section ends -->

<!-- scroll top  -->

<a href="#home" class="scroll-top">
    <img src="img/scroll-img.png" alt="">
</a>















<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="page.js"></script>


</body>
</html>