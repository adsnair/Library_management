<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$type=$_POST['type'];
$year_level=$_POST['year_level'];
$link = mysqli_connect("127.0.0.1", "root","", "lib_management");							
mysqli_query($link, "insert into member(firstname,lastname,gender,address,contact,type,year_level) values('$firstname','$lastname','$gender','$address','$contact','$type','$year_level')")or die(mysqli_error($link));
 
 
header('location:member.php');
}
?>	