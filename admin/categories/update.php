<?php 
	include('../include/connect.php');
	$conn= connectDB();
	
	if(isset($_POST['submit'])){
	$id = $_GET['id'];
	$title= $_POST['title'];
	
	$sql = "UPDATE catatories SET title='$title' WHERE id= '$id'";
	$result= mysqli_query($conn,$sql);
	
	header ("location: catindex.php");

	}
?>  