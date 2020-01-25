<?php include("base.php");
?>
<div class="container-fluid bg-style media1">
			
	<div class="row">
					
		<div class="col-md-12 log-style">
	<form name="subject" method="post" class="m-auto py-3 text-light p-3 form-style rounded">	
	
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='noticeid' required="required" placeholder="Notice Id">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='title' required="required" placeholder="title">
	<input type="date" class="form-control inputcomponent mt-md-3 space" name='begdate' required="required" placeholder="begningdate">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='author' required="required" placeholder="author">
	<input type="date" class="form-control inputcomponent mt-md-3 space" name='enddate' required="required" placeholder="endingdate">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='description' required="required" placeholder="description">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='adminid' required="required" placeholder="ID">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='semester' required="required" placeholder="semester">
	<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">submit</button>
	
						

</form>

<?php 
if(isset($_POST['submit']))
	{
		include '../controller/MyController.php';
		$obj=new MyController();
		$obj->noticeinsert($_POST['noticeid'],$_POST['title'],$_POST['begdate'],$_POST['author'],$_POST['enddate'],$_POST['description'],$_POST['adminid'],$_POST['semester']);
	
	}
?>

</div>
</div>
</div>