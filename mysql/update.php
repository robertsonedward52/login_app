<?php include "db.php"; ?>

<!-- // include the function -->
<?php include "function.php"; ?>


<?php

// function update updateTable
	 updateTable();

 ?>
 		
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login Update</title>
	
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/form-style.css">

</head>
<body>
	

	<div class="container d-flex justify-content-center mt-5">
		
		<div class="col-sm-6 mt-5 p-4 bg-info text-light">
			<h1 class="text-center">Update User</h1>
			
			<form action="update.php" method="post">
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

				<button type="submit" value="UPDATE" name="submit" class="btn btn-primary">UPDATE</button>

			</form>
		
		</div>

	</div>



<!-- js -->
<script src="../js/bootstrap.min.js"></script>

</body>
</html>