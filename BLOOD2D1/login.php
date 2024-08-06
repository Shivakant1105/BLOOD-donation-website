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
				<li class="nav-item"><button class="btn btn-primary" onclick="window.location.href='regis.php';" style="margin-top: 10px;">BECOME DONOR</button></li>
				<li class="nav-item"><a class="nav-link" href="#"><h3 style="color: #111;">BLOOD BANK</h3></a></li>
				<li class="nav-item"><button class="btn btn-primary" onclick="window.location.href='login1.php';" style="margin-top: 10px;">LOGIN</button></li>
			</ul>
		</div>
		</nav>
		
		
		
		
	
		
		

		
		
		<div class="container mt-5">
		<form method="post" action="">
		<div class="form-group">
		<label>Bloodgroup</label>
		<input type="text" name="search" value="" class="form-control">
		</div>
		<!--<section class="search">
			<form class="search1" method="POST" action="">
				<div class="col-md-2">Select City</div>
				<div class="col-md-4">
					<select name="city" class="form-control">
						                                <option value="11">Select city</option>
														<option value="DELHI">DELHI</option>
														<option value="GHAZIABAD">Ghaziabad</option>
														<option value="70">Ahmedabad</option>
														<option value="MUMBAI">Mumbai</option>
														<option value="326">Aizawal</option>
														<option value="407">Ajmer</option>
														<option value="274">Akola</option>
														<option value="219">Alapuzzha</option>
														
												</select>
				</div>
				
												<div class="col-md-2">Select Blood Group</div>
												<div class="col-md-4">
													<select name="bloodgroup" class="form-control">
														<option>Select Blood Group</option>
														<option value="A1+">A1+</option>
														<option value="A1-">A1-</option>
														<option value="A2+">A2+</option>
														<option value="A2-">A2-</option>
														<option value="B+">B+</option>
														<option value="B-">B-</option>
														<option value="A1B+">A1B+</option>
														<option value="A1B-">A1B-</option>
														<option value="A2B+">A2B+</option>
														<option value="A2B-">A2B-</option>
														<option value="AB+">AB+</option>
														<option value="AB-">AB-</option>
														<option value="O+">O+</option>
														<option value="O-">O-</option>
														<option value="A+">A+</option>
														<option value="A-">A-</option>
													</select>
												</div> -->
												<div class="col-md-2">
													<input type="submit" value="search" class="btn btn-warning">
												</div>
											</form>
		</div>
											
		
		
		</section>
		
	</body>	 
</html>
<?php
	  error_reporting(0);
	  $conn = mysqli_connect('localhost','root','');
	  $db = mysqli_select_db($conn,'blood');
	   
	  if(isset($_POST['search'])){
		  $search = $_POST['search'];

		  $a = preg_replace("#[^0-9a-z]#","",$search);

		  $q = "select * from mytable where bloodgroup LIKE '%$search%'";
		  $result = mysqli_query($conn,$q);
		  $count = mysqli_num_rows($result);
		  if ($count != 0){
			  ?>
		<div class="container">
		<table class="table table-striped table-hover" >
		<thead class="rounded thead-primary" >
		<tr>
		    <th class="text-centre" style="color: #111; font-size: 1.5em;">Name</th>
			<th class="text-centre" style="color: #111; font-size: 1.5em;" >Address</th>
			<th class="text-centre" style="color: #111; font-size: 1.5em;">Mobile</th>
		</tr>
		</thead>
		 <?php
		  while($data = mysqli_fetch_array($result)) {
			  echo "<tr>
			  <td class='lead'>".$data[name]."</td>
			  <td class='lead'>".$data[street]."</td>
			  <td class='lead'>".$data[mobile]."</td>
			</tr>";
		  }
		  }
		  else{
			  echo "<h1 class='text-danger ml-5'>not found !!!</h1>";
		  }
	  }
	     ?>
		 </table>
		 </div>