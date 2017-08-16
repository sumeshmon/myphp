<?php
echo "<pre>";
// print_r($_POST);
echo "</pre>";
// exit;

$connection  = mysql_connect('localhost', 'root', '');

$db_selected = mysql_select_db('school', $connection);

$dob = $_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'];
$activities = $_POST['activities'][0].','.$_POST['activities'][1];

 $sql = "INSERT INTO  `register` (
	`firstname` ,
	`middlename` ,
	`lastname` ,
	`parentname` ,
	`sex` ,
	`dob` ,
	`studentid` ,
	`class` ,
	`division` ,
	`teachername` ,
	`activities`,
	`created_date`
	
)
	VALUES ('".$_POST['firstname']."', 
			'".$_POST['middlename']."', 
			'".$_POST['lastname']."',  
			'".$_POST['parentname']."',  
			'".$_POST['gender']."',  
			'".$dob."',  
			'".$_POST['studentid']."',  
			'".$_POST['class']."',  
			'".$_POST['division']."',  
			'".$_POST['teachername']."', 
			'".$activities."',
			NOW());";

// mysql_query($sql);		
		
if (mysql_query($sql)) {
	echo "<pre>";
    echo "New record created successfully";
    echo "</pre>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}


?>