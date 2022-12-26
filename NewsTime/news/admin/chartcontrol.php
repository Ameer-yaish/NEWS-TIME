
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Covid-chart</title>

</head>

<body dir="rtl">
<!-- Save for Web Slices (lib) -->

<font color=326698 face=tahoma>
</font>
<form method="post" action="panel.php?page=chartcontrol">
    <table width="50%" align="center">
        <tr>
            <td>المتعافون</td>
            <td><input type="text" name="rec" required></td>
        </tr>


        <tr>
            <td>  المصابون</td>
            <td><input type="text" name="infec" required></td>
        </tr>

        <tr>
            <td> الوفيات</td>
            <td><input type="text" name="death" required></td>
        </tr>

        <tr>

            <td colspan="2" align="center"><input type="submit" value="update" name="update"></td>
        </tr>




            <?php
            include("db.php");
            if(isset($_POST['update'])){
                $id=1;
                $deaths=$_POST['death'];
                $Recoverers=$_POST['rec'];
                $infecteds=$_POST['infec'];

                $query="UPDATE `chart` SET `deaths` = '$deaths', `Recovered` = '$Recoverers', `infecteds` = '$infecteds' WHERE `chart`.`id` = 1";
                $query_run=mysqli_query($con,$query);
                if($query_run){
                    echo '<script type="text/javascript"> alert("Successfully updated")</script>';
                }
                else{
                    echo '<script type="text/javascript"> alert("Data has not changed")</script>';
                }


            }




            ?>


        </table>


</form>

<!-- End Save for Web Slices :) --></body>
</html>
