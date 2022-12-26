<?php
session_start();
?>

<html dir=rtl>

<head>

<title>Control Panel </title>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">

</head>

<body >

<?php

$user1=addslashes(strip_tags($_POST["user"]));

$pass1=addslashes(strip_tags($_POST["pass"]));


include("db.php");
$xx=mysqli_query($con,"select * from users where user='$user1' and pass=md5('$pass1')");
$x=mysqli_fetch_array($xx);
if(!empty($x[1]))
{
$_SESSION['account']=$x[1];
echo '<meta http-equiv="refresh" content="0;url=panel.php">';
}
else
{
echo '<meta http-equiv="refresh" content="0;url=../loginerror.html">';


}


?>


</body>

</html>