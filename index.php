<?php
	#echo 'Hello';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/app.css">
</head>
<body>
	<div class="container">
		<div class="row">
		<!-- login -->
			<div class="col-md-6">
				<h2>Login</h2>
				<form method="POST" action="">
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox"> Check me out
						</label>
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>	

			<!-- registration -->
			<div class="col-md-6">
				<h2>Student Registation Form</h2>
				<form method="POST" action="register.php">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" class="form-control" id="name" placeholder="Name">
					</div>					
					<div class="form-group">
						<label for="studentId">Student ID</label>
						<input type="text" name="studentid" class="form-control" id="studentId" placeholder="Student ID">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="password">password</label>
						<input type="password" name="password" class="form-control" id="password" placeholder="password">
					</div>

					
					<button type="submit" class="btn btn-default">Register</button>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="assets/js/app.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>
</html>