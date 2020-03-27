<?php
	
	function connectDB(){
	$conn= mysqli_connect("localhost", "root", "", "blog" );
	return $conn;
	}
?>