<?php 

// connect to the database
 $conn = mysqli_connect("localhost", "root", "", "my_app");

 // test if connected to the dbase
 if(!$conn) {
 	echo "Database connected successfully";
 }
 	// else {
 	// 	die("Connecting to the database failed");
 	// }

?>