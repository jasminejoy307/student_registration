<?php include("superuserbase.php");
?>
<div class="container-fluid bg-style media1">
			
	<div class="row">
					
		<div class="col-md-12 log-style">
<!----------------------------form to display profile------------------------>
			<div class="form-group">
			<table class="table table-striped card-text bg-light">
		<thead>
			<tr>
				
				<th>UserName</th>
				<th>DOB</th>
				<th>Email</th>
				<th>Gender</th>
				<th>Phone No</th>
				<th>Department</th>
				<th>Qualification</th>
				<th>Admin Id</th>
				<th>Password</th>
				<th>Action</th>
				
				
			</tr>
		</thead>
<?php
		include '../controller/Mycontroller.php';
		$obj=new Mycontroller();
		$result=$obj->adminview();
		while($row=mysqli_fetch_assoc($result))
		{
			?>
			
			<tbody>
								
				
						<tr>
						<form method="post">
							<td scope="row"><input type="text" name="username" value="<?php echo $row['username'];?>"></td>
							<td scope="row"><?php echo $row['dob'];?></td>
							<td scope="row"><?php echo $row['email'];?></td>
							<td scope="row"><?php echo $row['gender'];?></td>
							<td scope="row"><?php echo $row['phoneno'];?></td>
							<td scope="row"><?php echo $row['deptname'];?></td>
							<td scope="row"><?php echo $row['qualification'];?></td>
							<td scope="row"><?php echo $row['adminid'];?></td>
							<td scope="row"><?php echo $row['password'];?></td>
							<td><input type="submit" value="remove" class="btn-danger" name="remove"></td>
						</form>
						</tr>
						
					 
						
					
		
		<?php
							}
							if(isset($_POST['remove']))
							{
								$obj->removeadmin($_POST['username']);
							}
						?>
						</tbody>
						</table>
		</div>
	</div>
	</div>
	
	
	</div>
  </body>
</html>