<?php
$servername = "localhost";
$username ="root";
$password="";
$database="ufro";
$empno = $_POST['empno'];
$empname = $_POST['empname'];
$tripstart = $_POST['trip-start'];
$appt = $_POST['appt'];
$inlineRadioOptions = $_POST['inlineRadioOptions'];
$evename = $_POST['evename'];
$facility = $_POST['facility'];
$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
	die("Unable to Select Database: ".mysqli_connect_error());
}
header("location: viewrecsemployee.php");

$query = "INSERT INTO employee VALUES ('','$empno','$empname','$tripstart','$appt','$inlineRadioOptions','$evename',
'$facility')";
mysqli_query($conn,$query);

?>
</body>
</html>