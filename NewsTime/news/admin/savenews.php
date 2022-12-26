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
$title1=$_POST["title"];
$content1=$_POST["content"];
$time1=$_POST["time"];
$catid1=$_POST["catid"];
include("db.php");
/////////////////////////////
$name=$_FILES['photo']['name'];
 $from= $_FILES['photo']['tmp_name'];
  
 $check=explode(".",$name);
 if(end($check)=="jpg") //check type
 {
 $photo=rand(1000000,10000000).".".end($check);
 $to="files/".$photo;
 
 if(!is_file($to))//repeated
 {
if( move_uploaded_file($from,$to))
	 mysqli_query($con," insert into nnews values(0,'$title1','$content1','$photo','$time1','$view1','$catid1')  ");
else
echo "not ok";
}//end- repeated
else
echo "the file is repeated";
}//end cjeck type
else
echo "the type of file is jpg or gif";

///////////////////////////


?>
 <meta http-equiv="refresh" content="0;url=panel.php?page=news">
<!-- End Save for Web Slices -->
</body>
</html>