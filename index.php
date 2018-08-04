<?php 

// session_unset();

// // destroy the session
// session_destroy(); 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Betting site</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<style type="text/css">
		body{
			background-color: orange;
		}
		.footer{
			background-color: black;
			color: white;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse  navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="btn btn-lg "><a href="#">Home</a></li>
					
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="btn btn-lg"><a href="#signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li class="btn btn-lg"><a href="#signin"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid ">
		<br>
		<div class="jumbotron">
			<h1 class="text-center"><span class="text-success">C</span>AS<span class="text-danger">INO</span></h1>
			<h3 class="text-center"><span class="text-success">WIN</span>|WIN <span class="text-danger">WIN</span> </h3>

		</div>
		<h1 class="text-danger"><?php 
			// session_start();
			// // print_r($_SESSION);
			// if (isset($_POST['signin'])) {
			// 	if ($_SESSION['access']=="denied" ) {
			// 	echo "Wrong username or password";
			// }else{
			
				
				
 
			// }
			// }
			

		 ?></h1>
		<?php 
			if (isset($_POST['register'])) {
				extract($_POST);
				session_start();
				$_SESSION['telephone']=$telephone;
				$_SESSION['newuser']=true;
				$_SESSION['highstake']="no";
				$conn=mysqli_connect("localhost","Samuel","samuel3333","bettingsite");
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				$insert="INSERT INTO registration(name,email,telephone,password) VALUES('$name','$email','$telephone','$pass')";
				if (mysqli_query($conn,$insert)) {
					header('Location:casino.php');
				}else{
					?>
					<h2 class="text-info">Failed to add user!!!Retry.</h2>


					<?php 
				}

			}

			?>
		<div class="jumbotron" id="signup">
			<hr>
			<div class="row">
				<div class="col-md-6" >
					<form  method="post" action="index.php">
						<div class="form-group">
							<label>
								Name:<input class="form-control" type="text" name="name" required>
							</label>
						</div>
						<div class="form-group">
							<label>
								Email:<input class="form-control" type="email" name="email" required>
							</label>
						</div>
						<div class="form-group">
							<label>
								Telephone Number:<input class="form-control" type="number" name="telephone" required>
							</label>
						</div>
						<div class="form-group">
							<label>
								Password:<input class="form-control" type="Password" name="pass" required>
							</label>
						</div>
						<input type="submit" name="register" class="btn btn-info btn-lg" value="Register">
					</form>
					



				</div>
				<div class="col-md-6 col-sm-12">
					<h2>Payment methods</h2>
					<ul class="list-group">
						<li class="list-group-item"><h2><span class="text-success"><b>MPESA</b></span></h2></li>
						<li class="list-group-item"><h2>:0797031860</h2></li>
						<li class="list-group-item"><h2><span class="text-primary"><b>Paypal</b></span></h2></li>
						
					</ul>
					<h2>Enjoy your KSH:500 <span class="text-danger">free bet</span></h2>
					
				</div>
			</div>
			
			
		</div>
		
		<h1 id="signin" class="text-center">SIGN IN <span class="glyphicon glyphicon-log-in"></span></h1><hr><hr>
		<div class="jumbotron" >
			<form method="post" action="casino.php" >
				<div class="form-group" >
					<label>
						Telephone:<input class="form-control" type="number" name="telephone" required>
					</label>
				</div>
				<div class="form-group">
					<label>
						Password:<input class="form-control" type="Password" name="pass" required>
					</label>
				</div>
				<input type="submit" name="signin" class="btn btn-lg btn-success" value="Login">
				
			</form>
		</div>
		<div class="jumbotron footer text-center">
			<p>By Samuel ochor &copy;</p>
			<p>Copyright 2018 </p>
		</div>
		
		
	</div>


	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>

