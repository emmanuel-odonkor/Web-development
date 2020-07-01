<?php
/*
* @author Emmanuel Odonkor Teye-Kofi
* This php file establishes a connection to the database and adds a user to the it.
*/

//establishing a connection to the database "webtech_fall2019_emmanuel_odonkor"
//Database credentials
define("SERVERNAME", 'cs.ashesi.edu.gh');
define("USERNAME", 'emmanuel_odonkor');
define("PASSWORD", 'emmanuel_odonkor');
define("DATABASE", 'webtech_fall2019_emmanuel_odonkor');

	$conn = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DATABASE);

//checks if the connection is perfectly established
	if(!$conn){
		//If not, the program echoes out "CONNECTION FAILED".
		die("CONNECTION FAILED: " . mysqli_connect_error());
	}
	else{
//If connection is established, the program echoes "CONNECTION ESTABLISHED" and directs the user to the home page
		echo "CONNECTION ESTABLISHED";
		header("location: ../index.php");
//checks if the signup button is clicked. 
		if(isset($_POST['usignup'])){
		$uname = $_POST['uname'];
		$upass = $_POST['upass'];
		$pass = md5($upass);
//issues out a query to add the user details into the database successfully
		$sql = "INSERT INTO `user`(`username`,`password`) values ('$uname','$pass')";

		$result = mysqli_query($conn,$sql);
	}
	}

?>