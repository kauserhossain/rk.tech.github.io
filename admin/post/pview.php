<?php 
	$id= $_GET['id'];
	include('../include/connect.php');
     $conn= connectDB();
	 $sql ="SELECT post.*, catatories.title as categoryTitle
	 FROM post
	 JOIN catatories ON post.categoryid = catatories.id
	 WHERE post.id ='$id'";

	$result= mysqli_query($conn,$sql);
	$data= mysqli_fetch_assoc($result);
	
	include('../include/header.php');


?>
	
	<a href="postindex.php" class="btn btn-success">Back</a>
		<br>
		<div class="content">
			<h2> Add New Post</h2>
			
			<table class= "table">
				<tr>
					<th>Title</th>
					<td><?= $data['title'] ?></td>
				</tr>
				<tr>
					<th>Category</th>
					<td><?= $data['categoryTitle'] ?></td>
				</tr>
				<tr>
					<th>Description</th>
					<td><?= $data['description'] ?></td>
				</tr>
				<tr>
					<th>Image</th>
					<td><img src="../<?= $data['image'] ?>" width="200" /></td>
				</tr>
				<tr>
					<th>Date</th>
					<td><?= $data['date'] ?></td>
				</tr>
			</table>
		
		</div>
<?php include('../include/footer.php'); ?>