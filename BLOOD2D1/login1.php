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


    <nav class="navbar navbar-expand-sm bg-none navbar-dark sticky-top" style="margin-top: 50px;">
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








 <form action="login process.php" method="POST" class="was-validated" style="margin-left: 700px;">
 <div class ="row">
                                    <div class="col-md-6">
                                        <div class="col-md-10" style="margin-left: auto;margin-right: auto;background-color: #fff6f6;padding: 20px;border-radius: 5px;border:5px;">
  <div class="form-group">
    <label for="uname">Username:</label>
    <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember" required> I agree on term condition
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </label>
  </div>
  <button type="submit" class="btn btn-primary" name="login" default>Submit</button>
        </div>
        </div>
</form>

</body>
</html>