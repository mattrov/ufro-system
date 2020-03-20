
<html>
<head>
	<title> EMPLOYEE DELETE</title>
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
			<li class="nav-item"><h5>UNIVERSITY FACILITIES RESERVATION OFFICE</h5><h7> Employee Records</h7></li>
			<li class="nav-item ml-auto"><a class="nav-link" href="#">Home</a></li>
			<li class="nav-item ml-2"><button type="button" class="btn btn-danger" href="#">Logout</button></li>
		</ul>
	</nav>
<center><h2>Delete Record</h2>
	<form method='post'>
	<p>User #: <input type="text" name="user_id" size=20maxlength=40 /></p>
	<p><input type='submit' name='search' value='Search' /></p>
</form>
</center>
<?php
if (isset($_POST['search']))
{
include('Mysql_connect.php');
$id = $_POST['user_id'];
$sql = "SELECT user_id, first_name, last_name, email,
registration_date FROM users WHERE user_id='$id' ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

if ($row)
{
echo "User ID : " . $row[0] . "<br>";
echo "Name : " . $row[1] . " " . $row[2] . "<br>";
echo "Email Address : " . $row[3] . "<br>";
echo "Date registered : " . $row[4] . "<br>";
echo "<form action='deleted.php' method='post'>
<br><h4>Deleting Record.... Are you sure?</h4>
<p><input type=hidden name='user_id' value='$_POST[user_id]'>
<input type=radio name='ans' value='Yes'>YES
<input type=radio name='ans' value='No'>NO <br><br>
<p><input type='submit' name='delete' value='Delete' /></p>
</form>";
}
else
echo "No record found...";
}
?>
<br><br>
<center> <a href="updateemployee.php"> Back </a> </center>
</body>
</html>