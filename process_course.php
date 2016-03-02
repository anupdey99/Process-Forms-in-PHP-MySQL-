<!DOCTYPE html>
<?php


require_once('/config.php');
require_once('/functions.php');
//header ("Location: .php?msg=0");

//Set table name
$tname = 'course_info';

//Set field variables
$id = $_POST['id'];
$batch = $_POST['batch'];
$semester = $_POST['semester'];
$course1 = $_POST['course1'];
$course2 = $_POST['course2'];
$course3 = $_POST['course3'];
$course4 = $_POST['course4'];

// Antity id,batch,semester,course1,course2,course3,course4

//Check fields
$dataValid = true;

$fieldValue = array($id,$batch,$semester,$course1,$course2,$course3,$course4);
foreach ($fieldValue as $r){
	if(f_hasEmptyField($r)){

	header ("Location: courseform.php?msg=2");
	$dataValid = false;
	break;
	}
}

if($dataValid){
	$sql = "INSERT INTO $tname (id,batch,semester,course1,course2,course3,course4) 
			VALUES ('$id','$batch','$semester','$course1','$course2','$course3','$course4')";	
}





if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
}
if (mysql_query($sql)) {
	header ("Location: view.php?msg=1");
}

mysql_close();
?>