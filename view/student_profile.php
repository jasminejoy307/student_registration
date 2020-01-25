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
		$result=$obj->stdprofile($_SESSION['regno']);
		while($row=mysqli_fetch_assoc($result))
		{
			?>
			<h1><?php echo $row['name'];?></h1><br>
			
			<div class="form-group">
				<label class="col-sm-3 control-label">Name</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="name" value="<?php echo $row['name'];?>" readonly>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label">RegisterNo</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="regno" value="<?php echo $row['regno'];?>" readonly>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">DOB</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="dob" value="<?php echo $row['dob'];?>" readonly>
				</div>
			</div>	
			<div class="form-group">
				<label class="col-sm-3 control-label">Email</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="email" value="<?php echo $row['email'];?>" readonly>
				</div>
			</div>	
			<div class="form-group">
				<label class="col-sm-3 control-label">Gender</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="gender" value="<?php echo $row['gender'];?>" readonly>
				</div>
			</div>	
			<div class="form-group">
				<label class="col-sm-3 control-label">PhoneNo</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="phoneno" value="<?php echo $row['phoneno'];?>" readonly>
				</div>
			</div>

				<div class="form-group">
				<label class="col-sm-3 control-label">Departmentname</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="deptname" value="<?php echo $row['deptname'];?>" readonly>
				</div>
			</div>			
			<div class="form-group">
				<label class="col-sm-3 control-label">Qualification</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="qualification" value="<?php echo $row['qualification'];?>" readonly>
				</div>
			</div>	
			
			<div class="form-group">
				<label class="col-sm-3 control-label">Batch</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="batch" value="<?php echo $row['batch'];?>" readonly>
				</div>
			</div>	
			<div class="form-group">
				<label class="col-sm-3 control-label">Username</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="username" value="<?php echo $row['username'];?>" readonly>
				</div>
			</div>	
			<div class="form-group">
				<label class="col-sm-3 control-label">Password</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="password" value="<?php echo $row['password'];?>" readonly>
				</div>
			</div>
<?php
}
?>			
		
		</div>
		</div>
		</div>
		</div>
		
		