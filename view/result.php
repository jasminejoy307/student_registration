<?php include("base.php");
?>
<div class="container-fluid bg-style media1">
			
	<div class="row">
					
		<div class="col-md-12 log-style">
	<form name="subject" method="post" class="m-auto py-3 text-light p-3 form-style rounded">	
	
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='regno' required="required" placeholder="Register No">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='username' required="required" placeholder="username">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='code' required="required" placeholder="coursecode">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='subjectname' required="required" placeholder="Subject name">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='result' required="required" placeholder="result">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='credits' required="required" placeholder="credits">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='totalgpa' required="required" placeholder="Total Gpa">
	<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">submit</button>
	
						

</form>

<?php 
if(isset($_POST['submit']))
	{
		include '../controller/MyController.php';
		$obj=new MyController();
		$obj->resultinsert($_POST['regno'],$_POST['username'],$_POST['code'],$_POST['subjectname'],$_POST['result'],$_POST['credits'],$_POST['totalgpa']);
	
	}
?>

</div>
</div>
</div>