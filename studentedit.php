<!DOCTYPE html>
<html>
<head>
	<title> STUDENT UPDATE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand navbar-light bg-light">
		<img src="img/png/umak.png" class="navbar-brand" height="85px" width="81px"></img>
		<ul class="navbar-nav w-100">
			<li class="nav-item"><h5>UNIVERSITY FACILITIES RESERVATION OFFICE</h5><h7> Student Records</h7></li>
			<li class="nav-item ml-auto"><a class="nav-link" href="#">Home</a></li>
			<li class="nav-item ml-2"><button type="button" class="btn btn-danger" href="#">Logout</button></li>
		</ul>
	</nav>
	<center><h1>Update Record</h1></center>
<form action="edited.php" method="POST">
<center>
<br><br>
Student Number:<input type="text" name="student_number" size="25">
<br><br>
Student Name:<input type="text" name="studentname" size="35">
<br><br>
<label for="start"> Date:</label>

<input type="date" id="start" name="trip-start"
       value="2018-07-22"
       min="2010-01-01" max="2025-12-31">
<br>
	Time: <input type="time" id="appt" name="appt"  
       min="09:00" max="18:00" required> 
<br>
Gender: <input type="radio" name="gender">Male <input type="radio" name="gender">Female
<br>
Event name: <input type="text" name="event" size="20">
<br>
Facility: <input type="text" name="facility" size="20">
<br>
Adviser: <input type="text" name="facility" size="20">
<br>
<br>
<input type="Reset" value="Reset" name="Reset">
<input type="button" name="edit" value="BACK" >
<input type="button" name="save" value="UPDATE">
</center>

<br> <center><a href="view.php"> View Information </a>
</center>
</body>
</html>
