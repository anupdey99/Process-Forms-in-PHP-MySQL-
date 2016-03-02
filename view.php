<!DOCTYPE html>
<?php
// Load config file of DB
require_once('/config.php');
?>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Student Profile</title>
		<style type="text/css">
body {
	background: #9999ff;
}

.form {
	width: 600px;
	margin: 0 auto;
	background: #fff;
	padding: 45px;
	border: 1px solid #c2c2c2;
}

.error {
    color: #AA0000
}
.controlerror {
    background-color: #ffffdd;
    border: 1px solid #AA0000;
}

.input {
	width: 300px;
	height: 35px;
	margin-left: 10px;
}




		</style>
	</head>
	<body>
		<div class="form">
			<?php
				
				if(isset($_GET['msg'])){
					$msg = $_GET['msg'];
				}else $msg = '';
				if($msg == '1'){
					echo '<marquee>Welcome! To Student Profile.</marquee>';
				}
				
				
				
/******************************DB1**********************************/
//Set table name
$tname = 'personal_info';

$sql = "SELECT * FROM $tname";

$results = mysql_query($sql);
		
if (!$results) {
	die('Invalid query: ' . mysql_error());
}

// antity : name,id,father_name,mother_name,gender,date,month,year,nationalID,religion,mobile,email,address


/*---------------------------- DB2 --------------------------------*/

// Set Table Name

$tname1 = 'course_info';


$sql = "SELECT * FROM $tname1";

$data = mysql_query($sql);

if (!$data) {
	die('Invalid query: ' . mysql_error());
}

// Antity id,batch,semester,course1,course2,course3,course4


/*****************Print**************/


echo '<h1>Student Profile</h1>';
//$result = mysql_fetch_array( $results );
$field = mysql_fetch_array( $data );

//echo $result;
//echo $field;
//$field = mysql_fetch_array( $data ||
while(   $result = mysql_fetch_array( $results )  ){
	echo '<div style="border: 1px solid #e4e4e4; padding: 15px; margin-bottom: 10px;">';
	
	echo '<p><span style="margin-left: 210px;"></span><u>Student Profile</u> #: ' . $result['serial'] . '</p>';
	echo '<p ><b>Name<span style="margin-left: 80px;">: </span></b>' . $result['name'] . '</p>';
	echo '<p><b>ID<span style="margin-left: 108px;">: </span></b>' . $result['id'] . '</p>';	
	echo '<p><b>Fathers Name<span style="margin-left: 20px;">: </span></b>' . $result['father_name'] . '</p>';
	echo '<p><b>Mothers Name<span style="margin-left: 18px;">: </span></b>' . $result['mother_name'] . '</p>';
	echo '<p><b>Gender<span style="margin-left: 72px;">: </span></b>' . $result['gender'] . '</p>';
	echo '<p><b>Date of Birth<span style="margin-left: 35px;">: </span></b>' . $result['date'] . '/'.$result['month'].'/'.$result['year'].'</p>';
	echo '<p><b>National ID<span style="margin-left: 45px;">: </span></b>' . $result['nationalID'] . '</p>';
	echo '<p><b>Religion<span style="margin-left: 68px;">: </span></b>' . $result['religion'] . '</p>';
	echo '<p><b>Phone<span style="margin-left: 80px;">: </span></b>' . $result['mobile'] . '</p>';
	echo '<p><b>Email<span style="margin-left: 85px;">: </span></b>' . $result['email'] . '</p>';
	echo '<p><b>Address<span style="margin-left: 65px;">: </span></b>' . $result['address'] . '</p>';
	
	echo '';
	echo '<h3>Course Details:</h3>';
	echo '<p><b> ID       <span style="margin-left: 105px;">: </span></b>' . $field['id'] . '</p>';
	echo '<p><b> Batch    <span style="margin-left: 80px;">: </span></b>' . $field['batch'] . '</p>';
	echo '<p><b> Semester <span style="margin-left: 52px;"> : </span></b>' . $field['semester'] . '</p>';
	echo '<p><b> Course 1 <span style="margin-left: 56px;"> : </span></b>' . $field['course1'] . '</p>';
	echo '<p><b> Course 2 <span style="margin-left: 56px;"> : </span></b>' . $field['course2'] . '</p>';
	echo '<p><b> Course 3 <span style="margin-left: 56px;"> : </span></b>' . $field['course3'] . '</p>';
	echo '<p><b> Course 4 <span style="margin-left: 56px;"> : </span></b>' . $field['course4'] . '</p>';
		
	echo '</div>';
}


		












?>


		</div>
	</body>
</html>