<?php 
	include('../include/connect.php');
	$conn= connectDB();
	
	if(isset($_POST['submit'])){
	$title= $_POST['title'];
	
	$sql = "INSERT INTO catatories VALUES(NULL, '$title')";
	$result= mysqli_query($conn,$sql);
	
	header ("location: catindex.php");

	}
?>