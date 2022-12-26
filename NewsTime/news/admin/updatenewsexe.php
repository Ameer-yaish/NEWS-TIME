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

 
<<?php
$title1=$_POST["title"];
$content1=$_POST["content"];
$time1=$_POST["time"];
$view1=$_POST["view"];
$catid1=$_POST["catid"];
$id1=$_POST["id"];
$name=$_FILES['name']['photo'];

 include("db.php");
 if(empty($name))//
mysqli_query($con,"update nnews set title='$title1',content='$content1',time='$time1',view='$view1',catid='$catid1' where id='$id1'");
else
{
////////////////////
$from= $_FILES['photo']['tmp_name'];
  
 $check=explode(".",$title);
 if(end($check)=="jpg"  ) //check type
 {
 $rname=rand(1000000,10000000).".".end($check);
 $to="files/".$rname;
 
 if(!is_file($to))//repeated
 {
if(move_uploaded_file($from,$to)){
// delete old file 
$oldfilex=mysqli_query($con,"select photo from nnews where id='$id1'");
$oldfile=mysqli_fetch_array($oldfilex);
$target="files/".$oldfile[0];
unlink($target);
//end delete old file
mysqli_query($con,"update nnews set title='$title1',content='$content1',time='$time1',view='$view1',catid='$catid1' where id='$id1'");
}
else
echo "not ok";
}//end- repeated
else
echo "the file is repeated";
}//end cjeck type
else
echo "the type of file is jpg or gif";
///////////////////
}
?>

<meta http-equiv="refresh" content="0;url=panel.php?page=news">
<!-- End Save for Web Slices -->
</body>
</html>