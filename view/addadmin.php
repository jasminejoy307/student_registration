<?php include("superuserbase.php");
?>
<script>
	function validate_form()
	{
		var x=document.forms['myform']['username'].value
		var y=document.forms['myform']['password'].value
		
		
		if(x=="" ||y=="")
		{
			alert("fill the fileds");
		}
	}
	</script>
<div class="container-fluid bg-style media1">
			
	<div class="row">
					
		<div class="col-md-12 log-style">
	<form name="addstudent" method="post" class="m-auto py-3 text-light p-3 form-style rounded">	
	
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='username' required="required" placeholder="username">
	<input type="date" class="form-control inputcomponent mt-md-3 space" name='dob' required="required" placeholder="Date of Birth">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='email' required="required" placeholder="E-mail">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='gender' required="required" placeholder="Gender">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='phoneno' required="required" placeholder="mobile number">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='deptname' required="required" placeholder="Department_name">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='qualification' required="required" placeholder="qualification">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='adminid' required="required" placeholder="adminid">
		
	<input type="password" class="form-control inputcomponent mt-md-3 space" name='password' required="required" placeholder="password">	
	<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">submit</button>
								
	<button type="button" class="btn btn-default loginbutton m-t-5">
	<span class="google-button__icon"></span>
						

</form>

<?php 
if(isset($_POST['submit']))
	{
		include '../controller/MyController.php';
		$obj=new MyController();
		$obj->SaveadminData($_POST['username'],$_POST['dob'],$_POST['email'],$_POST['gender'],$_POST['phoneno'],$_POST['deptname'],$_POST['qualification'],$_POST['adminid'],$_POST['password']);
	
	}
?>

</div>
</div>
</div>