<?php
echo "<pre>";
// print_r($_POST);
echo "</pre>";
// exit;

$connection  = mysql_connect('localhost', 'root', '');
$db_selected = mysql_select_db('school', $connection);

$birth = $_POST['day'].'-'.$_POST['month'].'-'.$POST['year'];

$teacher = "INSERT INTO `school`.`teacher_register` (
`firstname` ,
`middlename` ,
`lastname` ,
`sex` ,
`dob` ,
`teacherid` ,
`create_date`
)
VALUES ('".$_POST['firstname']."', 
'".$_POST['middlename']."', 
'".$_POST['lastname']."', 
'".$_POST['gender']."', 
'".$birth."', 
'".$_POST['teacherid']."',
NOW());";

// mysql_query($teacher);

			// echo $teacher;
if (mysql_query($teacher)) {
	echo "<pre>";
	echo "New record created successfully";
	echo "</pre>";
} else {
	echo "Error: " . $teacher . "<br>" . mysqli_error($connection);
}
?>