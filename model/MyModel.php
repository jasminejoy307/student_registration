<?php 
class MyModel
{
	
	function insertadmin($uname,$dob,$email,$gender,$phoneno,$deptname,$qualification,$adminid,$pass)
		{
			include '../config/connection.php';
			$sql="insert into admin(username,dob,email,gender,phoneno,deptname,qualification,adminid,password) values('".$uname."','".$dob."','".$email."','".$gender."','".$phoneno."','".$deptname."','".$qualification."','".$adminid."','".$pass."')";
			if(mysqli_query($con,$sql))
			{
				echo "Registration successfully";
			}
		}
		function adminlogin($uname,$pass)
	{
		include '../config/connection.php';
		$sql="select * from admin where username='".$uname."' and password='".$pass."'";
		$result=mysqli_query($con,$sql);
		
		if (mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				header('location:../view/base.php');
			
			}
		}
	}
		function insert($name,$regno,$dob,$email,$gender,$phoneno,$deptname,$qualification,$batch,$uname,$pass,$semester)
		{
			include '../config/connection.php';
			$sql="insert into registrations(name,regno,dob,email,gender,phoneno,deptname,qualification,batch,username,password,semester) values('".$name."','".$regno."','".$dob."','".$email."','".$gender."','".$phoneno."','".$deptname."','".$qualification."','".$batch."','".$uname."','".$pass."','".$semester."')";
			if(mysqli_query($con,$sql))
			{
				echo "Registration successfully";
			}
		}
	function userlogin($user,$pass)
	{
		include '../config/connection.php';
		$sql="select * from registrations where username='".$user."' and password='".$pass."'";
		$result=mysqli_query($con,$sql);
		
		if (mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				session_start();
				$_SESSION['regno']=$row['regno'];
				$_SESSION['semester']=$row['semester'];
				$_SESSION['adminid']=$row['adminid'];
				header('location:studentbase.php');
			
			}
		}
	}
	
	function updat($firstname,$lastname,$email)
	{
		include '../config/connection.php';
		$sq="update registrations set firstname='".$firstname."',lastname='".$lastname."'where email='".$email."' ";
		if(!$result = $con->query($sq))
		{

			die('there was an error running in the query ['.$con->error.']');		
		}
		else
		{
			echo "successful";
		}
	}
	function insertsub($code,$semester,$year,$creadit,$subjectname,$adminid)
		{
			include '../config/connection.php';
			$sql="insert into subject(code,semester,year,creadit,subjectname,adminid) values('".$code."','".$semester."','".$year."','".$creadit."','".$subjectname."','".$adminid."')";
			if(mysqli_query($con,$sql))
			{
				echo "Registration successfully";
			}
		}
	function inserttimetable($semester,$day,$subjectname,$coursename,$code,$time,$adminid)
	{
		include '../config/connection.php';
		$sql="insert into timetable(semester,day,subjectname,coursename,code,time,adminid) values ('".$semester."','".$day."','".$subjectname."','".$coursename."','".$code."','".$time."','".$adminid."')";
		if(mysqli_query($con,$sql))
			{
				echo "Registration successfully";
			}
	}
	function insertsubjectlist($subjectname,$coursename,$adminid)
	{
	    include '../config/connection.php';
		$sql="insert into subjectlist(subjectname,coursename,adminid) values ('".$subjectname."','".$coursename."','".$adminid."')";
		if(mysqli_query($con,$sql))
			{
				echo "Registration successfully";
			}
        		
	}
	function insertnotice($noticeid,$title,$begdate,$author,$enddate,$description,$adminid,$semester)
	{
	    include '../config/connection.php';
		$sql="insert into notice(noticeid,title,begdate,author,enddate,description,adminid,semester) values ('".$noticeid."','".$title."','".$begdate."','".$author."','".$enddate."','".$description."','".$adminid."','".$semester."')";
		if(mysqli_query($con,$sql))
			{
				echo "Registration successfully";
			}
        		
	}
	
	function insertresult($regno,$uname,$code,$subjectname,$result,$credits,$totalgpa)
	{
	    include '../config/connection.php';
		$sql="insert into result(regno,username,code,subjectname,result,credits,totalgpa) values ('".$regno."','".$uname."','".$code."','".$subjectname."','".$result."','".$credits."','".$totalgpa."')";
		if(mysqli_query($con,$sql))
			{
				echo "Registration successfully";
			}
        		
	}
	function studentprofile($regno)
	{
		include '../config/connection.php';
		$sql="SELECT * FROM registrations WHERE regno='".$regno."'";
		$result=mysqli_query($con,$sql);
		return $result;
	}
	function profileadmin($adminid)
	{
		include '../config/connection.php';
		$sql="SELECT * FROM admin WHERE adminid='".$adminid."'";
		$result=mysqli_query($con,$sql);
		return $result;
	}
	function studenttimetable($semester)
	{
		include '../config/connection.php';
		$sql="SELECT * FROM timetable WHERE semester='".$semester."'";
		$result=mysqli_query($con,$sql);
		return $result;
	}
	function studentresult($regno)
	{
		include '../config/connection.php';
		$sql="SELECT * FROM result WHERE regno='".$regno."'";
		$result=mysqli_query($con,$sql);
		return $result;
	}
	function studentsubject($semester)
	{
		include '../config/connection.php';
		$sql="SELECT * FROM subject WHERE semester='".$semester."'";
		$result=mysqli_query($con,$sql);
		return $result;
	}
	function studentnotice($semester)
	{
		include '../config/connection.php';
		$sql="SELECT * FROM notice WHERE semester='".$semester."'";
		$result=mysqli_query($con,$sql);
		return $result;
	}
	function studentview()
	{
		include '../config/connection.php';
		$sql="SELECT * FROM registrations";
		$result=mysqli_query($con,$sql);
		return $result;
	}
	function viewadmin()
	{
		include '../config/connection.php';
		$sql="SELECT * FROM admin";
		$result=mysqli_query($con,$sql);
		return $result;
	}
	function adminremove($uname)
	{
	  include '../config/connection.php';
		$sql="DELETE FROM admin WHERE username='".$uname."'";
		if(mysqli_query($con,$sql))
		{
			#header('location:viewadmins.php');
		}
		else
		{
			echo 'error';
		}
	}
	function stdremove($name)
	{
	  include '../config/connection.php';
		$sql="DELETE FROM registrations WHERE name='".$name."'";
		if(mysqli_query($con,$sql))
		{
			#header('location:viewstudents.php');
		}
		else
		{
			echo 'error';
		}
	}
}

?>