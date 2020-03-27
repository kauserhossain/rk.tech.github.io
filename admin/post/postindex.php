<?php include('../include/connect.php');?>

<?php
   $conn= connectDB();
	$sql ="SELECT * FROM post";
	$result= mysqli_query($conn,$sql);
	
?>

<?php include('../include/header.php'); ?>
	
		<a href="pcreat.php" class="btn btn-success">+ Add Post</a>
		<div class="content">
		<h2> Post List</h2>
		
			<table class="table table-bordered">
				<thead>
					<th>id</th>
					<th>Title</th>
					<th>Image</th>
					<th>Date</th>
					<th>Action</th>
				</thead>
			<?php while ($row=mysqli_fetch_assoc($result)){ ?>
				<tr>
					<td><?php echo $row['id'];?></td>
					<td><?php echo $row['title'];?></td>
					<td><img src="../<?= $row['image'];?>" width="100"></td>
					<td><?php echo $row['date'];?></td>
					<td>
						<a class="btn btn-success btn-sm" href="pview.php?id=<?php echo $row["id"]?>">View</a>
						<a class="btn btn-info btn-sm" href="pedit.php?id=<?php echo $row["id"]?>">Edit</a>						
						<a class="btn btn-danger btn-sm" onclick=" return confirm('are you sure')" 
						href="pdelete.php?id=<?php echo $row["id"]?>">Delete</a>
					</td>
				</tr>	
			<?php } ?>	
			</table>
		
		</div>
		
<?php include('../include/footer.php'); ?>