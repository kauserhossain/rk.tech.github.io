<?php 
	$id = $_GET['id'];
	include('../include/connect.php');
	$conn= connectDB();
	
	$sql ="SELECT post.*, catatories.title as categoryTitle
	 FROM post
	 JOIN catatories ON post.categoryid = catatories.id
	 WHERE post.id ='$id'";
	 $result= mysqli_query($conn,$sql);
	$data= mysqli_fetch_assoc($result);
	
	$title= $_POST['title'];
	$description= $_POST['description'];
	$date= $_POST['date'];
	$category= $_POST['category'];
	
	$sqle = "UPDATE post SET title='$title',
			description='$description',
			date='$date',
			category='$category'";
	
	if(!empty( $_FILES['image']['name']))
	{
		$rand = rand(11111,999999999);
		$image='upload/'. $rand. $_FILES['image']['name'];
		$upload= '../upload/'.$rand. $_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'], $upload);
		$sqle.= ",image= '$image'";
		
		if(!empty( $data['image']))
		{
			echo $data['image'];
			unlink( '../' .$data['image']);	
		}
	}
	$sqle.= "WHERE id='$id'";
	
			
	
	mysqli_query($conn,$sqle);
	
	header ("location: postindex.php");

	
?>  