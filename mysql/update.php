<?php include "db.php"; ?>

<!-- // include the function -->
<?php include "function.php"; ?>
 		

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
					
				<div class="form-group">
					<label for="usernameID"> ID </label>

					<select name="id" id="id">
						
						<!-- while loop -->
						 <?php 

						showAllData();
						 
						 ?>
					

					</select>
				</div>

				<button type="submit" value="UPDATE" name="submit" class="btn btn-success outline-danger">UPDATE</button>

			</form>
		
		</div>

	</div>



<!-- js -->
<script src="../js/bootstrap.min.js"></script>

</body>
</html>