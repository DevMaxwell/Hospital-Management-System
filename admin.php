<!DOCTYPE html>
<html>
<head>
	<title>HMS</title>
	 	<link rel="stylesheet" type="text/css" href="admin.css">
</head>


<body>
	<div class="jumbo">
		<header class="header">
			<h3>Hospital Management System</h3>

			<div class="find">
				<input type="search" name="" placeholder="search appointment with contact no">

				<button type="submit" name="search_id" class="submit">Submit</button>
			</div>
		</header>
	</div>

	<div class="bar">

		<div class="side-bar">
			<div class="pat">
				<a href="" class="card">Patients</a><br>
				<a href="patient_details.php" class="pill">Appointment Details</a><br>
				<a href="" class="pill">Add New Patient</a><br>
		<!---		</div>

			<div class="sta"> ---->
				<a href="" class="card" id="card">Staffs</a><br>
				<a href="staff_details.php" class="pill">Staff Details</a><br>
				<a href="staff.php" class="pill">Add New Staff</a><br>
			</div>
		</div>


		<div class="main-bar">

			<span class="card1"> 

				<input type="" name="" value="Add New Appointment"> 

			</span>

			<form class="" action="function.php" method="post">

		 		<!--<label>Firstname </label>-->
		 		<input type="text" name="firstname" placeholder="enter firstname" required=""><br>


		 		<!--<label>Lastname</label>-->
		 		<input type="text" name="lastname" placeholder="enter lastname" required=""><br>
		 		
		 		<!--<label>Email</label>-->
		 		<input type="text" name="email" placeholder="enter email" required=""><br>
		 		
		 		<!--<label>Contact No</label>-->
		 		<input type="text" name="contact" placeholder="enter contact no" required=""><br>
		 		
		 		<select name="doc"><br>
		 			<option value="Dr Stanley Okeke from 6am to 6pm"> Dr Stanley Okeke</option>
		 			<option value="Dr Gafar Idris from 6pm to 6am">Dr Gafar Idris</option>
		 		</select>

		 		<div class="Submit">

					<input type="submit" class="sbt" name="submit_ap" value="Submit">

				</div>
	 		</form>
				
		</div>
	</div>

</body>
</html>

<style type="text/css">

	

</style>