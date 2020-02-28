<?php 

// include the dbase
include "db.php";

// check if the username and password has been submited 
if(isset($_POST["submit"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	// step 1:
	// echo "Your username is " . $username;
	// echo "<br>";
	// echo "And your password is " . $password;
}


	// insert into the username and password column
 	$query = "INSERT INTO users (username,password)";
 	$query .= "VALUES ('$username', '$password')";


 	// initialize a varibale for the query 
 	$result = mysqli_query($conn, $query);
	
	// check if the query was successfull
 		if(!$result) {

 			die("Query Failed" . mysqli_error()) ;

 		}
 		
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/form-style.css">

</head>
<body>
	
	<div class="container d-flex justify-content-center mt-5">
		
		<div class="col-sm-6 mt-5 p-4 bg-primary">

			<h1 class="text-center">Users Login</h1>
			
			<form action="index.php" method="post">
				<!-- form group -->
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" class="form-control">
					<small class="text-light">Please enter your username</small>
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control">
					<small class="text-light">Please enter your password</small>
				</div>

				<button type="submit" value="submit" name="submit" class="btn btn-danger outline-danger">Submit</button>

			</form>
		</div>

	</div>



<!-- js -->
<script src="../js/bootstrap.min.js"></script>

</body>
</html>