<!DOCTYPE html>
<html>
<head>
	<title>Lets Unite </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		overflow-x:hidden;

	}
	#centered1{
		position: absolute;
		font-size: 10vw;
		top:10%;
		left:15%;
		transform: translate(-50%,-50%);
	}
	#centered2{
		position: absolute;
		font-size: 10vw;
		top:40%;
		left:25%;
		transform: translate(-50%,-50%);
	}
	#centered3{
		position: absolute;
		font-size: 10vw;
		top:60%;
		left:24%;
		transform: translate(-50%,-50%);
	}
	#signup{
		width: 60%;
		border-radius: 30px;

	}
	#login{
		width: 60%;
		background-color:#fff;
		border: 1px solid #1da1f2;
		color:  #1da1f2;
		border-radius: 30px;
	}
	#login:hover{
		width: 60%;
		background-color:#fff;
		border: 1px solid #1da1f2;
		color:  #1da1f2;
		border-radius: 30px;
	}
	.well{
		background: #187FAB;
	}
</style>
<body>
	<div class="row"></div>
	<div class="col-sm-12" >
		<div class="well">
		<center><h1 style="color: white;">Let's Unite</h1></center></div>
	</div>
	<div class="row">
		<div class="col-sm-6" style="left:0.5%;">
			<img src="images/unite2.jpg" class="img-rounded" title="Lets Unite" width="650px" height="565px">
			<div id="centered1" class="centered"><h3 style="color: white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Lets Vote</strong></h3></div>
			<div id="centered2" class="centered"><h3 style="color: white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Raise Voice together</strong></h3></div>
			<div id="centered3" class="centered"><h3 style="color: white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Put Your issue here</strong></h3>
			</div>

		</div>
		<div class="col-sm-6" style="left: 1%;">
			<img src="images/logo.jpg" class="img-rounded" title="logo" width="80px" height="80px">
			<h2> <strong>See what's happeing in <br>  the world right now</strong></h2><br><br>
			<h4><strong>Join Us</strong></h4>

			<form method="post" action="">
				<button id="signup" class="btn btn-info btn-lg" name="signup">Sign Up</button><br><br>
				<?php
				if(isset($_POST['signup'])){
					echo "<script>window.open('signup.php','_self')</script>";
				}
				?>
				<button id="login" class="btn btn-info btn-lg" name="login">Login</button><br><br>
				<?php
				if(isset($_POST['login'])){
					echo "<script>window.open('signin.php','_self')</script>";
				}
				?>
			</form>	
						
		</div>
	</div>

</body>
</html>