<?php
	// echo 'Hello';
$connection  = mysql_connect('localhost', 'root', '');

$db_selected = mysql_select_db('school', $connection);
$sql_select = 'SELECT * FROM teacher_register';
$result 		= mysql_query($sql_select);
// $row 				= mysql_fetch_assoc($result);
// echo "<pre>";
// print_r($row);
// echo "</pre>";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/app.css">
</head>
<body>
	<div class="container">
		<table class="table">
			<tr>
				<th>ID No:</th>
				<th>Name</th>
				<th>Gender</th>
				<th>DOB</th>
				<th>Date</th>
			</tr>
			<?php  
			while ( $row_array = mysql_fetch_assoc($result)){	
				// $name = $row['firstname'];
				$name = $row_array['firstname'].'&nbsp;'.$row_array['middlename'].'&nbsp;'.$row_array['lastname'];
				?>
				<tr>
					<td><?php echo $row_array['teacherid'] ?></td>
					<td><?php echo $name ?></td>
					<td><?php echo $row_array['sex'] ?></td>
					<td><?php echo $row_array['dob'] ?></td>
				</tr>
				<?php } ?>
			</table>
		</div>

		
		<script type="text/javascript" src="assets/js/app.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
	</html>