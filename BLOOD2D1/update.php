<?php
session_start();
if(empty($_SESSION['id'])):
    header('Location:login1.php');
endif;
?>
<?
$con = mysqli_connect('localhost','root');

if($con){
    echo "Registration successful";
}else{
    echo "Error";
}
mysqli_select_db($con, 'blood');


$name = $_SESSION['name'];
$id=$_SESSION['id'];
$gender = $_POST['gender'];
$datepicker1 = $_POST['datepicker1'];
$bloodgroup = $_POST['bloodgroup'];
$weight = $_POST['weight'];
$available= $_POST['available'];
$street = $_POST['street'];
$area = $_POST['area'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "UPDATE mytable SET name='$name' WHERE id='$id' ";

echo "$query";
mysqli_query($con,$query);


?>