<?php include("base.php");
?>
<div class="container-fluid bg-style media1">
			
	<div class="row">
					
		<div class="col-md-12 log-style">
	<form name="subject" method="post" class="m-auto py-3 text-light p-3 form-style rounded">	
	
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='subjectname' required="required" placeholder="Subject_Name">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='coursecode' required="required" placeholder="Course_Code">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='adminid' required="required" placeholder="ID">
	<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">submit</button>
	
</form>

<?php 
if(isset($_POST['submit']))
	{
		include '../controller/MyController.php';
		$obj=new MyController();
		$obj->sublistinsert($_POST['subjectname'],$_POST['coursecode'],$_POST['adminid']);
	
	}
?>

</div>
</div>
</div>