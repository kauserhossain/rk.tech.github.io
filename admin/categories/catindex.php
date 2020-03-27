<?php include('../include/connect.php'); ?>
<?php
	$conn= connectDB();
	$sql ="SELECT * FROM catatories";
	$result= mysqli_query($conn,$sql);


?>



<?php include('../include/header.php'); ?>
	
		<a href="creat.php" class="btn btn-success">+ Add Categories</a>
		<div class="content">
		<h2> Catogory list</h2>
		<table class="table table-bordered">
		
			<thead>
				<td>ID</td>
				<td>Title</td>
				<td>Action</td>
			</thead>
		<?php while ($row=mysqli_fetch_assoc($result)){ ?>
				<tr>
					<td><?php echo $row['id'];?></td>
					<td><?php echo $row['title'];?></td>
					<td>
						<a class="btn btn-info btn-sm" href="edit.php?id=<?php echo $row["id"]?>">Edit</a>						
						<a class="btn btn-danger btn-sm" onclick=" return confirm('are you sure')" 
						href="delete.php?id=<?php echo $row["id"]?>">Delete</a>
					</td>
				</tr>
		<?php } ?>	
		
		</table>
		</div>
		
<?php include('../include/footer.php'); ?>