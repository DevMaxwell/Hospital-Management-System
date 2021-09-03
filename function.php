<?php
$con=mysqli_connect("localhost","root","","hmsdb");

if ($con) {
	# code...
}
else{
	echo "error";
}




if (isset($_POST['submit'])) {
	# code...
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM login_db WHERE Username='$username' and Password='$password' ";
	$result=mysqli_query($con,$query);

	if (mysqli_num_rows($result)==1) {
		# code...
		header("Location:admin.php");
	}
	else {
		 echo"<scrip>alert('Error login')</script>";
		 echo "<script>window.open('index.php','_self')</script>";
	}

}

if (isset($_POST['submit_ap'])) {
	# code...
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$doc = $_POST['doc'];

	$query = "INSERT INTO `appointment`(`fname`, `lname`, `email`, `contact`, `doc`) VALUES ('$firstname','$lastname','$email','$contact','$doc')";
	$result =mysqli_query($con, $query);
	if ($result) {
		# code...
		 echo"<scrip>alert('Appointment created')</script>";
		 echo "<script>window.open('admin.php','_self')</script>";
	}
}

function get_patients_details(){
	global $con;
	$querrry = "SELECT * FROM appointment ";
	$results = mysqli_query($con,$querrry); 
	#or die(mysqli_error($con));
	
	while ($row = mysqli_fetch_array($results)){
		# code...
		$fname = $row['fname'];
		$lname = $row['lname'];
		$email = $row['email'];
		$contact = $row['contact'];
		$doc = $row['doc'];
		echo "<tr>
			<td>$fname</td>
			<td>$lname</td>
			<td>$email</td>
			<td>$contact</td>
			<td>$doc</td>
		</tr>";
	}	
}

if (isset($_POST['submit_st'])) {
	# code...
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$duty= $_POST['duty'];
	$qual = $_POST['qual'];
	$date = $_POST['time_stamp'];
	$doc = $_POST['file'];

	$sql = "INSERT INTO stfaf (fname, lname, email, contact, duty, qual, date, file) VALUES ('$firstname','$lastname','$email','$contact','$duty','$qual','$date','$doc')";
	$result =mysqli_query($con, $sql) or die(mysqli_error($con));
	if ($result) {
		# code...
		header("Location:admin.php");
		#	 echo"<scrip>alert('Appointment created')</script>";
		# 	echo "<script>window.open('admin.php','_self')</script>";
	}
}

function get_staff_details(){
	global $con;
	$querrry = "SELECT * FROM stfaf ";
	$results = mysqli_query($con,$querrry); 
	#or die(mysqli_error($con));
	
	while ($row = mysqli_fetch_array($results)){
		# code...
		$fname = $row['fname'];
		$lname = $row['lname'];
		$email = $row['email'];
		$contact = $row['contact'];
		$duty = $row['duty'];
		$qual = $row['qual'];
		$date = $row['date'];
		$file = $row['file'];
		echo "<tr>
			<td>$fname</td>
			<td>$lname</td>
			<td>$email</td>
			<td>$contact</td>
			<td>$duty</td>
			<td>$qual</td>
			<td>$date</td>
			<td>$file</td>
			<td> <button style='background-color: #cc66ff; border-radius: 5px; border: none; padding: 5px; color:white;'>Print </button> 
				<button style='background-color: #cc33ff; border-radius: 5px; border: none; padding: 5px; color:white;'> Edit </button> 
				<button style='background-color: #ff3333; border-radius: 5px; border: none; padding: 5px; color: white;'> Delete</button> 
			</td>
			</tr>";
	}	
}


?>