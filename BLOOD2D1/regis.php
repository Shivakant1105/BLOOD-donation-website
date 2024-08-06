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
        
            
                <section>
                    <div class="container">
                        <div class="col-md-12">
                            <div class="row w3-border-bottom">
                                <div class="col-md-3"></div>
                                <div class="col-md-5 center">
                                    <h1>Donor Registration</h1>
                                </div>
                                <div class="col-md-5">
                                                        </div>
                               
                            </div>
                            <form action="userinfo.php" method="post">
                                <div class ="row">
                                    <div class="col-md-6">
                                        <div class="col-md-10" style="margin-left: auto;margin-right: auto;background-color: #fff6f6;padding: 20px;border-radius: 5px;border:5px;">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" id="name" name="name" style="margin-left: 2px;" placeholder="Enter Name" required>
                                            </div>
                                            <div class="form-group">
                                            <label>Gender</label>
                                            <select name="gender" class="form-control" id="gender" >
                                                                      <option value="MALE">MALE</option>
                                                                      <option value="FEMALE">FEMALE</option>
                                                                      <option value="Transgender">TRANSGENDER</option>
                                            </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input type="date" class="form-control" placeholder="DD-MM-YYYY" style="margin-left: 2px;" id="datepicker1" name="datepicker1" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Blood Group</label>
                                                <select name="bloodgroup" id="bloodgroup" style="margin-left: 15px; font-size: 1.2em;">
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
                                            </div>
                                            <div class="form-group">
                                                <label>Weight</label>
                                                <input type="text" class="form-control" style="margin-left: 2px;"  id="weight" name="weight" placeholder="Enter weight" required>
                                            </div>
                                            <div class="form-group">
                                            <label>Covid-19 recovered warrior (Willing to donate Plasma)</label>
                                            <select name="available" class="form-control" id="available" >
                                                                      <option value="YES">YES</option>
                                                                      <option value="NO">NO</option>
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-10" style="margin-left: auto;margin-right: auto;background-color: #fff6f6;padding: 10px;border-radius: 5px;border:5px;">
                                            <div class="form-group">
                                                <label>Street</label>
                                                <input type="text" class="form-control" style="margin-left: 2px;" id="street" name="street" placeholder="Enter street" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Area</label>
                                                <input type="text" class="form-control" style="margin-left: 2px;" id="area" name="area" placeholder="Enter area name" required>
                                            </div>
                                            <div class="form-group">
                                                <label>City</label>
                                                <select name="city" class="form-control" style="margin-left: 2px;">
                                                                                                <option value="Mumbai">Mumbai</option>
                                                                                                <option value="Agra">Agra</option>
                                                                                                <option value="Ahmedabad">Ahmedabad</option>
                                                                                                <option value="290">Ahmednagar</option>
                                                                                                <option value="326">Aizawal</option>
                                                                                                <option value="407">Ajmer</option>
                                                                                                <option value="274">Akola</option>
                                                                                                <option value="219">Alapuzzha</option>
                                                                                                <option value="465">Aligarh</option>
                                                                                                <option value="464">Allahabad</option>
                                                                                                <option value="584">Almora</option>
                                                                                                <option value="64">Alog</option>
                                                                                                <option value="408">Alwar</option>
                                                                                              
                                                                                        </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Pincode</label>
                                                <input type="number" class="form-control" style="margin-left: 2px;" maxlength="6" id="pincode" name="pincode" placeholder="Enter pincode" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Mobile</label>
                                                <input type="number" class="form-control" style="margin-left: 2px;" maxlength="12" id="mobile" name="mobile" placeholder="Enter mobile" required>
                                            </div>
                                            <div class="form-group">
                                                <label>E-mail</label>
                                                <input type="text" class="form-control" style="margin-left: 2px;" id="email" name="email" placeholder="Enter email" required>
                                            </div>
                 
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" style="margin-left: 2px;" id="username" name="username" placeholder="Enter username" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="text" class="form-control" style="margin-left: 2px;" id="password" name="password" placeholder="Enter Password" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="box-footer text-center">
                                    <button type="submit" class="btn btn-success" ><span class="spinner-border spinner-border-sm"></span>Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                
                </body>
</html>