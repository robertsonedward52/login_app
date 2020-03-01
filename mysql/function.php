<!-- include the dbase -->
<?php include "db.php" ?>

<?php

	// Create function rows
	 // check if the username and password has been submited
	 function createRows() {
	if(isset($_POST["submit"])) {

	global $conn;

	$username = $_POST["username"];
	$password = $_POST["password"];

	// step 1:
	// echo "Your username is " . $username;
	// echo "<br>";
	// echo "And your password is " . $password;
}


	// insert into the username and password column
 	$query = "INSERT INTO users (username, password)";
 	$query .= " VALUES ('$username', '$password')";


 	// initialize a varibale for the query 
 	$result = mysqli_query($conn, $query);
	
	// check if the query was successfull
 		if(!$result) {

 			die("Query Failed" . mysqli_error());

 		}
 		else {
 			echo "New Record Created";
 		}
 } 


		// showAllData
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

 				// while loop to fetch all data from the result
 			 while($row = mysqli_fetch_assoc($result)) {

						 	// variabel intialize that pull data from the dbase id column  
							$id = $row['ID'];

							echo "<option value='$id'>$id</option>";
				 }
			}





				 // update users table 
			 function updateTable() {

		if(isset($_POST["submit"])) {


			 	// Global Variable
			 	Global $conn;

			$username = $_POST["username"];
			$password = $_POST["password"];
			$id = $_POST["id"];

			$query = "UPDATE users SET ";
			$query .= "username = '$username', ";

			$query .= "password = '$password' ";
			$query .= "WHERE id = $id ";

			// make a query from db
			$result = mysqli_query($conn, $query);

			// if the query did not went through stop conn
			if(!$result) {

			die("Query Failed " . mysqli_error($conn));
			}
			else {
 			echo "Record Updated";
 		}
 	}

}



 		 // delete rows from the users table 
			 function deleteRows() {

			if(isset($_POST["submit"])) {


			 	// Global Variable
			 	Global $conn;

			$username = $_POST["username"];
			$password = $_POST["password"];
			$id = $_POST["id"];

			$query = "DELETE FROM users ";
			$query .= "WHERE id = $id ";

			// make a query from db
			$result = mysqli_query($conn, $query);

			// if the query did not went through stop conn
			if(!$result) {

			die("Query Failed " . mysqli_error($conn));
			}
			else {
 			echo "Record Deleted";
 		}

 		 }
 	}


?>