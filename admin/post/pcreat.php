<?php 
	include('../include/connect.php');
     $conn= connectDB();
	 $sql ="SELECT * FROM catatories";

	$result= mysqli_query($conn,$sql);
	
	include('../include/header.php');


?>
	
	<a href="postindex.php" class="btn btn-success">Back</a>
		<br>
		<div class="content">
			<h2> Add New Post</h2>
		<form action="pstore.php" method="POST" enctype="multipart/form-data" >
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" class="form-control"  name="title" placeholder="Title" >
			</div>
			 <div class="form-group">
				<label for="description">Description</label>
				<textarea type="text" class="form-control"  name="description" rows="5"></textarea>
			</div>
			<div class="form-group">
				<label for="image">Image</label>
				<input type="file" class="form-control"  name="image">
			</div>
			<div class="form-group">
				<label for="date">Date</label>
				<input type="date" class="form-control"  name="date" placeholder="Date" >
			</div>
			<div class="form-group">
				<label for="category">Category</label>
				<select class="form-control" name="category">
				<option>Select Category</option>
					<?php while ($row=mysqli_fetch_assoc($result)){ ?>
						<option  value="<?= $row['id'];?>"><?= $row['title'];?></option>
					<?php } ?>
				</select>
			</div> 
				  
			<button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</form>
		</div>
<?php include('../include/footer.php'); ?>
