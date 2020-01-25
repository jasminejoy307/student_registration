<?php

class MyController
{
	function SuperloginAct()
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
			if($username=='superuser' && $password=='superuser123')
				{
					header('location:../view/superuserbase.php');
				}
			else
			{
				echo 'failed';
			}	
	}
	// function LoginAct()
	// {
		// $username=$_POST['username'];
		// $password=$_POST['password'];
			// if($username=='admin' && $password=='admin123')
				// {
					// header('location:../view/base.php');
				// }
			// else
			// {
				// echo 'failed';
			// }	
	// }
	function Loadfirst()
		{
			header('location:view/firstpage.php');
			
		}
		
		function SaveadminData($username,$dob,$email,$gender,$phoneno,$deptname,$qualification,$adminid,$password)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->insertadmin($username,$dob,$email,$gender,$phoneno,$deptname,$qualification,$adminid,$password);
	}

function SaveData($name,$regno,$dob,$email,$gender,$phoneno,$deptname,$qualification,$batch,$username,$password,$semester)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->insert($name,$regno,$dob,$email,$gender,$phoneno,$deptname,$qualification,$batch,$username,$password,$semester);
	}
	function Loginadmin($user,$pass)	
{
	include '../model/MyModel.php';
	$mod=new MyModel();
	$mod->adminlogin($user,$pass);
}
function LoginUser($user,$pass)	
{
	include '../model/MyModel.php';
	$mod=new MyModel();
	$mod->userlogin($user,$pass);
}

//function UpDates($first,$last,$email)
//{//
		//include '../model/MyModel.php';
		//$mod=new MyModel();
		//$mod->updat($first,$last,$email);
//
function Subinsert($code,$semester,$year,$creadit,$subjectname,$adminid)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->insertsub($code,$semester,$year,$creadit,$subjectname,$adminid);
	}
function timetableinsert($semester,$day,$subjectname,$coursename,$code,$time,$adminid)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->inserttimetable($semester,$day,$subjectname,$coursename,$code,$time,$adminid);
	}	
	function sublistinsert($subjectname,$coursename,$adminid)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->insertsubjectlist($subjectname,$coursename,$adminid);
	}
 function noticeinsert($noticeid,$title,$begdate,$author,$enddate,$description,$adminid,$semester)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->insertnotice($noticeid,$title,$begdate,$author,$enddate,$description,$adminid,$semester);
	}
function resultinsert($regno,$username,$code,$subjectname,$result,$credits,$totalgpa)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->insertresult($regno,$username,$code,$subjectname,$result,$credits,$totalgpa);
	}
function stdprofile($regno)
{
include '../model/MyModel.php';
$mod=new MyModel();
$result=$mod->studentprofile($regno);
return $result;
}	
function adminprofile($adminid)
{
include '../model/MyModel.php';
$mod=new MyModel();
$result=$mod->profileadmin($adminid);
return $result;
}	
function stdtimetable($semester)
{
include '../model/MyModel.php';
$mod=new MyModel();
$result=$mod->studenttimetable($semester);
return $result;
}
function stdresult($regno)
{
include '../model/MyModel.php';
$mod=new MyModel();
$result=$mod->studentresult($regno);
return $result;
}
function stdsubject($semester)
{
include '../model/MyModel.php';
$mod=new MyModel();
$result=$mod->studentsubject($semester);
return $result;
}
function stdnotice($semester)
{
include '../model/MyModel.php';
$mod=new MyModel();
$result=$mod->studentnotice($semester);
return $result;
}	
function stdview()
{
include '../model/MyModel.php';
$mod=new MyModel();
$result=$mod->studentview();
return $result;
}
function adminview()
{
include '../model/MyModel.php';
$mod=new MyModel();
$result=$mod->viewadmin();
return $result;
}		
function removeadmin($user)
{
#include '../model/MyModel.php';
$mo=new MyModel();
$mo->adminremove($user);

}	
function removestd($user)
{
#include '../model/MyModel.php';
$mo=new MyModel();
$mo->stdremove($user);

}	
		
}
?>
