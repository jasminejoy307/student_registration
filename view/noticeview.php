<?php include("studentbase.php");
?>
<?php session_start();
?>
<div class="container-fluid bg-style media1">
			
	<div class="row">
					
		<div class="col-md-12 log-style">
<!----------------------------form to display profile------------------------>
			<div class="form-group">
			<table class="table table-striped card-text bg-light">
		<thead>
			<tr>
				
				<th>Notice Id</th>
				<th>Title</th>
				<th>Begining Date</th>
				<th>Author</th>
				<th>Ending Date</th>
				<th>Description</th>
				<th>Admin Id</th>
				<th>Semester</th>
				
			</tr>
		</thead>
<?php
		include '../controller/Mycontroller.php';
		$obj=new Mycontroller();
		
		$result=$obj->stdnotice($_SESSION['semester']);
		while($row=mysqli_fetch_assoc($result))
		{
			?>
			
			<tbody>
								
				
						<tr>
						<form>
							<td scope="row"><?php echo $row['noticeid'];?></td>
							<td scope="row"><?php echo $row['title'];?></td>
							<td scope="row"><?php echo $row['begdate'];?></td>
							<td scope="row"><?php echo $row['author'];?></td>
							<td scope="row"><?php echo $row['enddate'];?></td>
							<td scope="row"><?php echo $row['description'];?></td>
							<td scope="row"><?php echo $row['adminid'];?></td>
							<td scope="row"><?php echo $row['semester'];?></td>
						</form>
						</tr>
					 
						
					</tbody>
		
		<?php
							}
						?>
						</table>
		</div>
	</div>
	</div>
	
	
	</div>
  </body>
</html>