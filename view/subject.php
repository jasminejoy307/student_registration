<?php include("base.php");
?>
<div class="container-fluid bg-style media1">
			
	<div class="row">
					
		<div class="col-md-12 log-style">
	<form name="subject" method="post" class="m-auto py-3 text-light p-3 form-style rounded">	
	
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='code' required="required" placeholder="Code">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='semester' required="required" placeholder="Semester">
	<input type="date" class="form-control inputcomponent mt-md-3 space" name='year' required="required" placeholder="Year">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='creadit' required="required" placeholder="creadit">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='subjectname' required="required" placeholder="subjectname">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='adminid' required="required" placeholder="ID">
	<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">submit</button>
	
						

</form>

<?php 
if(isset($_POST['submit']))
	{
		include '../controller/MyController.php';
		$obj=new MyController();
		$obj->Subinsert($_POST['code'],$_POST['semester'],$_POST['year'],$_POST['creadit'],$_POST['subjectname'],$_POST['adminid']);
	
	}
?>

</div>
</div>
</div>