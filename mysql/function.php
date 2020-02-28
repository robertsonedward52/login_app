<!-- include the dbase -->
<?php include "db.php"?>

<?php

 		function showAllData() {

 			global $conn;

 		// Select all form the users table
 	$query = "SELECT * FROM users";

 	// initialize a varibale for the query 
 	$result = mysqli_query($conn, $query);
	
	// check if the query was successfull
 		if(!$result) {

 			die("Query Failed" . mysqli_error()) ;

 		}

 			 while($row = mysqli_fetch_assoc($result)) {

						 	// variabel intialize that pull data from the dbase id column  
							$id = $row['ID'];

							echo "<option value='$id'>$id</option>";
				 }

 	}

?>