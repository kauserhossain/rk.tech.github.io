<?php 

	$rand = rand(11111,999999999);

	$image='upload/'. $rand. $_FILES['image']['name'];
	$upload= '../upload/'.$rand. $_FILES['image']['name'];
	
	move_uploaded_file($_FILES['image']['tmp_name'], $upload);
	
	
	$title= $_POST['title'];
	$description= $_POST['description'];
	$date= $_POST['date'];
	$category= $_POST['category'];
	
	
	header("location: postindex.php");
	
	include('../include/connect.php'); 
	$conn= connectDB();
	
	$sql ="INSERT INTO post VALUES (NULL, '$category', '$title', '$description', '$image', '$date')";
	
	$result= mysqli_query($conn,$sql);



?>