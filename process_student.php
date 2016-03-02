<!DOCTYPE html>
<?php


require_once('/config.php');
require_once('/functions.php');
header ("Location: index.php?msg=0");

//Set table name
$tname = 'personal_info';


//Set field variables
$name = $_POST['name'];
$id = $_POST['id'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$gender = $_POST['gender'];
$date = $_POST['date'];
$month = $_POST['month'];
$year = $_POST['year'];
$nationalID = $_POST['nationalID'];
$religion = $_POST['religion'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$address = $_POST['address'];

//Check fields
$dataValid = true;

$fieldValue = array($name,$id,$gender,$date,$month,$year,$nationalID,$religion,$mobile,$email,$address);
foreach ($fieldValue as $r){
	if(f_hasEmptyField($r)){

	header ("Location: index.php?msg=2");
	$dataValid = false;
	break;
	}
}

if($dataValid){
	$sql = "INSERT INTO $tname (name,id,father_name,mother_name,gender,date,month,year,nationalID,religion,mobile,email,address) 
		VALUES ('$name', '$id', '$father_name', '$mother_name','$gender','$date','$month','$year','$nationalID','$religion','$mobile','$email','$address')";	
}





if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
}
if (mysql_query($sql)) {
	header ("Location: courseform.php?msg=1");
}

mysql_close();
?>