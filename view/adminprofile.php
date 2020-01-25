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
		$result=$obj->adminprofile($_SESSION['adminid']);
		while($row=mysqli_fetch_assoc($result))
		{
			?>
			<h1><?php echo $row['name'];?></h1><br>
			
			<div class="form-group">
				<label class="col-sm-3 control-label">Name</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="username" value="<?php echo $row['username'];?>" readonly>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label">dob</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="dob" value="<?php echo $row['dob'];?>" readonly>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">email</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="email" value="<?php echo $row['email'];?>" readonly>
				</div>
			</div>	
			<div class="form-group">
				<label class="col-sm-3 control-label">gender</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="gender" value="<?php echo $row['gender'];?>" readonly>
				</div>
			</div>	
			<div class="form-group">
				<label class="col-sm-3 control-label">phoneno</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="phoneno" value="<?php echo $row['phoneno'];?>" readonly>
				</div>
			</div>	
			<div class="form-group">
				<label class="col-sm-3 control-label">department name</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="deptname" value="<?php echo $row['deptname'];?>" readonly>
				</div>
			</div>

				<div class="form-group">
				<label class="col-sm-3 control-label">qualification</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="qualification" value="<?php echo $row['qualification'];?>" readonly>
				</div>
			</div>			
			<div class="form-group">
				<label class="col-sm-3 control-label">adminid</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="adminid" value="<?php echo $row['adminid'];?>" readonly>
				</div>
			</div>	
			
			<div class="form-group">
				<label class="col-sm-3 control-label">password</label>
				<div class="col-sm-8">
					<input type="text" id="mobile" class="form-control" name="batch" value="<?php echo $row['password'];?>" readonly>
				</div>
			</div>	
			
			</div>
<?php
}
?>			
		
		</div>
		</div>
		</div>
		</div>
		
		