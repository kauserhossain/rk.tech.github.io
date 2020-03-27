<?php
	if(isset($_GET['id'])){
	include('../include/connect.php');
	$id= $_GET['id'];
	$conn= connectDB();
	$sql ="SELECT * FROM catatories WHERE id='$id'";
	$result= mysqli_query($conn,$sql);
	$row= mysqli_fetch_assoc($result);

	}

 include('../include/header.php'); 
 ?>
		<a href="catindex.php" class="btn btn-success">Back</a>
		<br>
		<div class="content">
			<h2> Edit Catogory </h2>
			<form action="update.php?id=<?php echo $row["id"]?>" method="POST"  >
				  <div class="form-group">
					<label for="Title">Title</label>
					<input type="title" class="form-control" id="title" value="<?php echo $row['title']?>" name="title" placeholder="Title" >
				  </div>
				  </div>
				  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
			</form>
		</div>
		
<?php include('../include/footer.php'); ?>