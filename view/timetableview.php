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
				
				<th>day</th>
				<th>subjectname</th>
				<th>coursename</th>
				<th>subjectcode</th>
				<th>time</th>
				<th>adminid</th>
				
			</tr>
		</thead>
<?php
		include '../controller/Mycontroller.php';
		$obj=new Mycontroller();
		
		$result=$obj->stdtimetable($_SESSION['semester']);
		while($row=mysqli_fetch_assoc($result))
		{
			?>
			
			<tbody>
								
				
						<tr>
						<form>
							<td scope="row"><?php echo $row['day'];?></td>
							<td scope="row"><?php echo $row['subjectname'];?></td>
							<td scope="row"><?php echo $row['coursename'];?></td>
							<td scope="row"><?php echo $row['code'];?></td>
							<td scope="row"><?php echo $row['time'];?></td>
							<td scope="row"><?php echo $row['adminid'];?></td>
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