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
if (isset($_POST['search'])) {
	$searchvalue = $_POST['searchvalue'];
	$query = "SELECT * FROM student WHERE student_no LIKE '%".$searchvalue."%' OR student_name LIKE '%".$searchvalue."%' 
	OR date LIKE '%".$searchvalue."%'OR time LIKE '%".$searchvalue."%' OR gender LIKE '%".$searchvalue."%' OR event_name LIKE '%".$searchvalue."%'
	OR facility LIKE '%".$searchvalue."%' OR adviser LIKE '%".$searchvalue."%'";
	$search_result = filterTable($query);

}else {
	$query = "SELECT * FROM student";
	$search_result = filterTable($query);
}


function filterTable($query)
{
	$connect = mysqli_connect("localhost", "root", "", "ufro");
	$filter_Result = mysqli_query($connect, $query);
	return $filter_Result;

}
?>	
<nav class="navbar navbar-expand navbar-light bg-light">
		<img src="img/png/umak.png" class="navbar-brand" height="85px" width="81px"></img>
		<ul class="navbar-nav w-100">
			<li class="nav-item"><h5>UNIVERSITY FACILITIES RESERVATION OFFICE</h5><h7> Student Records</h7></li>
			<li class="nav-item ml-auto"><a class="nav-link" href="admin.php">Home</a></li>
			<li class="nav-item ml-2"><button type="button" class="btn btn-danger" href="#">Logout</button></li>
		</ul>
	</nav>
<div class="jumbotron jumbotron-fluid">
	<div class="card offset-sm-1 col-sm-10">
			<div class="card-body">
				<h3 class="text-center p-4">Edit  Record</h3>
				<div class="form-horizontal">
					<form method='post' action="updstudsearch.php">
						<div class="form-group">
			<div class="row m-1">
				<input class="form-control col-sm-3 m-1" type="text" name="searchvalue" required></input>
				<button type="submit" name="search" class="btn btn-primary ml-1">Search</button>		
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
							<th scope="col">EDIT/ARCHIVE</th> 
						</tr>
					</thead>
<?php
if(mysqli_num_rows($search_result) > 0){
$i=1;
while($row = mysqli_fetch_array($search_result))
{

?>
<tr>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $row['student_no'];?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $row['student_name'];?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $row['date'];?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $row['time'];?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $row['gender'];?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $row['event_name'];?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $row['facility'];?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $row['adviser'];?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><a href="studedit.php?id=<?php echo $row['id'] ?>">
Edit <br> <a href="employeedelete.php?id=<?php echo $row['id'] ?>">Delete</font></td>
</tr>
<?php
$i++;
}
}
else {
		    echo "No results found...";
		}

?>
<br>
<a href = "viewrecsstudent.php"><center> Back to Table </center></a>
</body>
</html>



