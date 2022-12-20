<?php session_start();

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

  <title>Crop Protection | Statistics </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
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
			User Registration 
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
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <p>
			   <a href="Dashboard.php" class="nav-link">
                Dashboard
				 </a>
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
                <a href="../pages/forms/Advise.php" class="nav-link">
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
                <a href="../../pages/tables/ReportsTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Reports</p>
                </a>
              </li>
             <li class="nav-item">
                <a href="../../pages/tables/ServiceProvidersTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Service Providers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../pages/tables/AdviseTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Advise</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../pages/tables/BiocontrolagentsTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Bio Control Agents</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="../../pages/tables/DiseaseTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Crop Diseases</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="../../pages/tables/StatisticsTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Statistics</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="../../pages/tables/AppMembersTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>App Users</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="../../pages/tables/ExtensionWorkersTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Extension Workers</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="../../pages/tables/NotificationsTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Notifications</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="../../pages/tables/SmsTable.php" class="nav-link">
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
                <a href="ServiceProvidersReport.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Service Providers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="AdviseReport.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Advise</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="BiocontrolReport.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Bio Control Agents</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="DiseaseReport.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Crop Diseases</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="StatisticsReport.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Statistics</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="profile.php" class="nav-link">
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
            <h1>Statistics</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../Dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Statistics</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fa fa-info"></i> Note:</h5>
              This page is a display of all the Statistics registered with the system in A desceding way based on Order of registration, so you can print this accordingly.
            </div>


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fa fa-globe"></i> Crop Protection.
                    <small class="float-right">Date: <?php 
					$dates=date("Y-m-d");
					echo $dates?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                   <thead>
				<tr>
                  <th>Statistic</th>
                  <th>Details</th>
                  <th>Posted By</th>
                  <th>Date Posted</th>
                </tr>
				</thead>
               <?php
				require_once('../../Connection/connect.php');
				$sales6 ="SELECT Statistic,Details,PostedBy,postdate,Attachment FROM `statistics` order by Statisticsid Desc";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){
                 echo"<tr>";
				 echo "<td>".$row5['Statistic']."</td>";
				 echo "<td>".$row5['Details']."</td>";
                 echo "<td>".$row5['PostedBy']."</td>";
                 echo "<td>".$row5['postdate']."</td>";
				
                echo"</tr>";
				}
				?>
                </tbody>
                <tfoot>
                <tr>
                  <th>...</th>
                  <th>...</th>
                  <th>...</th>
                  <th>...</th>
                </tr>
                </tfoot>
              </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
               
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Total Statistics Posted</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Total:</th>
                        <td>
<?php
require_once('../../Connection/connect.php');
$dates1=date("Y");
$sales ="SELECT COUNT(Statisticsid) as members FROM `Statistics`";
$result=mysqli_query($link,$sales);
$row=mysqli_fetch_assoc($result);
$totalmales=$row['members'];
echo $totalmales;
?> 
</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="StatisticsPrint.php" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                <!--  <button type="button" class="btn btn-success float-right"><i class="fa fa-credit-card"></i> Submit
                    Payment
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fa fa-download"></i> Generate PDF
                  </button>-->
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer no-print">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2019 <a href="http://cropprotection.com">Crop protection</a>.</strong> All rights
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
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
