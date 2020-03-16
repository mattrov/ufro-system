<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
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
			<li class="nav-item"><h5>UNIVERSITY FACILITIES RESERVATION OFFICE</h5></li>
			<li class="nav-item ml-auto"><a class="nav-link" href="#">Home</a></li>
		</ul>
	</nav>

	<div class="jumbotron jumbotron-fluid">
		<div class="card offset-sm-3 col-sm-6">
			<div class="card-body">
				<h3 class="text-center p-4">Admin Login</h3>
				<div class="form-horizontal">
					<form method='post'>
						<div class="form-group">
							<div class="row">
								<label class="control-label offset-sm-3 col-sm-2 p-1">Username:</label>
								<input class="form-control col-sm-4" type="text" name="email"></input>	
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<label class="control-label offset-sm-3 col-sm-2 p-1">Password:</label>
								<input class="form-control col-sm-4" type="password" name="password"></input>	
							</div>
						</div>
						<input class="btn btn-info offset-sm-5" type="submit" name="submit" value="Login"></input>
					</form>	
				</div>
			</div>
		</div>
	</div>
</body>
</html>