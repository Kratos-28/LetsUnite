<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="">
	body{
		overflow-x: hidden;

	}
	.main_content{
		width: 50%;
		height: 40%
		margin:10px auto;
		background-color: 2px solid #e6e6e6;
		padding: 40px 50px;
	}
	.header{
		border: 0px solid #000;
		margin-bottom: 5px;

	}
	.well{
		background-color: #187FAB;

	}
	#signup{
		width: 60%;
		border-radius: 30px;
	}
</style>
<body>
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<center><h1 style="color: white;">Let's Unite</h1></center></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="main-content">
				<div class="header">
					<h3 style="text-align: center;"><strong>Join Us</strong></h3>
				</div>
				<div class="1-part">
					<form action="" method="post">
						<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<input type="text" class=" form-control" placeholder="First Name"name="first_name" required="required">
						</div><br>
						<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<input type="text" class=" form-control" placeholder="Last Name"name="last_name" required="required">
						</div><br>
						<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" class=" form-control" placeholder="Password"name="u_pass" required="required">
						</div><br> 
						<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="email" class=" form-control" placeholder="Email Id"name="email" required="required">
						</div><br>
						<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
						<select class="form-control" placeholder="Select your city" name="u_city" required="required">
							<option > Select your City</option>
							<option > Bangalore</option>
							<option > Chandigarh</option>
							<option >Delhi </option>
							<option > Hyderabad</option>
							<option > Punjab</option>
							<option > Kerela</option>
						</select>
						</div><br>

						<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
						<select class="form-control input-md" placeholder="Select your Gender" name="u_gender"  required="required">
							<option > Gender</option>
							<option > Male</option>
							<option > Female</option>
							<option >Others</option>
						</div><br><br>

						<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
						<input type="date" class=" form-control" placeholder="Date"name="u_birth" required="required">
						</div><br>
						<a style="text-decoration: none; float: right;color: #187FAB;" data-toggle="tooltip" title="signin" href="signup.php">Already have an account?</a><br><br>
						<center><button id="signup" class="btn btn-info btn-lg" name="signup">SignUp</button></center>
						<!--<?php
							//include(insert_user.php);
						?>*/-->
					</form>
					
				</div>
			</div>
		</div>
	</div>	
</body>
</html>>