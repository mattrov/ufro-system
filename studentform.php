<!DOCTYPE html>
<html>
<head>
	<title>Application form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
<!-- NAVBAR -->
	<nav class="navbar navbar-expand navbar-light bg-light">
		<img src="img/png/umak.png" class="navbar-brand" height="85px" width="81px"></img>
		<ul class="navbar-nav w-100">
			<li class="nav-item"><h5>UNIVERSITY FACILITIES RESERVATION OFFICE</h5><h7>Student Reservation Form</h7></li>
			<li class="nav-item ml-auto"><a class="nav-link" href="admin.php">Home</a></li>
			<li class="nav-item ml-2"><button type="button" class="btn btn-danger" href="#">Logout</button></li>
		</ul>
	</nav>


<div class="jumbotron jumbotron-fluid">
		<?php include("sidebaradd.php") ?>
	<div class="card offset-sm-3 col-sm-6">
			<div class="card-body">
				<h3 class="text-center p-4">Application Form</h3>
				<div class="form-horizontal">
					<form method='post' action="studaddaction.php">
						<div class="form-group">
							<div class="row">
								<label class="control-label">Student Number:</label>
								<input class="form-control" type="text" name="empno" required></input>	
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<label class="control-label">Student Name:</label>
								<input class="form-control" type="text" name="empname" required></input>	
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<label for="start" class="control-label">Date:</label>
								<input class="form-control" type="date" id="start" name="trip-start" value="2018-07-22"
								min="2010-01-01" max="2025-12-31" required></input>	
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<label for="start" class="control-label">Time:</label>
								<input class="form-control" type="time" id="appt" name="appt"  
       							min="09:00" max="18:00" required></input>	
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<label class="control-label">Gender:</label>
								<div class="form-check form-check-inline ml-5">
  									<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Male">
  									<label class="form-check-label" for="inlineRadio1">Male</label>
								</div>
								<div class="form-check form-check-inline ml-5">
  									<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Female">
  									<label class="form-check-label" for="inlineRadio2">Female</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<label class="control-label">Event Name:</label>
								<input class="form-control" type="text" name="evename"></input>	
							</div>
						</div>

						<div class="form-group">
      						<div class="row">
      							<label for="inputState">Facility</label>
      							<select id="inputState" name="facility" class="form-control">
      						  		<option selected>Oval</option>
      						  		<option>Grand Theater</option>
      						  		<option>Mini Theater</option>
      							</select>
      						</div>
   	 					</div>

   	 					<div class="form-group">
   	 						<div class="row">
   	 							<label class="control-label">Adviser Name:</label>
   	 							<input class="form-control" type="text" name="advisername" required>
   	 						</div>
   	 					</div>
						<input class="btn btn-primary offset-sm-4" type="submit" name="submit" value="Done"></input>
						<input class="btn btn-danger" type="Reset" value="Reset" name="Reset">
						<input class="btn btn-secondary" type="button" name="edit" value="BACK">
					</form>	
				</div>
			</div>
		</div>
	<!--Employee Number:<input type="text" name="student_number" size="25">
<br><br>
Employee Name:<input type="text" name="studentname" size="35">
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
<br>
<input type="Reset" value="Reset" name="Reset">
<input type="button" name="edit" value="BACK">
<input type="button" name="save" value="DONE">-->
</div>
</body>
</html>
