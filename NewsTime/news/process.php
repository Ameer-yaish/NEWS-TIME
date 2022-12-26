
<?php
include("admin/db.php");
$name1=$_POST["name"];
$subject1=$_POST["jawwal"];
$email1=$_POST["email"];
$content1=$_POST["content"];


if(!empty($name1))
{
	 mysqli_query($con," insert into contact values(0,'$name1','$subject1','$email1','$content1')  ");

}
 
else
echo "please input all fields";

?>

 <meta http-equiv="refresh" content="0;url=index.php">
<!-- End Save for Web Slices -->
</body>
</html>