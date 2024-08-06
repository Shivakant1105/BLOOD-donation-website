<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Registration successful";
}else{
    echo "Error";
}
mysqli_select_db($con, 'blood');


$name = $_POST['name'];
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

$query = " insert into mytable (name, gender, datepicker1, bloodgroup, weight,available, street, area, city, pincode, mobile, email,username,password)
values ('$name','$gender','$datepicker1','$bloodgroup','$weight','$available','$street','$area','$city','$pincode','$mobile','$email','$username','$password')";

echo "$query";
mysqli_query($con,$query);


?>