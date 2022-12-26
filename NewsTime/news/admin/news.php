<?php
include("auth.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>


<meta http-equiv="Content-Type" content="text/html; charset=windows-1256" />
<title>لوحة التحكم</title>
</head>

<body >

<form method="post" action="savenews.php"enctype="multipart/form-data">
<table border="0" align="center" width="100">
<tr>
<td>
عنوان الخبر
</td>
<td>
<input type="text" name="title" >
</td>
</tr>

<tr>
<td>الخبر</td>
<td>
<textarea name="content" cols="90"></textarea>
</td>

<tr>
<td>
صورة الخبر
</td>
<td>
<input type="file" name="photo" >
</td>
</tr>

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
<td>
  القسم
</td>
<td>
<select name="catid">
<?php
$xx=mysqli_query($con,"select * from caty");
while($x=mysqli_fetch_array($xx))
{
echo "<option value='$x[0]'>";
echo $x[1];
echo "</option>";
}

?>
</select>
</td>
</tr>

<tr>
<td colspan="2" align="center"   >
<input type="submit" value="save">
</td>
</tr>
</table>

</form>

<table>


<form method="post" action="deletenews.php">
<table border="1" align="center" width="30%">
<tr bgcolor="999999">
<td><input type="submit" value="حذف"</td>
 <td>تعديل</td>
  <td>#</td>
  <td>عنوان الخبر</td>
    <td>صورة</td>
     <td>الوقت</td>
      <td> المشاهدات</td>
       <td>القسم</td>
	          <td></td>

 </tr>


<?php
 $count=1;
 $xx=mysqli_query($con,"select * from nnews");
 while($x=mysqli_fetch_array($xx))
 {
 if($count%2==0)
 echo "<tr bgcolor=dddddd>";
 else
  echo "<tr>";
  echo "<td>";
		     echo "<input type='checkbox' name='$x[0]' value='$x[0]'>";
     echo "<td>";
   echo  "<a href='panel.php?page=updatenews&id=$x[0]' >";

      echo "تحديث";
echo "<td>$count</td>";
echo "<td>";
   echo "<a href='localhost/pass/n.php?id=$x[0]'>";
 echo $x[1];
 echo "</td>";
echo "<td><img src='files/$photo$x[3]' width='60' height='60' /> </td>";
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
</table


</body>
</html>
