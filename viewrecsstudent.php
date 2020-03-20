<!DOCTYPE html>
<html>
<head>
	<title>View Records</title>
</head>
<body>
<nav class="navbar navbar-expand navbar-light bg-light">
	<img src="img/png/umak.png" class="navbar-brand" height="85px" width="81px"></img>
	<ul class="navbar-nav w-100">
		<li class="nav-item"><h5>UNIVERSITY FACILITIES RESERVATION OFFICE</h5><h7>Facilities Reservation Records</h7></li>
		<li class="nav-item ml-auto"><a class="nav-link" href="admin.php">Home</a></li>
		<li class="nav-item ml-2"><button type="button" class="btn btn-danger" href="#">Logout</button></li>
	</ul>
</nav>
<div class="jumbotron jumbotron-fluid">
	<div class="row">
		<?php include("sidebar.php") ?>
		<div class="card offset-sm-1 col-sm-8">
			<div class="card-body">
				<h3 class="text-center p-4">View Record</h3>
				<div class="form-horizontal">
					<form method='post'>
						<div class="form-group">
			<div class="row m-1">
				<input class="form-control col-sm-3 m-1" type="text" name="search"></input>
				<button type="button" class="btn btn-primary ml-1">Search</button>	
				<button type="button" class="btn btn-secondary ml-1">Edit</button>	
			</div>
		</div>
		<div class="card">
			<div class="card body text-center">
				<div class="table-responsive">
					<table class="table text-center">
					<thead>
						<tr>
							<th scope="col">STUDENT#</th>
							<th scope="col">STUDENT NAME</th>
							<th scope="col">DATE</th>
							<th scope="col">TIME</th>
							<th scope="col">GENDER</th>
							<th scope="col">EVENT NAME</th>
							<th scope="col">FACILITY</th> 
							<th scope="col">ADVISER</th> 
						</tr>
					</thead>		
				</table>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>