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

  <title>Crop Protection | Diseases </title>

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
          <a href="../tables/SmsTable.php" class="dropdown-item dropdown-footer">See All Messages</a>
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
                <a href="ServiceProviders.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Service Providers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Advise.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Advise</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="BioControlAgents.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Bio Control Agents</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="Diseases.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Crop Diseases</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="Statistic.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Statistics</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="Notifications.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Notifications</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="SMS.php" class="nav-link">
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
            <h1>Diseases</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../Dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Diseases</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            
            <!-- /.card -->

            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Details</h3>
              </div>
              <div class="card-body">
			  <form action="insertdisease.php" method="post" enctype="multipart/form-data">
			   <div class="form-group">
                    <label for="exampleInputEmail1">Disease</label>
					<input class="form-control" type="text" name="diseasename" placeholder="Enter Disease Name">
               </div>
			   <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" name="diseasedescription" placeholder="Enter Disease Description..."></textarea>
               </div>
			    <div class="form-group">
                    <label for="exampleInputEmail1">Posted By</label>
					<input class="form-control" type="text" name="postednames" placeholder="Posted by...">
               </div>
                
				<div class="form-group">
                    <div class="btn btn-primary btn-sm float-left">
					<span>Attachment</span>
					<input type="file" name="Filename">
					</div>
                  </div>
				<div class="form-group">
				 <label>&nbsp;</label>
				</div>
				  
				<div class="form-group">
                  <button type="submit" name="Diseaseupload" class="btn btn-primary">Submit</button>
				</div> 
				  </form>
				  <!--<div class="form-group">
                    <label>Select</label>
                    <select class="form-control">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>-->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Recent Records</h3>
              </div>
             <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Disease</th>
                  <th>Posted By</th>
                  <th>Posted At</th>
                </tr>
                </thead>
                <tbody>
				<?php
				require_once('../../Connection/connect.php');
				$sales6 ="SELECT Disease,PostedBy,PostDate FROM `diseases` order by Diseaseid Desc LIMIT 10";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){


                 echo"<tr>";
				 echo "<td>".$row5['Disease']."</td>";
				 echo "<td>".$row5['PostedBy']."</td>";
                 echo "<td>".$row5['PostDate']."</td>";
                echo"</tr>";
				}
				?>
                
                </tbody>
                <tfoot>
               <!-- <tr>
                  <th>X</th>
                  <th>X</th>
                  <th>X</th>
                  <th>X</th>
                  <th>X</th>
                </tr>-->
                </tfoot>
              </table>
              </div>
            </div>
            <!-- /.card -->
           
		   
             
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
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