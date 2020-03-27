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
	 
	 
	 $sql ="SELECT * FROM catatories";

	$result= mysqli_query($conn,$sql);
	
	include('../include/header.php');


?>
	
	<a href="postindex.php" class="btn btn-success">Back</a>
		<br>
		<div class="content">
			<h2> Add New Post</h2>
		<form action="pupdate.php?id=<?php echo $id;?>" method="POST" enctype="multipart/form-data" >
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" class="form-control"
				name="title" placeholder="Title" value="<?php echo $data['title'];?>" >
			</div>
			 <div class="form-group">
				<label for="description">Description</label>
				<textarea type="text" class="form-control"  name="description" rows="5"><?php echo $data['description'];?></textarea>
			</div>
			<div class="form-group">
				<label for="image">Image</label>
				<input type="file" class="form-control"  name="image">
				<img src="../<?php echo  $data['image'];?>" width="100"/>
			</div>
			<div class="form-group">
				<label for="date">Date</label>
				<input type="date" class="form-control"  name="date" placeholder="Date" value="<?php echo $data['date'];?>" >
			</div>
			<div class="form-group">
				 
				<label for="category">Category</label>
				<select class="form-control" name="category">
				<option>Select Category</option>
					<?php while ($row=mysqli_fetch_assoc($result)){ ?>
						<?php if($data['categoryid']== $row['id']){ ?>
							<option  value="<?= $row['id'];?>" selected ><?php  echo $row['title'];?></option>
						<?php }else { ?>
							<option  value="<?= $row['id'];?>"><?php  echo $row['title'];?></option>
						<?php } ?>
						
					<?php } ?>
				</select>
			</div> 
				  
			<button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</form>
		</div>
<?php include('../include/footer.php'); ?>
