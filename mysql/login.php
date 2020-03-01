<?php include "db.php"; ?>
<?php include "function.php"; ?>
 
 <?php createRows(); ?>	


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/form-style.css">

</head>
<body>
	
	<div class="container d-flex justify-content-center mt-5">
		
		<div class="col-sm-6 mt-5 p-4 bg-primary">

			<h1 class="text-center text-light">Create User</h1>
			
			<form action="login.php" method="post">

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

				<button type="submit" value="create" name="submit" class="btn btn-success">Create</button>

			</form>
		</div>

	</div>



<!-- js -->
<script src="../js/bootstrap.min.js"></script>

</body>
</html>