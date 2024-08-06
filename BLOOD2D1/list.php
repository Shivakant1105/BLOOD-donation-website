
<!DOCTYPE html>
<html lang="en">
	<head>
		<style>
			html,body{

				 
                   overflow-x: hidden;
		           overflow-x: hidden;
			}

			</style>
	
		
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta charset="UTF-8">
		<title>Blood Donation Management</title>
		<link rel="stylesheet" type="text/css" href="style3.css">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		

	</head>
	<body>
		<header>
			<a href="index.php" class="logo"><img  src="logo.jpg"></a>
			<div class="toggle"></div>
			<ul>
				<li><a class="active" href="index.html">HOME</a></li>
				
				<li><a href="login.php">SEARCH DONOR</a></li>
				<li><a href="regis.php">BECOME DONOR</a></li>
				<li><a href="list.php">BLOOD BANK</a></li>
			</ul>

		</header>
		<section class="banner">
			<div class="textBx">
				
				

			</div>
        </section>
		<section class="search">
			<form action="list.php" class="search1" method="post">
				<div class="col-md-2">Select City</div>
				<div class="col-md-4">
					<select name="city" class="form-control">
                        <option value="DELHI">DELHI</option>
                        <option value="477">Agra</option>
                        <option value="70">Ahmedabad</option>
                        <option value="290">Ahmednagar</option>
			</select>
			<div class="box-footer text-center">
                <button type="submit" class="btn">Search</button>
            </div>
			</form>
		</section>
		<section>
			<div class="container" style="padding: 60px 0 60px 0;">
			<div class="row" id="data">
				<?php
				if(isset($_GET['city'] $$ !empty($_GET['city']) ) )
					
					 $city = $_GET['city'];
					 
					 $sql = "SELECT" FROM 
		
		
