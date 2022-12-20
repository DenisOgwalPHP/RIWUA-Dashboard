<?php 
session_start();

if(isset($_SESSION['user'])){
	}
	else{
		
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Crop Protection | Notifications </title>
   <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
  
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="../../images/CropProtectionLogo.png" />
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-success navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../Dashboard.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
	<li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-user"></i>
          <!--<span class="badge badge-danger navbar-badge">3</span>-->
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/profile placeholder.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
               
                <?php
				 //echo'<h3 class="dropdown-item-title">';
				  echo'<p class="text-sm text-muted">';
				echo $_SESSION['user'];
                echo'</p>';
                echo'<p class="text-sm text-muted">';
				echo $_SESSION['email'];
				echo'</p>';

				?>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
         <!--add message here-->
          <div class="dropdown-divider"></div>
          
          <div class="dropdown-divider"></div>
          <a href="../../logout.php" class="dropdown-item dropdown-footer">Logout</a>
        </div>
      </li>
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-comments-o"></i>
          <!--<span class="badge badge-danger navbar-badge">3</span>-->
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <div class="media-body">
               
                <?php
				require_once('../../Connection/connect.php');
				$dates1=date("Y");
				$telecontact=$_SESSION['Telephone'];
				$sales ="SELECT Name,TimeRegistered  FROM `message` where Contact = '".$telecontact."'";
				$result=mysqli_query($link,$sales);
				while($row=mysqli_fetch_assoc($result)){
				$totalmales=$row['Name'];
				$TimeRegistered=$row['TimeRegistered'];
				 //echo'<h3 class="dropdown-item-title">';
				  echo'<p class="text-sm text-muted">';
				echo $totalmales;
                  echo'<span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>';
                echo'</p>';
                echo'<p class="text-sm">';
				echo'</p>';
                echo'<p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i>';
				echo $TimeRegistered;
				echo'</p>';
				}
				?>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
         <!--add message here-->
          <div class="dropdown-divider"></div>
          
          <div class="dropdown-divider"></div>
          <a href="tables/SmsTable.php" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-bell-o"></i>
        <!--  <span class="badge badge-warning navbar-badge">15</span>-->
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Today's Notifications</span>
          <div class="dropdown-divider"></div>
         
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-users mr-2"></i> 
			<?php
			require_once('../../Connection/connect.php');
			$dates1=date("Y-m-d");
			$sales ="SELECT COUNT(IDDesc) as members FROM `registration` where created_at like '".$dates1."%' and DOB is NULL";
			$result=mysqli_query($link,$sales);
			$row=mysqli_fetch_assoc($result);
			$totalmales=$row['members'];
			echo $totalmales;
			?>
			Member Registration 
            <!--<span class="float-right text-muted text-sm">12 hours</span>-->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-file mr-2"></i> 
			<?php
			require_once('../../Connection/connect.php');
			$dates1=date("Y-m-d");
			$sales ="SELECT COUNT(ID) as members FROM `story` where created_at like '".$dates1."%'";
			$result=mysqli_query($link,$sales);
			$row=mysqli_fetch_assoc($result);
			$totalmales=$row['members'];
			echo $totalmales;
			?>
			Reports
            <!--<span class="float-right text-muted text-sm">2 days</span>-->
          </a>
          <div class="dropdown-divider"></div>
          <!--<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>-->
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../Dashboard.php" class="brand-link">
      <img src="../../images/CropProtectionLogo.png" alt=" Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Crop Protection</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/profile placeholder.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> <?php echo $_SESSION['user'];?></a>
        </div>
      </div>
	  
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="../../Dashboard.php" class="nav-link">
              <p>
                Dashboard
              </p>
            </a>
            </li>
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Forms
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="../../pages/forms/ServiceProviders.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Service Providers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../pages/forms/Advise.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Advise</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../pages/forms/BioControlAgents.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Bio Control Agents</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="../../pages/forms/Diseases.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Crop Diseases</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="../../pages/forms/Statistic.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Statistics</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="../../pages/forms/Notifications.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Notifications</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="../../pages/forms/SMS.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>SMS</p>
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Records
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="ReportsTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Reports</p>
                </a>
              </li>
             <li class="nav-item">
                <a href="ServiceProvidersTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Service Providers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="AdviseTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Advise</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="BiocontrolagentsTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Bio Control Agents</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="DiseaseTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Crop Diseases</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="StatisticsTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Statistics</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="AppMembersTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>App Users</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="ExtensionWorkersTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Extension Workers</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="NotificationsTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Notifications</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="SmsTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>SMS</p>
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                Reports
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../pages/examples/ServiceProvidersReport.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Service Providers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../pages/examples/AdviseReport.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Advise</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../pages/examples/BiocontrolReport.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Bio Control Agents</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="../../pages/examples/DiseaseReport.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Crop Diseases</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="../../pages/examples/StatisticsReport.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Statistics</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../../pages/examples/profile.php" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Profile
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Notifications</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../Dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Notifications</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Notifications Records</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
				<tr>
                  <th>Subject</th>
                  <th>Notification</th>
                  <th>Posted By</th>
                  <th>Date Posted</th>
				   <th> </th>
				   
                </tr>
				</thead>
               <?php
				require_once('../../Connection/connect.php');
				$sales6 ="SELECT Subject,Sender,RealMessage,TimeSent,notificationid FROM `Notifications` order by notificationid Desc";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){
                 echo"<tr>";
				 echo "<td>".$row5['Subject']."</td>";
				 echo "<td>".$row5['RealMessage']."</td>";
                 echo "<td>".$row5['Sender']."</td>";
                 echo "<td>".$row5['TimeSent']."</td>";
				  $notificationid=$row5['notificationid']; 
				  echo'<td><form method="get" ><a href="NotificationsTable.php"><button type="submit" name="delete"  value="'.$notificationid.'" class="btn btn-block btn-danger">Delete</button></a></form></td>'; 
                echo"</tr>";
				}
				?>
				<?php
				if(isset($_GET['delete'])){
					$notificationid=$_GET['delete'];	
                        if(isset($notificationid)){
				$sales6 ="DELETE  FROM Notifications WHERE notificationid='".$notificationid."'";
				$result=mysqli_query($link,$sales6);
				if($result){
				echo '<script type="application/javascript">';
				echo'alert("Notification successfully Deleted");';
				echo'window.location.href="NotificationsTable.php";';
				echo '</script>';
							}else{
				echo '<script type="application/javascript">';
				echo'alert("Notification Delete Failed");';
				//echo'alert("'.$id.'");';
				echo'window.location.href="NotificationsTable.php";';
				echo '</script>';
								}
						 }
						 }
						  ?>  
                </tbody>
                <tfoot>
                <tr>
                  <th>...</th>
                  <th>...</th>
                  <th>...</th>
                  <th>...</th>
                  <th>...</td>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2019 <a href="http://cropprotection.com">Crop Protection</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>