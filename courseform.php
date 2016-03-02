<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

			<title>Course Info</title>
			<?php 
			
			 ?>
			<style type="text/css">
body {
	background: #9999ff;
}

.form {
	width: 600px;
	margin: 0 auto;
	background: #fff;
	padding: 45px;
	border: 5px solid #c2c2c2;
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
				if($msg == '0'){
					echo '<marquee width="50%">Welcome! Please provide valid Info</marquee>';
				}else if ( $msg == '1' ) {
					echo '<p><font color="red"> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp; Your information was submitted successfully...!</font></p>';
				}else if($msg == '2'){
					echo '<p><font color="red"> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp; You did not fill out the required fields*</font></p>';
				}
			?>



				<form action="process_course.php" method="post" >
					<p>
						<h1>Course Registration Form</h1>
					</p>

					<p>ID <span style="margin-left: 70px;">:</span><font color="red">*</font> 						
						<input type="text" name="id" size="10" required/>
					</p>
					
					<p >Batch <span style="margin-left: 45px;">:</span><font color="red">*</font>
						<select name="batch">
							<option>Select</option>
							<option>Regular</option>
							<option>Prerequisite</option>
						</select>
					</p> 

					<p>Semester <span style="margin-left: 17px;">:</span><font color="red">*</font>
						<select name="semester">
							<option>Select</option>
							<option>Prerequisite</option>
							<option>1st Trimester</option>
							<option>2st Trimester</option>
							<option>3st Trimester</option>
						</select>
					</p>
					
					<p>Course 1 <span style="margin-left: 20px;">:</span><font color="red">*</font>
						<select name="course1">
							<option>Select</option>
							<option>PMIT-6003</option>
							<option>PMIT-6103</option>
							<option>PMIT-6104</option>
							<option>PMIT-6214</option>
						</select>
					</p>
					
					<p>Course 2 <span style="margin-left: 20px;">:</span><font color="red">*</font>
						<select name="course2">
							<option>Select</option>
							<option>PMIT-6006</option>
							<option>PMIT-6116</option>
							<option>PMIT-6108</option>
							<option>PMIT-6218</option>
						</select>
					</p>
					
					<p>Course 3 <span style="margin-left: 20px;">:</span><font color="red">*</font>
						<select name="course3">
							<option>Select</option>
							<option>PMIT-6007</option>
							<option>PMIT-6217</option>
							<option>PMIT-6109</option>
							<option>PMIT-6313</option>
						</select>
					</p>
					
					<p>Course 4 <span style="margin-left: 20px;">:</span><font color="red">*</font>
						<select name="course4">
							<option>Select</option>
							<option>PMIT-6008</option>
							<option>PMIT-6307</option>
							<option>PMIT-6201</option>
							
						</select>
					</p>
					
					<p><span style="margin-left: 260px;"></span><input type="submit" Value="Submit" /></p>

				</form>
			</div>
		</body>
	</html>