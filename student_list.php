<?php
	#echo 'Hello';
$connection  = mysql_connect('localhost', 'root', '');

$db_selected = mysql_select_db('school', $connection);
$sql_select = 'SELECT * FROM register';
$result 		= mysql_query($sql_select);
//$row 				= mysql_fetch_assoc($result);
// echo '<pre>';
// print_r($row);
// echo '</pre>';

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

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
			
			<table class="table">
				<tr>
					<th>Date</th>
					<th>ID</th>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Last Name</th>
					<th>Parent Name	</th>
					<th>Sex</th>
					<th>Date Of Birth</th>
					<th>studentid</th>
					<th>Class</th>
					<th>Division</th>
					<th>Teacher Name</th>
					<th>Activities</th>
				</tr>
				<?php  
				while ( $row_array = mysql_fetch_assoc($result)){

					// echo '<pre>';
					// 	print_r($row_array);
					// echo '</pre>';

					?>
					<tr>
						<td><?php echo $row_array['id'] ?></td>
						<td><?php echo $row_array['created_date'] ?></td>
						<td><?php echo $row_array['firstname'] ?></td>
						<td><?php echo $row_array['middlename'] ?></td>
						<td><?php echo $row_array['lastname'] ?></td>
						<td><?php echo $row_array['parentname	'] ?></td>
						<td><?php echo $row_array['sex'] ?></td>
						<td><?php echo $row_array['dob'] ?></td>
						<td><?php echo $row_array['studentid'] ?></td>
						<td><?php echo $row_array['class'] ?></td>
						<td><?php echo $row_array['division'] ?></td>
						<td><?php echo $row_array['teachername'] ?></td>
						<td><?php echo $row_array['activities'] ?></td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<form method="POST" action="search_result.php">
					<h3>Search</h3>
					<div class="col-md-4">
						<label for="name">First Name</label>
						<input type="text" name="firstname" class="form-control" id="name" placeholder="First Name">
					</div>
					<div class="col-md-4">
						<label for="sex">Sex</label>
						<input type="text" name="sex" class="form-control" id="sex" placeholder="Sex">
					</div>
					<div class="col-md-4">
						<label for="class">class</label>
						<input type="text" name="class" class="form-control" id="class" placeholder="class">
					</div>
					<div class="col-md-4">
					<br>
						<button type="submit" class="btn btn-success">Search</button>
					</div>
				</form>
			</div>
		</div>
		<script type="text/javascript" src="assets/js/app.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
	</html>