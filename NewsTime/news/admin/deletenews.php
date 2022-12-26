<?php
include("auth.php");
?>
<html dir=rtl>
<head>
<title>Control Panel</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
</head>
<body >
<!-- Save for Web Slices (lib) -->

<?php
include("db.php");
$xx=mysqli_query($con,"SELECT *FROM `nnews`");
while($x=mysqli_fetch_array($xx))
{
$check=$_POST[$x[0]];
if($check)
mysqli_query($con,"delete from nnews where id='$check'");
}
?>
<meta http-equiv="refresh" content="0;url=panel.php?page=news">
<!-- End Save for Web Slices -->
</body>
</html>