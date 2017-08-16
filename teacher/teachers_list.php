<?php
	#echo 'Hello';
$connection  = mysql_connect('localhost', 'root', '');

$db_selected = mysql_select_db('school', $connection);
$sql_select = 'SELECT * FROM teacher_register';
$result 		= mysql_query($sql_select);
$row 				= mysql_fetch_assoc($result);
// echo '<pre>';
// print_r($row);
// echo '</pre>';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/app.css">
</head>
<body>
	
		
		<script type="text/javascript" src="assets/js/app.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
	</html>