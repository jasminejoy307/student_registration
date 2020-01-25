<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> dashboard</title>
		<!-- Custom fonts for this template-->
		<link  rel="stylesheet" href="fontawesome/css/all.min.css">
		<link href="css/sb-admin-2.min.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/style3.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style3.css">
</head>

<body id="page-top">


<!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
			<div>
		<img  class="img-fluid">
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php" class="text-center">
          <i class="fas fa-user user-font px-4"></i></a></li>

        <!-- Divider -->
	  

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="addadmin.php" >
          <i class="fas fa-chalkboard-teacher"></i>
          <span>Add Admin</span>
        </a>

      </li>
	    <li class="nav-item">
        <a class="nav-link collapsed" href="viewstudents.php" >
          <i class="fas fa-chalkboard-teacher"></i>
          <span>View Students</span>
        </a>

      </li>

 <li class="nav-item">
        <a class="nav-link collapsed" href="viewadmins.php" >
          <i class="fas fa-chalkboard-teacher"></i>
          <span>View Admins</span>
        </a>

      </li>

      <!-- Attendance Menu -->
     <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="studentleave.php" >
          <i class="fas fa-school"></i>
          <span>Current Sem</span>
        </a>
      </li>
      

      <!-- Nav Item -ptrevious details-->
      
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
		<div class="container-fliud">
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow bg-dark">
		<!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle  bg-light">
            <i class="fa fa-bars"></i>
          </button>
		 <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto pr-5 p-hide">

            <!-- Nav Item - Alerts -->
            <li class="nav-item ">
              <a class="nav-link " href="superlogin.php">
                <i class="fas fa-home"><p> Home</p></i>
              </a>
              
            </li>
			<!--<li class="nav-item">
              <a class="nav-link " href="#">
                <i class="fas fa-user "><p> Myprofile</p></i>
              </a>
              
            </li>-->
			
			
			<li class="nav-item">
              <a class="nav-link " href="firstpage.php" >
                <i class="fas fa-sign-out-alt  text-gray"><p>LogOut</p></i>
              </a>
            </li>

          </ul>

        </nav>
</body>
</html>