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
$id1=$_GET["id"];

include("db.php");
$xx=mysqli_query($con,"select * from users where id='$id1'");
$x=mysqli_fetch_array($xx);

  ?>
 
 <form method="post" action="updateuserexe.php">
 <input type="hidden" name="id" size="50" value="<?php echo $id1;  ?>">

<table border="0" width="70%" align="center">
<tr>
<td>username</td>
<td><?php echo "<input type='text' name='user' size='50' value='$x[1]'>"; ?></td>
</tr>
<tr>
<td> type </td>
<td><?php echo "<input type='text' name='type' size='50' value='$x[3]'>"; ?></td>
</tr>

    <tr>
        <td> pass </td>
        <td><?php echo "<input type='text' name='pass' size='50' value='$x[2]'>"; ?></td>
    </tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="save">
</td>
</tr>

</table>


</form>

<!-- End Save for Web Slices -->
</body>
</html>