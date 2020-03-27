<?php include('../include/connect.php'); ?>

<?php
	$conn= connectDB();
	$sql ="SELECT * FROM catatories";
	$result= mysqli_query($conn,$sql);


?>



<?php include('../include/header.php'); ?>
	
		<a href="catindex.php" class="btn btn-success">Back</a>
		<br>
		<div class="content">
			<h2> Add new Catogory </h2>
			<form action="store.php" method="POST" >
				  <div class="form-group">
					<label for="Title">Title</label>
					<input type="title" class="form-control" id="title" name="title" placeholder="Default input" >
				  </div>
				  </div>
				  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
			</form>
		</div>
		
<?php include('../include/footer.php'); ?>