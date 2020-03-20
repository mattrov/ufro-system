<?php

$servername = "localhost";
$username="root";
$password="";
$database="ufro";
$conn = mysqli_connect($servername,$username,$password,$database);
 if(isset($_POST['update'])){
$id=$_POST['id'];
$empno=$_POST['employee_no'];
$empname=$_POST['employee_name'];
$tripstart=$_POST['date'];
$appt=$_POST['time'];
$inlineRadioOptions=$_POST['gender'];
$evename=$_POST['event_name'];
$facility=$_POST['facility'];
$query = "UPDATE employee SET
employee_no='".$empno."',
employee_name='".$empname."',
date='".$tripstart."',
time='".$appt."',
gender='".$inlineRadioOptions."',
event_name='".$evename."',
facility='".$facility."'
WHERE id='".$id."'
";
$result = mysqli_query($conn,$query);

header("location: updateemployee.php");
}


?>
