<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<script src="/jquery-1.12.1.js"></script>
			<title>Student Info</title>
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

span{
        display: inline-block;
    }

	span select input { 
	display: block; 
	position: relative; 
	top: -3em; 
	}

	span input { text-align:center;}
    span label { 
        display: block; 
        position: relative; 
        top:2.3em;
        text-align: center;
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
			

				<form action="process_student.php" method="post" >
					<p>
						<h1>Student Registration Form</h1>
					</p>
					

					<p>Name<span style="margin-left: 73px;">:</span>
						<font color="red">*</font>
						<input type="text" name="name" required /> 
					</p> 

					<p>ID<span style="margin-left: 100px;">:</span>
						<font color="red">*</font>
						<input type="text" name="id" required/>
					</p>


					<p>Father's Name<span style="margin-left: 20px;">:</span> 
						<input type="text" name="father_name" />
					</p>
					<p>Mother's Name<span style="margin-left: 17px;">:</span> 
						<input type="text" name="mother_name"/>
					</p>


					<p>Gender<span style="margin-left: 65px;">:</span>
						<font color="red">*</font>
						<select name="gender" >
							<option>Select</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							<option value="Others">Others</option>
						</select>
					</p>

					<p>Date of Birth<span style="margin-left: 30px;">:</span>
						<font color="red">*</font>
						<span>
							<label for="l1" >dd</label>
							<input  type="number_format" name="date" id="l1" maxlength="2" size="2" required/>
						</span>
						<span>/</span>
						<span>
							<label for="l2" >mm</label>
							<input  type="number_format" name="month" id="l2" maxlength="2" size="2" required/>
						</span>
						<span>/</span>
						<span>
							<label for="l3" >yy</label>
							<input  type="number_format" name="year" id="l3" maxlength="4" size="2" required/>

						</span>
					</p>



					<p>National ID<span style="margin-left: 40px;">:</span><font color="red">*</font>
						<input type="number" name="nationalID" maxlength="20" required/>
					</p>

					<p>Religion<span style="margin-left: 62px;">:</span><font color="red">*</font>
						<select name="religion" >
							<option  >Select</option>
							<option value="Hinduism" >Hinduism</option>
							<option value="Islam" >Islam</option>
							<option value="Buddhism" >Buddhism</option>
							<option value="Christianity" >Christianity</option>
						</select>
					</p>

					<p>Mobile<span style="margin-left: 70px;">:</span><font color="red">*</font>
						<input type="tel" name="mobile" maxlength="11" required/>
					</p>

					<p>Email<span style="margin-left: 78px;">:</span><font color="red">*</font>
						<input type="text" name="email" required/>
					</p>

					<p>Address<span style="margin-left: 60px;">:</span><font color="red">*</font>
						<input type="text" name="address" size="40" required/>
					</p>
					<p>
						<font color="red">*</font>fields are mandatory</p>



					<p><span style="margin-left: 260px;"></span><input type="submit" Value="Next" /></p>

				</form>
			</div>
		</body>
	</html>