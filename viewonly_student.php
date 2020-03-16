<!DOCTYPE html>
<html>
<head>
	<title>Facility Reservation Records</title>
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
			<li class="nav-item"><h5>UNIVERSITY FACILITIES RESERVATION OFFICE</h5><h7>Facility Reservation Records</h7></li>
			<li class="nav-item ml-auto"><a class="nav-link" href="#">Home</a></li>
			<li class="nav-item ml-2"><a class="nav-link" href="#">Admin Login</a></li>
		</ul>
	</nav>

	<div class="jumbotron jumbotron-fluid">
		<div class="form-group">
			<div class="row m-1">
				<input class="form-control col-sm-3 m-1" type="text" name="search"></input>
				<button type="button" class="btn btn-primary ml-1">Search Record</button>	
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
					<tbody>
						<tr>
							<th scope="col">001</th>
							<td>Mikasa Mikoto</td>
							<td>11-03-2020</td>
							<td>14:35</td>
							<td>F</td>
							<td>Ayos ng TV</td>
							<td>Grand Theater</td>
							<td>Dean Principal</td>
						</tr>
					</tbody>
				</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>