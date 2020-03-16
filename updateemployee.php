<!DOCTYPE html>
<html>
<head>
	<title> UPDATE STUDENT</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/bootstrap.min.js"></script>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "guestbook";
$dbc = mysqli_connect($servername,$username,$password,$database);
$query = "SELECT * FROM contacts";
$result = mysqli_query($dbc,$query);
$num = mysqli_num_rows($result);

?>
<nav class="navbar navbar-expand navbar-light bg-light">
		<img src="img/png/umak.png" class="navbar-brand" height="85px" width="81px"></img>
		<ul class="navbar-nav w-100">
			<li class="nav-item"><h5>UNIVERSITY FACILITIES RESERVATION OFFICE</h5><h7> Employee Records</h7></li>
			<li class="nav-item ml-auto"><a class="nav-link" href="#">Home</a></li>
			<li class="nav-item ml-2"><button type="button" class="btn btn-danger" href="#">Logout</button></li>
		</ul>
	</nav>
<div class="jumbotron jumbotron-fluid">
	<div class="card offset-sm-1 col-sm-10">
			<div class="card-body">
				<h3 class="text-center p-4">Edit  Record</h3>
				<div class="form-horizontal">
					<form method='post'>
						<div class="form-group">
			<div class="row m-1">
				<input class="form-control col-sm-3 m-1" type="text" name="search"></input>
				<button type="button" class="btn btn-primary ml-1">Search</button>		
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
						</tr>
					</thead>
<?php
$i=1;
while($row = mysqli_fetch_array($result))
{

?>
<tr>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $row['id'];?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $row['first']." ".$row['last'];?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $row['phone'];?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $row['mobile'];?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $row['fax'];?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><a href="mailto:<?php echo $email;?>">
<?php echo $row['email'];?></a></font></td>
<td><font face="Arial, Helvetica, sans-serif"><a href="<?php echo $web;?>">
<?php echo $row['web'];?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><a href="employeeedit.php?id=<?php echo $row['id'] ?>">
Edit <br> <a href="employeedelete.php?id=<?php echo $row['id'] ?>">Delete</font></td>
</tr>
<?php
$i++;
}
echo "</table>";
echo "<br> <b>Total Records: $i</b>";
?>
<br>
<a href = "sign.php"><center> Back to Form </center></a>
</body>
</html>



