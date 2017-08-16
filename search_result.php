<?php
	#echo 'Hello';
$connection  = mysql_connect('localhost', 'root', '');

$db_selected = mysql_select_db('school', $connection);
$sql_select = 'SELECT * FROM register';
//$result 		= mysql_query($sql_select);
//$row 				= mysql_fetch_assoc($result);
// echo '<pre>';
// print_r($row);
// echo '</pre>';

// echo "<pre>";
 //print_r($_POST);
// echo "</pre>";

if($_POST){
		// echo $_POST['sex'];
		$firstname  = $_POST['firstname'];
		$sex  			= $_POST['sex'];
		$class  			= $_POST['class'];

		$sql_and    = '';

		if($firstname!=''){
				//echo 'Somevalue is there';
				$sql_and .= "AND firstname LIKE '%$firstname%'";
		}else{
				// echo 'No Value';
			$sql_and  .= '';
		}

		if($sex!=''){
				//echo 'Somevalue is there';
				$sql_and .= "AND sex LIKE '$sex'";
		}else{
				// echo 'No Value';
			$sql_and  .= '';
		}

		if($class!=''){
			$sql_and .= "AND class LIKE '$class'";
		}else{
			// echo "no value";
			$sql_and .= '';
		}


		$sql_select = "SELECT * FROM register WHERE id <> '' ".$sql_and;

		//echo $sql_select = "SELECT * FROM register WHERE firstname LIKE '%$firstname%' AND sex LIKE '%$sex%'";
}

$result 		= mysql_query($sql_select); //mysql_query() sends a unique query (multiple queries are not supported) to the currently active database on the server that's associated with the specified link_identifier. 

$rows 		    = mysql_num_rows($result); //Retrieves the number of rows from a result set



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

				//checking the table row is have some value 
				if($rows > 0){

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
					<?php } }else{?>
						<tr><td colspan="13">No Matching records found</td></tr>
					<?php } ?>
				</table>
			</div>
		</div>
		
		<script type="text/javascript" src="assets/js/app.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
	</html>