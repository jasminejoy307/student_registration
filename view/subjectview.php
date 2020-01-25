<?php include("studentbase.php");
?>
<div class="container-fluid bg-style media1">
			
	<div class="row">
					
		<div class="col-md-12 log-style">
<!----------------------------form to display profile------------------------>
			<div class="form-group">
<?php
		include '../controller/Mycontroller.php';
		$obj=new Mycontroller();
		session_start();
		$result=$obj->stdsubject($_SESSION['semester']);
		while($row=mysqli_fetch_assoc($result))
		{
			?>
			<table class="table table-striped card-text bg-light">
		<thead>
			<tr>
				
				<th>Subjectcode</th>
				<th>semester</th>
				<th>year</th>
				<th>credit</th>
				<th>subjectname</th>
				<th>adminid</th>
				
			</tr>
		</thead>
			<tbody>
								
				
						<tr>
						<form>
							<td scope="row"><?php echo $row['code'];?></td>
							<td scope="row"><?php echo $row['semester'];?></td>
							<td scope="row"><?php echo $row['year'];?></td>
							<td scope="row"><?php echo $row['creadit'];?></td>
							<td scope="row"><?php echo $row['subjectname'];?></td>
							<td scope="row"><?php echo $row['adminid'];?></td>
						</form>
						</tr>
					 
						
					</tbody>
		</table>
		<?php
							}
						?>
		</div>
	</div>
	</div>
	
	
	</div>
  </body>
</html>