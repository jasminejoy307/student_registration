<?php include("studentbase.php");
?>
<?php session_start();
?>
<div class="container-fluid bg-style media1">
			
	<div class="row">
					
		<div class="col-md-12 log-style">
<!----------------------------form to display profile------------------------>
			<div class="form-group">
			<?ph echo $row['username'];?></h1><br>
			<table class="table table-striped card-text bg-light">
		<thead>
			<tr>
				
				<th>Register No</th>
				<th>Username</th>
				<th>Subject Code</th>
				<th>Subject Name</th>
				<th>Result</th>
				<th>Credits</th>
				<th>Total GPA</th>
				
			</tr>
		</thead>
<?php
		include '../controller/Mycontroller.php';
		$obj=new Mycontroller();
		
		$result=$obj->stdresult($_SESSION['regno']);
		while($row=mysqli_fetch_assoc($result))
		{
			?>
			
			<tbody>
								
				
						<tr>
						<form>
							<td scope="row"><?php echo $row['regno'];?></td>
							<td scope="row"><?php echo $row['username'];?></td>
							<td scope="row"><?php echo $row['code'];?></td>
							<td scope="row"><?php echo $row['subjectname'];?></td>
							<td scope="row"><?php echo $row['result'];?></td>
							<td scope="row"><?php echo $row['credits'];?></td>
							<td scope="row"><?php echo $row['totalgpa'];?></td>
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