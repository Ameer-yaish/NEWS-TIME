<?php
include("auth.php");
include("db.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Control panel</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/theme.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script>
        var StyleFile = "theme" + document.cookie.charAt(6) + ".css";
        document.writeln('<link rel="stylesheet" type="text/css" href="css/' + StyleFile + '">');
    </script><script src="jquery.js"></script><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script><script>$(document).ready(function() {$("#massage_button").click(function() {$("#massage_area").fadeIn("slow");$(body).css('overflow:none;');});$(".escape").click(function() {$("#massage_area").fadeOut("slow");});});</script><style type="text/css">body{margin:0px;}.massage_background{margin:0px auto;background-color: rgba(193, 193, 193, 0.5);width:100%;height:100%;position:fixed;top:0px;left:0px;display:none;}  .the_massage{margin:50px auto;background-color: rgb(٢٤٢, ٢٤٢, ٢٤٢);border:solid 3px rgba(٠, ٠, ٠, 0.3);border-radius:20px;width:200px;height:auto;}  .escape{margin:5px 10px;text-align:left;font-size:24px;}  .escape:hover{text-align:left;font-size:24px;background-color:rgba(255,0,0,0.6);border:solid 1px #FFFFFF;width:auto;height:auto;}  .text{text-align:center;}  #massage_button{background-color:rgba(255,0,0,1) ;}
        .style1 {
            background-color: #B8B8AA;
        }
    </style>
    <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="css/ie-sucks.css" />
    <![endif]-->
</head>
<style>
    body{
       background-color: ;

    }
</style>
<body dir="rtl">
<div id="container">
    <div id="header">
        <h2 style="visibility: hidden;text-align: center ; font-size: 60px;color: #1d2124 " >Control panel</h2>

    </div>

    <div id="wrapper" >
        <div id="content">
            <div id="infowrap" >
                <?php
                $page=$_GET["page"];
                $page1=$page.".php";
                if(is_file($page1))
                    include($page1);
                else
                    include("welc.php");
                ?>

            </div>
        </div>
        <div id="sidebar"  STYLE="background-color: #B8B8AA">
            <ul >
                <li  style="background-color: #efefe3"> <h3><a href="panel.php" class="house">Control panel</a></h3>


                    <div id="topmenu" dir="rtl" style="text-align: left">
                        <ul  >

                            <li><a style="background-color: blanchedalmond ;color: #0b2e13" href="panel.php?page=user">Member management</a></li>
                            <li><a style="background-color: blanchedalmond ;color: #0b2e13" href="panel.php?page=news">News Administration</a></li>
                            <li><a style="background-color: blanchedalmond ;color: #0b2e13" href="panel.php?page=chartcontrol">chart control</a></li>
                            <li><a style="background-color: blanchedalmond ;color: #0b2e13" href="panel.php?page=contact">E-mails</a></li>
                            <li><a style="background-color: blanchedalmond ;color: #0b2e13" href="../index.php">Return to home page</a></li>
                            <li><a style="background-color: blanchedalmond ;color: #0b2e13" href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </li>


                </li>

                </li>
            </ul>
        </div>
    </div>


</div>
</div>
</body>
</html>