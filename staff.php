<?php 
	
	$date = date('Y-m-d H:i:s');
?>
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
				<input type="search" name="" placeholder="search staff">
				
				<button type="submit" name="search_id" class="submit">Submit</button>
			</div>
		</header>
	</div>


	<div class="side-bar">
		<div>
		
		</div>
		<div class="pat">
				<button type="submit" name="search_id" class="submit" id="back"><a href="admin.php">Back</a></button>
				<a href="" class="card" id="card">Staffs</a><br>
				<a href="staff_details.php" class="pill">Staff Details</a><br>
				<a href="staff.php" class="pill">Add New Staff</a><br>
		</div>

	</div>


	<div class="main-bar" style="width:60%;">
		
			<span class="card1"> 

				<input type="" name="" value="Add New Appointment">


			</span>
		<form class="" action="function.php" method="post">

 		<!--<label>Firstname </label>-->
 		<input type="text" name="firstname" placeholder="enter firstname" required="">


 		<!--<label>Lastname</label>-->
 		<input type="text" name="lastname" placeholder="enter lastname" required="">
 		
 		<!--<label>Email</label>-->
 		<input type="text" name="email" placeholder="enter email" required="">
 		
 		<!--<label>Contact No</label>-->
 		<input type="text" name="contact" placeholder="enter GSM" required="">
 		

 		<!--<label>duty</label>-->
 		<input type="text" name="duty" placeholder="enter duty" required="">
 		

 		<select name="qual" required="">
 			<option value="HND"> HND</option>
 			<option value="OND"> OND </option>
 			<option value="BSC"> BSC </option>
 		</select>

 		<!--<label>Date joined</label>-->
 		<input type="text" name="time_stamp" placeholder="<?php echo $date; ?>" value="<?php echo $date; ?>" >
 		
 		<div class="Upload Doc">
 			
 			<input  class="pick" type="file" name="file" placeholder="Upload file"  >
 			
 		</div>
 		<div class="Submit">

			<input type="submit" class="sbt" name="submit_st" value="Submit">

		</div>
 	</form>
			
	</div>

</body>
</html>