<?php 
	session_start();

 ?>
<?php 
	 $conn=mysqli_connect("localhost","Samuel","samuel3333","bettingsite");
	 if (!$conn) {
   		 die("Connection failed: " . mysqli_connect_error());
			}
	
 	if (isset($_POST['submit'])) {
 		

 		extract($_POST);
 		if ($chosen=="none") {
 			$_SESSION['newuser']=false;
 			$_SESSION['highstake']="no";
 			header('Location:casino.php');
 			die();
 		}
 		$_SESSION['chosen']=$chosen;
 		$maxstake=$_SESSION['maxstake'];
 		if ($stake>$maxstake) {
 			$_SESSION['newuser']=false;
 			$_SESSION['highstake']="yes";
 			header('Location:casino.php');
 		}else{
 			$_SESSION['highstake']="no";
 			$random=rand();
 			$_SESSION['random']=$random;
 			if ($random%2==0) {
 				$oddEven="even";
 				$_SESSION['oddEven']=$oddEven;
 			}else{
 				$oddEven="odd";
 				$_SESSION['oddEven']=$oddEven;
 			}
 			if ($chosen==$oddEven) {
 				$telephone=$_SESSION['telephone'];
 				
 				$winnings=($stake*2)-$stake;
 				$_SESSION['winnings']=$winnings;
 				$newcash=$maxstake+$winnings;
 				$_SESSION['newcash']=$newcash;
 				// echo "<br>";
 				// echo $winnings;
 				// echo "<br>";
 				// echo $newcash;
 				$updatecash="UPDATE registration SET money=$newcash WHERE telephone=$telephone";
 				if (mysqli_query($conn,$updatecash) ){
 					header('Location:redirect.php');
 				}else{
 					die();
 				}
 				
 				
 			}else{
 				$telephone=$_SESSION['telephone'];
 				$newcash=$maxstake-$stake;
 				$_SESSION['newcash']=$newcash;
 				$updatecash="UPDATE registration SET money=$newcash WHERE telephone=$telephone";
 				if (mysqli_query($conn,$updatecash)) {
 					# code...
 					header('Location:redirect.php');
 				}else{
 					die();
 				}

 			}

 		}
 		
 		
 	}
 	


 ?>
 
 