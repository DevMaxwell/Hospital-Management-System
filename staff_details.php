<!DOCTYPE html>
<?php include 'function.php'; ?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<title>HMS</title>
</head>
<body>

	<div class="card-patient" id="patient-card">
		<span class="span"><a href="admin.php">Back</a></span>
		<span>Staff Details</span>
	</div>

	<div class="recent">
			<span class="recents"> *Recently Added</span>			
	</div>


<table>
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>email</th>
			<th>contact</th>
			<th>duty</th>
			<th>qual</th>
			<th>date joined</th>
			<th>file</th>
			<th>Action</th>
		</tr>
	</thead>

	<tbody>
			<?php get_staff_details();
			 ?>

			
	</tbody>
</table>

</body>
</html>