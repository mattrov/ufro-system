<?php

$servername = "localhost";
$username="root";
$password="";
$database="ufro";
$conn = mysqli_connect($servername,$username,$password,$database);
 if(isset($_POST['update'])){
$id=$_POST['id'];
$empno=$_POST['student_no'];
$empname=$_POST['student_name'];
$tripstart=$_POST['date'];
$appt=$_POST['time'];
$inlineRadioOptions=$_POST['gender'];
$evename=$_POST['event_name'];
$facility=$_POST['facility'];
$adviser=$_POST['adviser'];
$query = "UPDATE student SET
student_no='".$empno."',
student_name='".$empname."',
date='".$tripstart."',
time='".$appt."',
gender='".$inlineRadioOptions."',
event_name='".$evename."',
facility='".$facility."',
adviser='".$adviser."'
WHERE id='".$id."'
";
$result = mysqli_query($conn,$query);

header("location: updstudsearch.php");
}


?>
