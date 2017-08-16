<?php
 $connection  = mysql_connect('localhost', 'root', '');
 $db_selected = mysql_select_db('school', $connection);
  
 // $result      = mysql_query("SELECT id, name FROM php");


 echo $sql = "INSERT INTO  `register` (
								`name` ,
				`student_id`,				
				`email` ,
				`password` ,
				`created_date`
				)
				VALUES ('".$_POST['name']."', '".$_POST['studentid']."', '".$_POST['email']."',  '".$_POST['password']."',  NOW());";
mysql_query($sql);				

echo '<br/><p><b>';

// print_r($_POST);

echo '<pre>';
// echo $_POST['studentid'];
print_r($_POST)
 

/*
echo 'Connected successfully';

echo '<br/><p><b>';

print_r($link);

echo '</b></p>';
*/
//echo $_POST['name'];
// echo $_POST['email'];
// echo $_POST['password'];


/*
CREATE TABLE  `php`.`register` (
`id` INT( 11 ) NOT NULL ,
`name` VARCHAR( 110 ) NOT NULL ,
`email` VARCHAR( 50 ) NOT NULL ,
`password` VARCHAR( 50 ) NOT NULL ,
`created_on` DATE NOT NULL ,
PRIMARY KEY (  `id` )
) ENGINE = MYISAM */

/*
INSERT INTO  `php`.`register` (
`id` ,
`name` ,
`email` ,
`password` ,
`created_on`
)
VALUES (
NULL ,  'sumesh',  'nothig@gmail.com',  '123456',  '2017-07-26'
);
*/

//echo '<pre>';
//print_r($_POST);

?>