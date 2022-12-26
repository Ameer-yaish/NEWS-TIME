
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256" />
<title>لوحة التحكم</title>
<link rel="stylesheet" type="text/css" href="css/theme.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script>
   var StyleFile = "theme" + document.cookie.charAt(6) + ".css";
   document.writeln('<link rel="stylesheet" type="text/css" href="css/' + StyleFile + '">');
</script>
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="css/ie-sucks.css" />
<![endif]-->
</head>
<?php
$account=$_SESSION['account'];
include("db.php");
$account_typex=mysqli_query($con,"select type from users where user='$account'");
$account_type=mysqli_fetch_array($account_typex);
 if($account_type[0]=="admin")
 {
?>
<body dir="rtl">

<table border="0" align="center" width="80%">
<tr bgcolor="gray">
<th>#</th>
<th>الاسم</th><th>العنوان</th>
<th>البريد </th><th>الرسالة</th>
</tr>
<?php
 include("db.php");
 $xx=mysqli_Query($con,"select * from contact order by id desc");
 $count=1;
 while($x=mysqli_fetch_array($xx))
 {
 if($count%2==0)
 echo "<tr>";
 else
 echo "<tr bgcolor=bbbbbb>";
 echo "<td> $count</td>";
 echo "<td> $x[1]</td>";  echo "<td> $x[2]</td>"; echo "<td> $x[3]</td>"; echo "<td> $x[4]</td>";

   echo "</td>";
   echo "</tr>";
   $count++;
 }
?>
<?php
 }
 else
 echo "نأسف انت لا تملك الصلاحيات الكافية لدخولك المنطقة يمكنك مراجعة مدير الموقع";
 ?>

</table></body>
</html>
