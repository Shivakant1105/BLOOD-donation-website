<?php session_start();

include('databaseconnection.php');

if(isset($_POST['login']));
{
    $user_unsafe=$_POST['username'];
    $pass_unsafe=$_POST['password'];

    $user = mysqli_real_escape_string($con,$user_unsafe);
    $pass = mysqli_real_escape_string($con,$pass_unsafe);

    $query=mysqli_query($con,"SELECT * from mytable where username='$user' and password='$pass'")
    or die(mysqli_error($con));

    $row=mysqli_fetch_array($query);

    $user=$row['username'];
    $pass=$row['password'];
    $name = $row['name'];
    $gender = $row['gender'];
    $datepicker1 = $row['datepicker1'];
    $bloodgroup = $row['bloodgroup'];
    $weight = $row['weight'];
    $available= $row['available'];
$street = $row['street'];
$area = $row['area'];
$city = $row['city'];
$pincode = $row['pincode'];
$mobile = $row['mobile'];
$email = $row['email'];
$role= $row['role'];


    $counter=mysqli_num_rows($query);
    $id=$row['id'];

    if ($counter == 0)
    {
       echo "<script type='text/javascript'>alert('Invalid Usrename or Password!');
       document.location='login1.php'</script>";
    }
    else
    {   if($row["role"]=="admin")
        {
           $_SESSION['id']=$id;
           header('Location: admin.php');
        }
       else{

       

       $_SESSION['id']=$id;
       $_SESSION['username']=$user;
       $_SESSION['password']=$pass;
       
    
    $_SESSION['name']=$name;
    $_SESSION['gender']=$gender;
    $_SESSION['datepicker1']=$datepicker1;
    $_SESSION['bloodgroup']=$bloodgroup;
    $_SESSION['weight']=$weight;
    $_SESSION['available']=$available;
   $_SESSION['street']=$street;
   $_SESSION['area']=$area;
   $_SESSION['city']=$city;
   $_SESSION['pincode']=$pincode;
   $_SESSION['mobile']=$mobile;
   $_SESSION['email']=$email;


       echo "<script type='text/javascript'>document.location='home.php'</script>";
    }

}}

?>
          
