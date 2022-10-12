<?php

$con=mysqli_connect('localhost','root','groot','student');
$did=$_GET['id'];
$sql="DELETE FROM tabl where id='$did'";
mysqli_query($con,$sql);
echo "Data deleted successfully";
