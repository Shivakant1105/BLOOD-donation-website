<?php 
session_start();
include('databaseconnection.php');




if(empty($_SESSION['id'])):
    header('Location:login1.php');
endif;
?>

<?php

include('databaseconnection.php');
$ids= $_GET['id'];

$deletequery = "DELETE FROM mytable WHERE id=$ids";

$query= mysqli_query($con,$deletequery);

header('Location:home.php');
?>