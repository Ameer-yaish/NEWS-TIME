<?php
include("auth.php");
?>
<html dir=rtl>
<head>
<title>Control Panel</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
</head>
<body >
<!-- Save for Web Slices  -->
<?php
$id1=$_POST["id"];
$user1=$_POST["user"];
$pass1=$_POST["pass"];
$type1=$_POST["type"];



 include("db.php");
 mysqli_query($con,"update users set user='$user1',type='$type1' ,pass=md5('$pass1') where id='$id1'");

?>
<meta http-equiv="refresh" content="0;url=panel.php?page=user">
<!-- End Save for Web Slices -->
</body>
</html>