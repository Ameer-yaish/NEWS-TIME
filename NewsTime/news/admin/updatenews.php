<?php
include("auth.php");
?>
<html dir=rtl>
<head>
<title>Control Panel</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<script type="text/javascript" src="../nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
</head>
<body >


 <?php
$id1=$_GET["id"];
include("db.php");
$xx=mysqli_query($con,"select * from nnews where id='$id1'");
$x=mysqli_fetch_array($xx);

?>
 <form method="post" action="updatenewsexe.php">
 <input type="hidden" name="id" size="50" value="<?php echo $id1;  ?>">
<table border="0" width="70%" align="center">
<tr>
<td>
title
</td>
<td>
<input type="text" name="title" size="50" value="<?php echo $x[1];  ?>">
</td>

</tr>

<tr>
<td>
content
</td>
<td>
<textarea name="content" cols="60" ><?php echo $x[2];?></textarea>

</td>
<tr>
<td>
  تاريخ الاضافه
</td>
<td>
<?php

$d=date("Y-m-d");
echo "<input type='text' name='time' value='$d'>";
?>

</td>
</tr>
<tr>
 <td>photo </td>
 <td><input type="file" name="photo"></td>
 </tr>
</tr>
<tr>
 <td>القسم  </td>
 <td><select name="catid">

 <?php
 $yy=mysqli_query($con,"select * from caty ");
 while($y=mysqli_fetch_array($yy))
 {
 if($x[6]==$y[0]){
 echo "<option value='$y[0]' selected>";
 echo $y[1];
 echo "</option>";
 }
 else
 {
 echo "<option value='$y[0]'  >";
 echo $y[1];
 echo "</option>";
 }
 
 }
 
 
 ?>
 </select></td>
 </tr>





<tr>
<td colspan="2" align="center">
<input type="submit" value="update">
</td>
</tr>
</table>
</form>
<!-- End Save for Web Slices -->
</body>
</html>