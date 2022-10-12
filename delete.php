<?php
//
//$con=mysqli_connect('localhost','root','groot','student');
//$sql="SELECT * FROM tabl";
//$res=mysqli_query($con,$sql);
//?>

<?php
$servername = "localhost";
$username = "root";
$password = "groot";
$database="student";
$con = new mysqli($servername, $username, $password,$database);
$sql="SELECT * FROM tabl";
$res=mysqli_query($con,$sql);
?>
<html>
<body>
<table border="1" width="900" height="120">
    <tr>
        <td style="text-align: center">Id</td>
        <td style="text-align: center">Name</td>
        <td style="text-align: center">Age</td>
        <td style="text-align: center">Image</td>
        <td style="text-align: center">Action</td>

    </tr>

    <?php while ($row=mysqli_fetch_assoc($res)){ ?>
    <tr>
        <td style="text-align: center"> <?php echo $row["id"] ?></td>
        <td style="text-align: center"> <?php echo $row["name"] ?></td>
        <td style="text-align: center"> <?php echo $row["age"] ?></td>
        <td style="text-align: center"> <?php echo $row["image"] ?></td>
        <td style="text-align: center"><a href="deletesave.php?id=<?php echo $row["id"]?> ">Delete</a> </td>


    </tr>
        <?php }?>

</table>

</body>
</html>
