<?php include "db.php"; ?>

<!-- // include the function -->
<?php include "function.php"; ?>


<?php

// function deleteRows form the users table
	deleteRows();

 ?>
 		
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login Delete</title>
	
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/form-style.css">

</head>
<body>
	

	<div class="container d-flex justify-content-center mt-5">
		
		<div class="col-sm-6 mt-5 p-4 bg-primary text-light">
			<h1 class="text-center">Delete User</h1>
			
			<form action="delete.php" method="post">
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
					
				<div class="form-group">
					<label for="usernameID"> ID </label>

					<select name="id" id="id">
						
						<!-- while loop -->
						 <?php 

						showAllData();
						 
						 ?>
					

					</select>
				</div>

				<button type="submit" value="delete" name="submit" class="btn btn-danger">Delete</button>

			</form>
		
		</div>

	</div>



<!-- js -->
<script src="../js/bootstrap.min.js"></script>

</body>
</html>