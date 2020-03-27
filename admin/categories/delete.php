

<?php 
	include('../include/connect.php');
	$conn= connectDB();
	
	
	if(isset($_GET['id'])){
	$id = $_GET['id'];
	
	$sql = "DELETE FROM catatories WHERE id= '$id'";
	
	$result= mysqli_query($conn,$sql);
	
	header ("location: catindex.php");

	}
?>