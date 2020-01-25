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
		$result=$obj->Studentprofile($_session['regno']);
		while($row=mysqli_fetch_assoc($result))
		{
			?>
			<h1><?php echo$row['Name'];?></h1><br>
			
			<div class="form-group">
				<label class="col-sm-3 control-label">Name</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="name" value="<?php echo $['name'];?>" readonly>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label">RegisterNo</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="regno" value="<?php echo $['regno'];?>" readonly>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">DOB</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="dob" value="<?php echo $['dob'];?>" readonly>
				</div>
			</div>	
			<div class="form-group">
				<label class="col-sm-3 control-label">Email</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="email" value="<?php echo $['email'];?>" readonly>
				</div>
			</div>	
			<div class="form-group">
				<label class="col-sm-3 control-label">Gender</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="gender" value="<?php echo $['gender'];?>" readonly>
				</div>
			</div>	
			<div class="form-group">
				<label class="col-sm-3 control-label">PhoneNo</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="phoneno" value="<?php echo $['phoneno'];?>" readonly>
				</div>
			</div>

				<div class="form-group">
				<label class="col-sm-3 control-label">Departmentname</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="deptname" value="<?php echo $['deptname'];?>" readonly>
				</div>
			</div>			
			<div class="form-group">
				<label class="col-sm-3 control-label">Qualification</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="qualification" value="<?php echo $['qualification'];?>" readonly>
				</div>
			</div>	
			
			<div class="form-group">
				<label class="col-sm-3 control-label">Batch</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="batch" value="<?php echo $['batch'];?>" readonly>
				</div>
			</div>	
			<div class="form-group">
				<label class="col-sm-3 control-label">Username</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="username" value="<?php echo $['username'];?>" readonly>
				</div>
			</div>	
			<div class="form-group">
				<label class="col-sm-3 control-label">Password</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="password" value="<?php echo $['password'];?>" readonly>
				</div>
			</div>	
		}
		</div>
		
		