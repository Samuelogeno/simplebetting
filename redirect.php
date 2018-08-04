	<?php 
	session_start();
	$_SESSION['newuser']=false;
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Bet Slip</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<style type="text/css">
			body{
				background-color: green;
			}
		</style>
	</head>
	<body>
		
		<div class="container">

		</div>
		<div class="container">
			<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">

				</div>
				<ul class="nav navbar-nav">
					
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a class="btn btn-lg" href="casino.php">New Bet</a></li>
					<li><a class="btn btn-lg" href="index.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
				</ul>
			</div>
		</nav>
			<h2 class="text-center">Bet results</h2>

			<hr>

			<div class="jumbotron text-center">

				<h2 class="text-right">Telephone: <?php echo $_SESSION['telephone']; ?></h2><hr>
				<h2 class="text-right text-info">Ksh: <?php echo $_SESSION['newcash']; ?></h2><hr>

				<h2>The random number is <?php echo $_SESSION['random']." it is ".$_SESSION['oddEven']; ?></h2>
				<h2>Your pick:<?php echo $_SESSION['chosen']; ?></h2>
				<h2 class="text-center"><?php 

				if ($_SESSION['chosen']==$_SESSION['oddEven']) {
					echo '<span class="text-success">YOU WON '.$_SESSION['winnings'].'!!New balance is '.$_SESSION['newcash'].'</span>';
				}else{
					echo '<span class="text-danger">Try again</span>'.'!Your balance :'.$_SESSION['newcash'];
				}

				?></h2>

			</div>
		</div>


	</body>
	</html>

