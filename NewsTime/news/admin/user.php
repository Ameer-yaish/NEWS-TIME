<?php
include("auth.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>لوحة التحكم</title>

</head>

<body dir="rtl">
<!-- Save for Web Slices (lib) -->
<?php
$account=$_SESSION['account'];
include("db.php");
$account_typex=mysqli_query($con,"select type from users where user='$account'");
$account_type=mysqli_fetch_array($account_typex);
 if($account_type[0]=="admin")
 {
?>
<font color=326698 face=tahoma>
</font>
<form method="post" action="saveuser.php">
<table width="50%" align="center">
<tr>
<td>اسم المستخدم</td>
<td><input type="text" name="user"></td>
</tr>


<tr>
<td>  كلمة المرور</td>
<td><input type="text" name="pass"></td>
</tr>

<tr>
<td> نوع المستخدم  </td>
<td><select name="type">
<option>admin</option>
<option>noadmin</option>
</select></td>
</tr>
<tr>
 
<td colspan="2" align="center"><input type="submit" value="حفظ"></td>
</tr>

<table border="1" align="center" width="30%">
<tr bgcolor="999999">
 <td>*</td>
  <td>اسم المستخدم</td>
          <td>تحديث</td>

    <td>كلمة السر</td>
        <td>نوع المستخدم</td>


 </tr>


<?php
 include("db.php");
 $xx=mysqli_Query($con,"select * from users");
 $count=1;
 while($x=mysqli_fetch_array($xx))
 {
 if($count%2==0)
 echo "<tr>";
 else
 echo "<tr bgcolor=bbbbbb>";
 
 echo "<td> $count</td>";
 echo "<td> $x[1]</td>";
   echo "<td>";
   
   echo "</a>";
  
   echo " | ";
   echo  "<a href='panel.php?page=updateuser&id=$x[0]' >";
      echo "تحديث";
   echo "</a>";
   echo "<td>";

//كلمة السر
echo "<td> $x[3]</td>";

   echo "</td>";
   echo "</tr>";

   $count++;
 }
?>


</table>
<?php
 }
 else
 echo "Sorry, you do not have sufficient permissions to enter the area, you can consult the site administrator";
 ?>

</form>
 
<!-- End Save for Web Slices :) --></body>
</html>
