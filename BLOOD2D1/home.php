<?php 
session_start();
include('databaseconnection.php');




if(empty($_SESSION['id'])):
    header('Location:login1.php');
endif;
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<style>
			html,body{

				 
                   overflow-x: hidden;
		           overflow-x: hidden;
			}
		  body {
			  background: url('icon15.jpg');
		  }
				
			</style>
	
		
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta charset="UTF-8">
		<title>Blood Donation Management</title>
		<link rel="stylesheet" type="text/css" href="style1.css">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>
	<body>

		
			<nav class="navbar navbar-expand-sm bg-none navbar-dark " style="margin-top: 50px;">
			<a href="index.php" class="navbar-brand"><img  src="logo.jpg"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"  style="color: #111;">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
			
			<ul class="navbar-nav nav-pills ml-auto">
				<li class="nav-item" ><a class="nav-link active" href="index.php"><h3 style="color: #800000;">HOME</h3></a></li>
				
				<li class="nav-item"><a class="nav-link" href="login.php"><h3 style="color: #111;">SEARCH DONOR</h3></a></li>
				<li class="nav-item"><a class="nav-link" href="regis.php"><h3 style="color: #111;">BECOME DONOR</h3></a></li>
				<li class="nav-item"><a class="nav-link" href="#"><h3 style="color: #111;">BLOOD BANK</h3></a></li>
                <li class="nav-item"><a class="btn btn-primary"  href="logout process.php">Logout</a></li>
			</ul>
		</div>
		</nav>
		<div class="container">
  <h2>User Detail</h2>
  
  <?php
   $user=$_SESSION['username'];
    
   $query=mysqli_query($con,"SELECT * FROM mytable WHERE username='$user'");
   $row = mysqli_fetch_array($query);
   //$id=$row['id'];
   
  $query=mysqli_query($con,"SELECT * FROM mytable WHERE username='$user'");
   $counter=mysqli_num_rows($query);
?>
                                                                                  

   <div class="table-responsive">
    <table class="table table-bordered table-danger">
      <thead>
        <tr>
          <th>ID</th>    
          <th>Name</th>
          
          <th>Gender</th>
          <th>DOB</th>
          <th>BloodGroup</th>
          <th>Weight</th>
          <th>Willing to donate Plasma</th>
          <th>Street</th>
          <th>Area</th>
          <th>City</th>
          <th>Pincode</th>
          <th>Mobile</th>
          <th>Email</th>
          
          <th>Username</th>
          
        </tr>
      </thead>
    
   <?php
     for($i=1;$i<=$counter;$i++)
     {
        $row=mysqli_fetch_array($query);
     }
  ?>
      <tbody>
        <tr>
          <td><?php echo $row["id"]  ?></td>
          <td><?php echo $row["name"] ?></td>
          <td><?php echo $row["gender"] ?></td>
          <td><?php echo $row["datepicker1"] ?></td>
          <td><?php echo $row["bloodgroup"] ?></td>
          <td><?php echo $row["weight"] ?></td>
          <td><?php echo $row["available"] ?></td>
          <td><?php echo $row["street"] ?></td>
          <td><?php echo $row["area"] ?></td>
          <td><?php echo $row["city"] ?></td>
          <td><?php echo $row["pincode"] ?></td>
          <td><?php echo $row["mobile"] ?></td>
          <td><?php echo $row["email"] ?></td>
          <td><?php echo $row["username"] ?></td>
          
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div class="box-footer text-center">
                                    <a type="edit" class="btn btn-success" href="updateprofile.php?id=<?php echo $row["id"]  ?>"  ><span class="spinner-border spinner-border-sm"></span>Edit Profile</a>
                                    <a type="edit" class="btn btn-success" href="deleteprofile.php?id=<?php echo $row["id"]  ?>"  ><span class="spinner-border spinner-border-sm"></span>Delete Profile</a>
                                </div>
</body>
</html>

