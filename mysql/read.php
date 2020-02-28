<?php 

// include the dbase
include "db.php";

	// Select all form the users table
 	$query = "SELECT * FROM users";

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
		
		<div class="col-sm-6 mt-5 p-4 bg-primary text-light">
			
			<!-- while loop to fetch data from the mysqli query -->
			<?php

			while($row = mysqli_fetch_assoc($result)) {

				print_r($row);
			}

			?>
		
		</div>

	</div>



<!-- js -->
<script src="../js/bootstrap.min.js"></script>

</body>
</html>