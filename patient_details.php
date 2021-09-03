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
		<span>Appointment Details</span>
	</div>

		<div class="recent">
			<span class="recents"> *Recently Added</span>
		</div>

<table>

	<thead class="table-card">
		<tr class="table-card1">
			<th>First Name</th>
			<th>Last Name</th>
			<th>Contact Number</th>
			<th>Email</th>
			<th>Appointment</th>
		</tr>
	</thead>

	<tbody>
			<?php get_patients_details(); ?>
	</tbody>
</table>

<!--<style type="text/css">
#patient-card{
	padding: 20px;
	background-color: #6600ff;;
	padding-top: 15px;  
	margin-top: 10px;
	width: 95%;
	border: none;
	color: #e0ccff;
	border-radius: 5px;
}
.card-patient span{
	margin-left: 17px;
	margin-top: 7px;


}	
.card-patient .span{
	background-color: #944dff;
	padding: 5px;
	margin: 5px;
	color: white:;
	border-radius: 5px;
	text-decoration: none;
}
.span a{
	color: #e0ccff;
	text-decoration: none;
}
.span a:hover{
	color: #f2f2f2;
	text-decoration: none;
	font-size: 13px;
}
.recent{
	margin: 50px auto 0;
	width: 70%;
	color: #e0ccff;
	padding: 12px;
	border-radius: 5px;
	font-size: initial;
	background-color: #944dff;
}
table{
	border: 1px solid #cccccc;
	margin: 50px auto 0;
	border-radius: 10px;
}

table th{
	text-transform: uppercase;
	border: none;
	font-size: 15px;
	border-top: 1px solid #6600ff;
	border-bottom: 1px solid #6600ff;
	background-color: 
	color: #737373;
	margin: 12px;
	padding: 12px;
	border-radius: 5px;	margin: 12px;
}
table .table-card1{
	background-color: #e6e6e6;
	width: 100%;
	margin: 12px;
}
tr td{
	font-size: 12px;
	border-bottom: 1px solid #cccccc;


}
</style> -->

</body>
</html>