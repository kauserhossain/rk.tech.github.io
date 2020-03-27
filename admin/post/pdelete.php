<?php 

	$id= $_GET['id'];
	include('../include/connect.php');
	
	$conn= connectDB();
	
	$sql ="SELECT * FROM post WHERE id= '$id'";
	$result= mysqli_query($conn , $sql);
	$data= mysqli_fetch_assoc($result);
	$img_loc= '../'.$data['image'];
	if(file_exists($img_loc)){
		unlink($img_loc);
	}
	
	$sql = "DELETE FROM post WHERE id= '$id'";
	
	$result= mysqli_query($conn,$sql);
	
	header ("location: postindex.php");


?>