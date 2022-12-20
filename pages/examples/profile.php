<?php session_start();

if(isset($_SESSION['user'])){
	}
	else{
		
		}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Crop Protection | User Profile</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
   <link rel="shortcut icon" type="image/x-icon" href="images/CropProtectionLogo.png" />
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
              <img src ="../../dist/img/profile placeholder.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  <?php echo $_SESSION['user'];?>
                  <span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
         <!--add message here-->
          <div class="dropdown-divider"></div>
          
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-bell-o"></i>
        <!--  <span class="badge badge-warning navbar-badge">15</span>-->
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">1 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-envelope mr-2"></i> 1 new notifications
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-users mr-2"></i> 2 Member Registration 
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-file mr-2"></i> 1 Reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
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
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
				  <?php
				  require_once('../../Connection/connect.php');
				  $emails=$_SESSION['email'];
				$sales6 ="SELECT ProfilePic FROM `registration` WHERE Email='".$emails."' ";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){
				 echo '<img class="profile-user-img img-fluid img-circle" src="'.$row5["ProfilePic"].'"'.'alt="User Image">';
				}
				 ?>
                </div>

                <h3 class="profile-username text-center"><?php echo $_SESSION['user'];?></h3>
				<p class="text-muted text-center"><?php echo $_SESSION['email'];?></p>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fa fa-book mr-1"></i> Contact</strong>

                <p class="text-muted">
                <?php
				  require_once('../../Connection/connect.php');
				  $emails=$_SESSION['email'];
				$sales6 ="SELECT Telephone FROM `registration` WHERE Email='".$emails."' ";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){
				 echo "".$row5['Telephone'];
				}
				 ?>
                </p>

                <hr>

                <strong><i class="fa fa-map-marker mr-1"></i> Location</strong>

                <p class="text-muted">
				<?php
				  require_once('../../Connection/connect.php');
				  $emails=$_SESSION['email'];
				$sales6 ="SELECT Address FROM `registration` WHERE Email='".$emails."' ";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){
				 echo "".$row5['Address'];
				}
				 ?>
				</p>

                <hr>

                <strong><i class="fa fa-pencil mr-1"></i> DOB</strong>

                <p class="text-muted">
                 <?php
				  require_once('../../Connection/connect.php');
				  $emails=$_SESSION['email'];
				$sales6 ="SELECT DOB FROM `registration` WHERE Email='".$emails."' ";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){
				 echo "".$row5['DOB'];
				}
				 ?>
                </p>

                <hr>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Messages</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Notifications</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
					                         
                       <!-- <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="float-right btn-tool"><i class="fa fa-times"></i></a>
                        </span>
                        <span class="description">Shared publicly - 7:30 PM today</span>-->
                      </div>
                   
					  <?php
				  require_once('../../Connection/connect.php');
				  $emails=$_SESSION['email'];
				$sales6 ="SELECT Message FROM `message` ";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){
				 echo ' <p>'.$row5["Message"].'</p>';
				  echo ' <p>
				  <a href="#" class="link-black text-sm mr-2"><i class="fa fa-share mr-1"></i> Share</a>
				  <a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up mr-1"></i> Like</a>
				   <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="fa fa-comments-o mr-1"></i> Comments
                          </a>
                        </span>
				  </p>';
				  echo'<input class="form-control form-control-sm" type="text" placeholder="Type a comment">';
				}
				 ?>
                        
                    </div>  
                    <div class="post">                 
                    </div>
                  
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                   <!--   <ul class="timeline timeline-inverse">
                     timeline time label -->
                      
                      <?php
				  require_once('../../Connection/connect.php');
				  $emails=$_SESSION['email'];
				$sales6 ="SELECT Subject,RealMessage FROM `Notifications` order by notificationid DESC ";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){
				echo ' <p>'.$row5["Subject"].'</p>';
				 echo ' <p>'.$row5["RealMessage"].'</p>';
				  echo ' <p>
				  <a href="#" class="link-black text-sm mr-2"><i class="fa fa-share mr-1"></i> Share</a>
				  <a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up mr-1"></i> Like</a>
				   <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="fa fa-comments-o mr-1"></i> Comments
                          </a>
                        </span>
				  </p>';
				  echo'<input class="form-control form-control-sm" type="text" placeholder="Type a comment">';
				}
				 ?>
                     
                    <!--</ul>-->
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Name</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="Enter Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder=" Enter Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName2" class="col-sm-2 control-label">Telephone</label>

                        <div class="col-sm-10">
                          <input type="number" class="form-control" id="inputName2" placeholder="Enter Telephone No">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputExperience" class="col-sm-2 control-label">Location</label>

						<div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Enter Location">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputSkills" class="col-sm-2 control-label">DOB</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Date of Birth">
                        </div>
                      </div>
					  <div class="form-group">
                        <label for="inputSkills" class="col-sm-2 control-label">Profile Picture</label>
						<div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
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
</body>
</html>
